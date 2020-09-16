<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
<<<<<<< HEAD
use App\Foodtype;
use App\Package;


class PageController extends Controller
{
     
    public function mainfun($value='')
    {
        //$foodtypes=Foodtype::all();    
    return view('backend.main');
    }

    public function foodtypesfun($id)
    {   
        /*$route = Route::current();*/
        /*dd($route);*/
       /*$foodtypes=Foodtype::find($id);*/
        //
        $foodtypes=Foodtype::all();
        return view('foodtypes',compact('foodtypes'));
        

    } 
     public function foodsfun($id)
    {   
        /*$route = Route::current();*/
        /*dd($route);*/
       //
        //
        $foods=Food::all();
        return view('foods',compact('foods'));
        

    } 
     
     public function packagesfun($id)
    {   
        /*$route = Route::current();*/
        /*dd($route);*/
       /*$package=Package::find($id);*/
        //
        $packages=Package::all();
        return view('packages',compact('packages'));
        

    } 
=======

class PageController extends Controller
{
      public function homefun($value='')
  {
    return view('frontend.home');
  }
  public function aboutfun($value='')
  {
    return view('frontend.about');
  }
  public function contactfun($value='')
  {
    return view('frontend.contact');
  }
>>>>>>> ebb38154be2ae44fbe3a8bed1971d416711190aa
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
<<<<<<< HEAD
        return view('backend.package.create');
        
=======
        //
>>>>>>> ebb38154be2ae44fbe3a8bed1971d416711190aa
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
