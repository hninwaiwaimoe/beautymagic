<?php

namespace App\Http\Controllers;

use App\Userpackage;
use Illuminate\Http\Request;

class UserpackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userpackages=Userpackage::all();
        return view('frontend.userpackages
            ',compact('userpackages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
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
     * @param  \App\Userpackage  $userpackage
     * @return \Illuminate\Http\Response
     */
    public function show(Userpackage $userpackage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Userpackage  $userpackage
     * @return \Illuminate\Http\Response
     */
    public function edit(Userpackage $userpackage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Userpackage  $userpackage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Userpackage $userpackage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Userpackage  $userpackage
     * @return \Illuminate\Http\Response
     */
    public function destroy(Userpackage $userpackage)
    {
        //
    }
}
