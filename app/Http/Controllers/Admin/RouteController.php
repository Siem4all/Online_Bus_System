<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Bus;
use App\Route;
use Illuminate\Http\Request;

class RouteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
       $this->middleware('auth');
    }
    public function index()
    {
        //
         $routes = Route::all();

        return view('admin.route.index', compact('routes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.route.create');
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
         $request->validate([
            'departure' => 'required',
             'destination' => 'required',
             'distance' => 'required',
             'fare' => 'required'
        ]);
  
         $route = new Route([
            'Departure' => $request->get('departure'),
             'Destination' => $request->get('destination'),
             'Route_name' => $request->get('departure').'-'.$request->get('destination'),
            'Distance' => $request->get('distance'),
            'Fare' => $request->get('fare'),
              ]);
        $route->save();
        return redirect('/route')->with('success', trans('sentence.added'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Route  $route
     * @return \Illuminate\Http\Response
     */
    public function show(Route $route)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Route  $route
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $route = Route::find($id);
        return view('admin.route.edit',compact('route'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Route  $route
     * @return \Illuminate\Http\Response
     */
 public function search(Request $request)
    {
        $name = $request->get('search');
    $routes = Route::where('id','LIKE','%'.$name.'%')->orWhere('Destination','LIKE','%'.$name.'%')->get();
        return view('admin.route.index',compact('routes'));
    }
    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'departure' => 'required',
             'destination' => 'required',
             'distance' => 'required',
             'fare' => 'required'
        ]);

        $route = Route::find($id);
        $route->Departure =  $request->get('departure');
        $route->Destination = $request->get('destination');
        $route->Route_name = $request->get('departure').'-'.$request->get('destination');
        $route->Distance = $request->get('distance');
        $route->Fare = $request->get('fare');
        $route->save();

        return redirect('/route')->with('success', trans('sentence.updated'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Route  $route
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $route = Route::find($id);
        if($route->schedule()->count() > 0){
         return redirect('/route')->with('warning', 'First delete it from schedule');
        }
        else{
             $route->delete();
            return redirect('/route')->with('success', trans('sentence.deleted'));
        }

    }
}
