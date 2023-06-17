<?php

namespace App\Http\Controllers\Conductor;
use App\Http\Controllers\Controller;
use Auth;
use App\Book;
use App\Bus;
use App\Seat;
use App\Schedule;
use App\Route;
use App\Ticket;
use App\Passenger;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
          $books = Book::all();

        return view('conductor.book.index', compact('books'));  
        
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    
         return view('conductor.book.create');
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
        if(!Book::where('seat_id', 'LIKE', $request->seatid)->first()) {
             if(Seat::where('id', 'LIKE', $request->seatid)->first()){
                if(Schedule::where('id', 'LIKE', $request->scheduleid)->first()){
            $request->validate([
             'seatid' => 'required',
             'scheduleid' => 'required',
        ]);
            $book = new Book([
             'seat_id' => $request->get('seatid'),
            'schedule_id' => $request->get('scheduleid'),
                'user_id'=>$request->get('userid'),
             
        ]);
        $book->save();
                    
            $ticket = new Ticket([
             'book_id' => $book->id, 
        ]);
          $ticket->save();
        return redirect('/cbook')->with('success', trans('sentence.added'));   
                          }
                  else{
                      session()->flash('warning', 'Sorry! please, check Schedule id!!');
        return redirect('/cbook');
                  }
        }
            else{
               session()->flash('warning', 'Sorry, you have to pay first or check your seat id!!');
        return redirect('/cseat'); 
            }
            }
         else{
             session()->flash('warning', 'You are already registered.');
        return redirect('/cbook');
         }
         
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        $name = $request->get('search');
    $books = Book::where('schedule_id','LIKE','%'.$name.'%')->orWhere('seat_id','LIKE','%'.$name.'%')->get();
        return view('conductor.book.index',compact('books'));
    }
    
    public function edit($id)
    {
        //
        $book = Book::find($id);
        return view('conductor.book.edit',compact('book'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
       if(!Book::where('seat_id', 'LIKE', $request->seatid)->where('schedule_id', 'LIKE', $request->scheduleid)->first()) {
        if(Passenger::where('id', 'LIKE', $request->pid)->first()){
             if(Seat::where('seat_id', 'LIKE', $request->seatid)->first()){
        if(Schedule::where('id', 'LIKE', $request->scheduleid)->first()){
           
            $request->validate([
            'seatid' => 'required',
             'scheduleid' => 'required',
        ]);
        
        $book = Book::find($id);
        $book->seat_id = $request->get('seatid');
        $book->schedule_id =  $request->get('scheduleid');
        $book->user_id =  $request->get('userid');
        $book->save();
        return redirect('/cbook')->with('success', trans('sentence.updated'));
       }
                  else{
                      session()->flash('warning', 'Sorry! please, check Schedule id!!');
        return redirect('/cbook');
                  }
        }
            else{
               session()->flash('warning', 'Sorry, you have to pay first!!');
        return redirect('/cbook'); 
            }
            }
             
          else{
              session()->flash('warning', 'Sorry! please, check passenger id!!');
        return redirect('/cbook');
          }
            }
         else{
             session()->flash('warning', 'You are already registered.');
        return redirect('/cbook');
         }   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $book = Book::find($id);
        $book->ticket()->delete();
        $book->delete();
        return redirect('/cbook')->with('success', trans('sentence.deleted'));
    }
}
