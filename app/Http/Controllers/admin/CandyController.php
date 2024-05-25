<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CandyController extends Controller
{
    
    public function index()
    {
        return view('admin.candies.index');
    }

    public function candy($id)
    {
        return view('admin.candies.candy', ['id' => $id]);
    }

}
