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
}
