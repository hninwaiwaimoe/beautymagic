<?php

namespace App\Http\Controllers;

use App\Package_detail;
use Illuminate\Http\Request;

class PackageDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $packagedetail=PackageDetail::all();
        return view('backend.packagedetail.index',compact('packagedetail'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('backend.packagedetail.create');
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
            "food_id" => 'required',
            "package_id" => 'required',
            "kind" => 'required',
            "qty" => 'required',
            "bmi" => 'required',
            
        ]);
        
        //datainsert

        $packagedetail =new PackageDetail;
        $packagedetail->name = $request->name;
        $packagedetail->kind = $request->kind;
        $packagedetail->qty = $request->qty;
        $packagedetail->bmi = $request->bmi;

        
        $packagedetail->food_id =$request->packagedetail;
        $packagedetail->package_id =$request->packagedetail;
       
        $food->save();

        //redirect
        return redirect()->route('packagedetail.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Package_detail  $package_detail
     * @return \Illuminate\Http\Response
     */
    public function show(Package_detail $package_detail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Package_detail  $package_detail
     * @return \Illuminate\Http\Response
     */
    public function edit(Package_detail $package_detail)
    {
        $packages = Package::all();
        return view('Backend.Packages.edit',compact('packages'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Package_detail  $package_detail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Package_detail $package_detail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Package_detail  $package_detail
     * @return \Illuminate\Http\Response
     */
    public function destroy(Package_detail $package_detail)
    {
        //
    }
}
