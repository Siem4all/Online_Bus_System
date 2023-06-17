<?php

namespace App\Http\Controllers\Banker;
use App\Http\Controllers\Controller;
use App\Driver;
use App\Bus;
use Illuminate\Http\Request;

class DriverController extends Controller
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
         $drivers = Driver::all();

        return view('banker.driver.index', compact('drivers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('banker.driver.create');
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
            'dfname' => 'required',
             'dlname' => 'required',
             'phone' => 'required|max:15',
             'dob' => 'required|date|before:18 years ago',
             'address' => 'required',
             'gender' => 'required'
        ]);
  
         $driver = new Driver([
            'D_fname' => $request->get('dfname'),
             'D_lname' => $request->get('dlname'),
            'Phone_no' => $request->get('phone'),
             'DOB' => $request->get('dob'),
             'Address' => $request->get('address'),
            'Gender' => $request->get('gender'),
        ]);
        $driver->save();
        return redirect('/bdriver')->with('success', trans('sentence.added'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Driver  $driver
     * @return \Illuminate\Http\Response
     */
    public function show(Driver $driver)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Driver  $driver
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
         $driver= Driver::find($id);
        return view('banker.driver.edit',compact('driver'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Driver  $driver
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        $name = $request->get('search');
    $drivers= Driver::where('id','LIKE','%'.$name.'%')->orWhere('D_fname','LIKE','%'.$name.'%')->get();
        return view('banker.driver.index',compact('drivers'));
    }
    
    public function update(Request $request, $id)
    {
        //
         $request->validate([
             'dfname' => 'required',
             'dlname' => 'required',
             'phone' => 'required',
             'dob' => 'required|date|before:18 years ago',
             'address' => 'required',
             'gender' => 'required'
        ]);

        $driver = Driver::find($id);
        $driver->D_fname =  $request->get('dfname');
        $driver->D_lname = $request->get('dlname');
        $driver->Phone_no = $request->get('phone');
        $driver->DOB = $request->get('dob');
        $driver->Address = $request->get('address');
        $driver->Gender = $request->get('gender');
        $driver->save();

        return redirect('/bdriver')->with('success', trans('sentence.updated'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Driver  $driver
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $driver = Driver::find($id);
        if($driver->bus()->count() > 0){
             return redirect('/bdriver')->with('warning','First delete it from bus');
        }
            $driver->delete();
        return redirect('/bdriver')->with('success', trans('sentence.deleted'));
    }
}
