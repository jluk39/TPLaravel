<?php

namespace App\Http\Controllers\admin;

use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use App\Models\Candie;
use App\Models\Image;
use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Can;

class CandyController extends Controller
{
    
    public function index()
    {
        $search = request()->input('search');

        $candies = Candie::query()
            ->when($search, function ($query, $search) {
                return $query->where('name', 'like', '%' . $search . '%')
                            ->orWhereHas('type', function ($query2) use ($search) {
                                $query2->where('name', 'like', '%' . $search . '%');
                            });
            })
            ->paginate(12);

        return view('admin.candies.index', compact('candies', 'search'));
    }
    
    public function create()
    {
        $types = Type::all();
        return view('admin.candies.create', compact('types'));
    }

    public function store(Request $request)
    {
        $candie = new Candie;
        $candie->name = request()->input('name');
        $candie->description = request()->input('description');
        $candie->type_id = request()->input('type_id');
        $candie->price = request()->input('price');
        $candie->is_visible = $request->has('is_visible') ? 1 : 0;
        if ($request->hasFile('image')) {
            $src = request()->file('image')->store('candies');
            $image = new Image;
            $image->src = $src;
            $image->save();
            $candie->image_id = $image->id;
        }

        $candie->save();

        return redirect()->route('admin.index');
    }

    public function edit($id)
    {
        $candie = Candie::find($id);
        $types = Type::all();
        return view('admin.candies.edit', compact('candie', 'types'));
    }

    public function update($id, Request $request)
    {
        $candie = Candie::find($id);
        $candie->name = request()->input('name');
        $candie->description = request()->input('description');
        $candie->type_id = request()->input('type_id');
        $candie->price = request()->input('price');
        $candie->is_visible = $request->has('is_visible') ? 1 : 0;
        if ($request->hasFile('image')) {
            // Borrar la imagen antigua si existe
            if ($candie->image) {
                Storage::delete($candie->image->src);
                $candie->image->delete();
            }
            
            // Guardar la nueva imagen
            $src = $request->file('image')->store('candies');
            $image = new Image;
            $image->src = $src;
            $image->save();
            
            $candie->image_id = $image->id;
        }
        $candie->save();

        return redirect()->route('admin.index');
    }

    public function destroy($id)
    {
        $candie = Candie::findOrFail($id);
        $candie->delete();

        return redirect()->route('admin.index');
    }

}
