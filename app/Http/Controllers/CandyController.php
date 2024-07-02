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
        $search = request()->input('search');

        $candiesQuery = Candie::query();

        if ($search) {
            $candiesQuery->where('name', 'like', '%' . $search . '%');
        }

        $candies = $candiesQuery->where('is_visible', 1)->paginate(6);
        $types = Type::all();

        return view('web.candies.index', compact('candies', 'types', 'search'));
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

    public function add(Request $request)
    {
        $id = $request->input('id');
        $cart = session('cart', []);

        if (!is_array($cart)) {
            $cart = [$cart];
        }

        if (!in_array($id, $cart)) {
            $cart[] = $id;
            session(['cart' => $cart]);
        }

        return redirect()->route('web.candies.cart');
    }

    public function remove($id)
    {
        $cart = session('cart', []);

        if (is_array($cart)) {
            $cart = array_filter($cart, function ($current_id) use ($id) {
                return $current_id != $id;
            });

            session(['cart' => array_values($cart)]);
        }

        return redirect()->route('web.candies.cart');
    }

    public function cart()
    {
        $cart = session('cart', []);
        if (!is_array($cart)) {
            $cart = [$cart];
        }

        $candies = Candie::whereIn('id', $cart)->get();
        $total = $candies->sum('price');
        return view('web.candies.cart', compact('candies', 'total'));
    }

    public function buy()
    {
        session()->forget('cart');
        return redirect()->route('web.candies.index')->with('success', 'Gracias por tu compra.');
    }
}