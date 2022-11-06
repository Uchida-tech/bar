<?php

namespace App\Http\Controllers;

use App\Models\Alcohol;
use App\Http\Requests\AlcoholRequest;

class AlcoholController extends Controller
{
    public function index(Alcohol $alcohol)
    {
        //dd($alcohol);
        return view('alcohols/index')->with(['alcohols' => $alcohol->getPaginateByLimit()]);
    }
    
    public function show(Alcohol $alcohol)
    {
        return view('alcohols/show')->with(['alcohol' => $alcohol]);
    }
    
    public function create()
    {
        return view('alcohols/create');
    }
    
    public function store(AlcoholRequest $request, Alcohol $alcohol)
    {
        $input = $request['alcohol'];
        $alcohol->fill($input)->save();
        return redirect('/alcohols/' . $alcohol->id);
    }
    
    public function edit(Alcohol $alcohol)
    {
        return view('alcohols/edit')->with(['alcohol' => $alcohol]);
    }
    
    public function update(AlcoholRequest $request, Alcohol $alcohol)
    {
        $input_alcohol = $request['alcohol'];
        $alcohol->fill($input_alcohol)->save();
    
        return redirect('/alcohols/' . $alcohol->id);
    }
    
    public function delete(Alcohol $alcohol)
    {
        $alcohol->delete();
        return redirect('/');
    }
}
