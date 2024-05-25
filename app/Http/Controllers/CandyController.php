<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CandyController extends Controller
{
    public function index()
    {
        return view('web.candies.index');
    }

    public function candy($id)
    {
        return view('web.candies.candy', ['id' => $id]);
    }
}
