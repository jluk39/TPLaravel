<?php

namespace App\Http\Controllers;

use App\Models\Candie;
use Illuminate\Http\Request;

class CandyController extends Controller
{
    public function index()
    {
        $candies = Candie::all();
        return view('web.candies.index');
    }

    public function candy($id)
    {
        return view('web.candies.candy', ['id' => $id]);
    }
}
