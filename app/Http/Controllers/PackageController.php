<?php

namespace App\Http\Controllers;
use App\Plan;
use App\Package;
use App\Food;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $packages=Package::all();
        return view('backend.Packages.index',compact('packages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $plans=Plan::all();
        $foods = Food::all();
        return view('backend.Packages.create',compact('plans','foods'));
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
            "duration" => 'required',
            "price" => 'required',
            "food" => 'required',
            "kmd" => 'required',
            'plan' => 'required'
        ]);
        
        //datainsert

        $package =new Package;
        $package->name = $request->name;
        $package->duration = $request->duration;
        $package->price =$request->price;
        $package->plan_id = $request->plan;
        $package->save();

        $foods = request('food');
    $kmd = request('kmd');
    
    //dd(count($request->subject)+1);
    for ($i=0; $i < count($request->food); $i++) { 
      //$v = $request->subject[$i];
      /*if(is_array($request->price)){
        $b = $request->price[$i];
        $teacher->subjects()->attach($v,['price'=>$b]);
      }*/
      $array = [ $request->food[$i] => ['kind'=>$request->kmd[$i+1]]];
      $package->foods()->attach($array);
    }

        //redirect
        return redirect()->route('packages.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
          $packagedetails=Package::find($id);
        return view('backend.packagedetail.index',compact('packagedetails'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function edit(Package $package)
    {
    
        return view('backend.Packages.edit',compact('package'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Package $package)
    {
        $request->validate([
            "name" => 'required',
            "duration" => 'required',
            "price" => 'required'
            
        ]);
        
        //datainsert
        $package->name = $request->name;
        $package->duration = $request->duration;
        

        $package->price =$request->price;
       
        $package->save();

        //redirect
        return redirect()->route('packages.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function destroy(Package $package)
    {
        $package->delete();
        return redirect()->route('packages.index');
    }
}
