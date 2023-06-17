<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
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
         $users = User::all();

        return view('admin.permit', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    public function search(Request $request)
    {
        $name = $request->get('search');
    $users = User::where('id','LIKE','%'.$name.'%')->orWhere('name','LIKE','%'.$name.'%')->orWhere('email','LIKE','%'.$name.'%')->get();
        return view('admin.permit',compact('users'));
    }
    
    public function show($id)
    {
        //
         $user = User::find($id);
        if($user->is_conductor==1){
            $user->is_conductor =0;
        $user->update();
        return redirect('/allow');
        }
        else
        {
            $user->is_conductor =1;
             $user->is_admin =0;
            $user->is_banker =0;
        $user->update();
        return redirect('/allow');
        }
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
         $user = User::find($id);
        if($user->is_admin==1){
            $user->is_admin =0;
        $user->update();
        return redirect('/allow');
        }
        else
        {
            $user->is_admin =1;
            $user->is_conductor =0;
            $user->is_banker =0;
        $user->update();
        return redirect('/allow');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        //
       $user = User::find($id);
        if($user->is_banker==1){
            $user->is_banker =0;
        $user->update();
        return redirect('/allow');
        }
        else
        {
            $user->is_banker =1;
        $user->update();
        return redirect('/allow');
        }
        
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
         $user = User::find($id);
        if($user->is_banker==1){
            $user->is_banker =0;
        $user->update();
        return redirect('/allow');
        }
        else
        {
            $user->is_banker =1;
        $user->update();
        return redirect('/allow');
        }
    }
}
