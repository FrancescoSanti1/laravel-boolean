<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Postcard;

class GuestController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function postcardsList()
    {
        $postcards = Postcard::all();
        return json_encode($postcards);
    }

    public function addPostcard()
    {
        return view('newPostcard');
    }

    public function storeNewPostcard(Request $request)
    {
        $validatedData = $request->validate([
            'sender' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'text' => 'required|string|max:10000',
            'image' => 'nullable'
        ]);

        $image = $validatedData['image'];

        // per evitare che due utenti carichino immagini con lo stesso nome, sovrascrivendo quella precedente, si assegna un nome univoco all'immagine prima di salvarla nel database
        $imageName = rand(100000, 999999).'_'.time().'.'.$image->getClientOriginalExtension();

        $image->storeAs('/postcards/', $imageName, 'public');

        return view('index');
    }
}
