<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Candie;
use Illuminate\Http\Request;

class ModelController extends Controller
{
    public function all()
    {
        $candies = Candie::all();

        return Candie::all();
    }
}
