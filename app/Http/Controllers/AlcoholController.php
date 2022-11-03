<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Alcohol;

class AlcoholController extends Controller
{
    public function index(Alcohol $alcohol)
    {
        //dd($alcohol);
        return view('alcohols/index')->with(['alcohols' => $alcohol->getPaginateByLimit()]);
    }
}
