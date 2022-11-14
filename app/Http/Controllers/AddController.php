<?php

namespace App\Http\Controllers;

use App\Models\item;
use Illuminate\Http\Request;

class AddController extends Controller
{   
    public function add(Request $request)
    {
        item::create([
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description,
            //traiter le path de l'image passé depuis le formulaire input text
            
            // 'imgUrl' => $request->imgUrl->store('public'),



            // 'imgUrl' => $request->file('imgUrl')->store('public'),
            
            // 'imgUrl' => $request->imgUrl->store('public/img'),
            'imgUrl' => $request->imgUrl,
        ]);



        
        return redirect('/test');
    }


    public function panier(Request $request)
    {
        // $bubbleTea_id = $request->input('id');
        // $data = array('bubbleTea_id' => $bubbleTea_id);
        // DB::table('commandes')->insert($data);
        // return redirect()->route('panier');
    }

    
}
