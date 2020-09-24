<?php

namespace App\Http\Controllers;
use App\Foodtype;
use App\Food;
use Illuminate\Http\Request;

class FoodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $foods=Food::all();
        return view('backend.foods.index',compact('foods'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $foodtypes=Foodtype::all();
        return view('backend.foods.create',compact('foodtypes'));
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
            "foodtype" => 'required',
            "kalorie" => 'required',
            "vitamin" => 'required',

            
        ]);
        
        //datainsert

        $food =new Food;
        $food->name = $request->name;
        $food->kalorie = $request->kalorie;
        $food->vitamin = $request->vitamin;
       
        $food->foodtype_id =$request->foodtype;
        $food->save();

        //redirect
        return redirect()->route('foods.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Food  $food
     * @return \Illuminate\Http\Response
     */
    public function show(Food $food)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Food  $food
     * @return \Illuminate\Http\Response
     */
    public function edit(Food $food)
    {
        $foodtypes = Foodtype::all();
        
        return view('backend.foods.edit',compact('food','foodtypes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Food  $food
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Food $food)
    {
          $request->validate([
            "name" => 'required',
            "foodtype"=>'required',
            "kalorie" => 'required',
            "vitamin" => 'required',

            
        ]);
        
        //datainsert

        $food->name = $request->name;
        $food->kalorie = $request->kalorie;
        $food->vitamin = $request->vitamin;
       
        $food->foodtype_id =$request->foodtype;
        $food->save();

        //redirect
        return redirect()->route('foods.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Food  $food
     * @return \Illuminate\Http\Response
     */
    public function destroy(Food $food)
    {
        $food->delete();
        return redirect()->route('foods.index');   }
}
