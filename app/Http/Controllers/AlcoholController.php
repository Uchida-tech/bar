<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Alcohol;

use App\Http\Requests\PostRequest;

class AlcoholController extends Controller
{
    public function index(Alcohol $alcohol)
    {
        //dd($alcohol);
        return view('alcohols/index')->with(['alcohols' => $alcohol->getPaginateByLimit()]);
    }
    
    public function create()
    {
        return view('alcohols/create');
    }
    
    public function store(Alcohol $alcohol, PostRequest $request) // 引数をRequestからPostRequestにする
    {
        $input = $request['alcohol'];
        $alcohol->fill($input)->save();
        return redirect('/alcohols/' . $alcohol->id);
    }
}
