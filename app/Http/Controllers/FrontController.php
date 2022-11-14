<?php


namespace App\Http\Controllers;
use App\Models\item;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function welcome()
    {
        return view('welcome');

    }

    public function dashboard()
    {
        $items = item::get();
        return view('dashboard')->with('items', $items);
    }

    public function panier($id)
    {
        $item = item::find($id);
        return view('panier')->with('item', $item);
        
    }

    public function test()
    {
        $items = item::get();
        return view('test')->with('items', $items);
    }


}
