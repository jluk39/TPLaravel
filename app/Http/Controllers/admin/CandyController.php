<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Candie;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Can;

class CandyController extends Controller
{
    
    public function index()
    {
        $candies = Candie::paginate(12);
        return view('admin.candies.index', compact('candies'));
    }

    public function create()
    {
        return view('admin.candies.create');
    }

    public function store(Request $request)
    {

        $src = request()->file('image')->store('candies');
        $image = new Image;
        $image->src = $src;
        $image->save();

        $candie = new Candie;
        $candie->name = request()->input('name');
        $candie->description = request()->input('description');
        $candie->type_id = request()->input('type_id');
        $candie->price = request()->input('price');
        //$candie->image_url = request()->input('image_url');
        $candie->image_id = $image->id;
        $candie->is_visible = $request->has('is_visible') ? 1 : 0;
        $candie->save();

        return redirect()->route('admin.index');
    }

    public function edit($id)
    {
        $candie = Candie::find($id);
        return view('admin.candies.edit', compact('candie'));
    }

    public function update($id, Request $request)
    {
        $candie = Candie::find($id);
        $candie->name = request()->input('name');
        $candie->description = request()->input('description');
        $candie->type_id = request()->input('type_id');
        $candie->price = request()->input('price');
        $candie->image_url = request()->input('image_url');
        $candie->is_visible = $request->has('is_visible') ? 1 : 0;
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
