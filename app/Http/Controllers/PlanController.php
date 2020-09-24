<?php

namespace App\Http\Controllers;

use App\Plan;
use App\Food;
use App\Package;
use Illuminate\Http\Request;

class PlanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $plans=Plan::all();
        return view('backend.plans.index',compact('plans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $foods=Food::all();
         $packages = Package::all();
        return view('backend.plans.create',compact('foods','packages'));
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
            'description' => 'required',
            
        ]);
        
        //datainsert

        $plan =new Plan;
        $plan->name =$request->name;
        $plan->description = $request->description;
    
        $plan->save();

        //redirect
        return redirect()->route('plans.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Plan  $plan
     * @return \Illuminate\Http\Response
     */
    public function show(Plan $plan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Plan  $plan
     * @return \Illuminate\Http\Response
     */
    public function edit(Plan $plan)
    {
       $foods = Food::all();
       $packages = Package::all();
        return view('backend.plans.edit',compact('plan','foods','packages'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Plan  $plan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Plan $plan)
    {
         $request->validate([
            'name' => 'required',
            "description" => 'required',
                      
            
        ]);
        
        //datainsert
       $plan->name =$request->name;
        $plan->description = $request->description;

        
       
        $plan->save();

        //redirect
        return redirect()->route('plans.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Plan  $plan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Plan $plan)
    {
       $plan->delete();
        return redirect()->route('plans.index');
    }
}
