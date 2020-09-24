<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Foodtype;
use App\Package;
use DB;
use App\Plan;
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
   public function loginfun($value='')
  {
    return view('frontend.login');
  }
   public function registerfun($value='')
  {
    return view('frontend.register');
  }
   public function planfun($value='')
  {
    $plans = Plan::all();
    return view('frontend.plan',compact('plans'));
  }
  public function bmifun($value='')
  {
    return view('frontend.bmi');
  }
   public function exercisefun($value='')
  {
    return view('frontend.exercise');
  }
   public function dietplanfun($value='')
  {
    return view('frontend.dietplan');
  }
   public function packagedetail($id)
    {
       $packagedetail = Package::take(1)->find($id);
       return view('backend.Packagedetails.index',compact('packagedetail'));
    }



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

        return view('backend.package.create');


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

    public function planpackage($id)
    {
      $plan  = Plan::whereHas('packages',function($q) use ($id){
        $q->where('id',$id);
      })->get();

      if($plan[0]->name == 'food plan'){
      $packages = Package::where('id',$id)->first();

      return view('frontend.dietplan',compact('packages'));
    }else{
      $packages = Package::where('id',$id)->get();

      return view('frontend.exercise',compact('packages'));
    }
    }

    public function morepackage($id)
    {
      $pid = Package::find($id);
     /*$count = Package::find($id)->foods()->inRandomOrder()->limit(36)->get();

      dd($count);*/

      if($pid->duration == 10){
        $packages = $pid->foods;
       return view('frontend.morepackage',compact('packages','pid'));
      }elseif($pid->duration == 5){
        $packages = $pid->foods;
        return view('frontend.morepackage',compact('packages','pid'));
      }
      else{
        dd($pid);
        $packages = $pid->foods;
       return view('frontend.morepackage',compact('packages'));
      }
    }
}
