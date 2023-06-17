<?php

namespace App\Http\Controllers\Conductor;
use App\Http\Controllers\Controller;

use App\Conductor;
use App\Bus;
use Illuminate\Http\Request;

class ConductorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         $conductors = Conductor::all();

        return view('conductor.conductor.index', compact('conductors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
         return view('conductor.conductor.create');
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
            'cfname' => 'required',
             'clname' => 'required',
             'phone' => 'required',
             'dob' => 'required',
             'address' => 'required',
             'gender' => 'required'
        ]);
  
         $conductor = new Conductor([
            'C_fname' => $request->get('cfname'),
             'C_lname' => $request->get('clname'),
            'Phone_no' => $request->get('phone'),
             'DOB' => $request->get('dob'),
             'Address' => $request->get('address'),
            'Gender' => $request->get('gender')
        ]);
        $conductor->save();
        return redirect('/cconductor')->with('success', trans('sentence.added'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Conductor  $conductor
     * @return \Illuminate\Http\Response
     */
    public function show(Conductor $conductor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Conductor  $conductor
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
         $conductor= Conductor::find($id);
        return view('conductor.conductor.edit',compact('conductor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Conductor  $conductor
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        $name = $request->get('search');
    $conductors= Conductor::where('id','LIKE','%'.$name.'%')->orWhere('C_fname','LIKE','%'.$name.'%')->get();
        return view('conductor.conductor.index',compact('conductors'));
    }
    
    public function update(Request $request, $id)
    {
        //
        $request->validate([
             'cfname' => 'required',
             'clname' => 'required',
             'phone' => 'required',
             'dob' => 'required',
             'address' => 'required',
             'gender' => 'required'
        ]);

        $conductor = Conductor::find($id);
        $conductor->C_fname =  $request->get('cfname');
        $conductor->C_lname = $request->get('clname');
        $conductor->Phone_no = $request->get('phone');
        $conductor->DOB = $request->get('dob');
        $conductor->Address = $request->get('address');
        $conductor->Gender = $request->get('gender');
        $conductor->save();

        return redirect('/cconductor')->with('success', trans('sentence.updated'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Conductor  $conductor
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $conductor = Conductor::find($id);
        if($conductor->bus()->count() > 0){
          return redirect('/cconductor')->with('warning', 'First delete it from bus');
        }
        else{
            $conductor ->delete();
        
        return redirect('/cconductor')->with('success', trans('sentence.deleted'));
    }
    }
}
