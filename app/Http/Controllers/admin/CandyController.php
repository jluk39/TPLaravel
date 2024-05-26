<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Candie;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Can;

class CandyController extends Controller
{
    
    public function index()
    {
        $candies = Candie::all();
        return view('admin.candies.index');
    }

    public function candy($id)
    {
        return view('admin.candies.candy', ['id' => $id]);
    }

}
