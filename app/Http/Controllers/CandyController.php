<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Candie;
use App\Models\Type;
use Illuminate\Http\Request;

class CandyController extends Controller
{
    public function index()
    {   
        $candies = Candie::where('is_visible', 1)->paginate(6);
        $types = Type::all();
        return view('web.candies.index', compact('candies', 'types'));
        
    }

    public function candy($id)
    {
        $candie = Candie::find($id);
        return view('web.candies.candy', compact('candie'));
    }

    public function type($type_id)
    {
        $type = Type::find($type_id); 
        $candies = Candie::where('type_id', $type_id)->paginate(6);
        return view('web.candies.types', compact('candies', 'type'));
    }
}
