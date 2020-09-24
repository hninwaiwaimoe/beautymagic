<?php

namespace App\Http\Controllers;

use App\FoodType;
use Illuminate\Http\Request;

class FoodTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $foodtypes=FoodType::all();
        return view('backend.foodtypes.index',compact('foodtypes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.Foodtypes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $request->validate([
            "name" => 'required',
            
        ]);
        
        //datainsert

        $foodtype =new FoodType;
        $foodtype->name = $request->name;
        
        
       
        $foodtype->save();

        //redirect
        return redirect()->route('foodtypes.index');
    }

    /**
     * @param  \App\FoodType  $foodType
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show(FoodType $foodType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\FoodType  $foodType
     * @return \Illuminate\Http\Response
     */
    public function edit(FoodType $foodType,$id)
    {
       $foodtype = FoodType::find($id);

        return view('backend.Foodtypes.edit',compact('foodtype'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\FoodType  $foodType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FoodType $foodType,$id)
    {
         $request->validate([
            "name" => 'required',
            
            
        ]);
        
        //datainsert

       $foodtype = FoodType::find($id);
        $foodtype->name = $request->name;
       
        
       
        $foodtype->save();

        //redirect
        return redirect()->route('foodtypes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\FoodType  $foodType
     * @return \Illuminate\Http\Response
     */
    public function destroy(FoodType $foodType,$id)
    {
        $foodType = FoodType::find($id);
        $foodType->delete();
        return redirect()->route('foodtypes.index'); 
    }
}
