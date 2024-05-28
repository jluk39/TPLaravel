<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Candie;
use Illuminate\Http\Request;

class CandyController extends Controller
{
    public function index()
    {   
        $candies = Candie::where('is_visible', 1)->paginate(6);
        return view('web.candies.index', compact('candies'));
        
    }

    public function candy($id)
    {
        $candie = Candie::find($id);
        return view('web.candies.candy', compact('candie'));
    }
}
