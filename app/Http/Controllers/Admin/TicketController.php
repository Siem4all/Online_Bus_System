<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Ticket;
use App\Passenger;
use App\Book;
use App\Schedule;
use Illuminate\Http\Request;

class TicketController extends Controller
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
        $ticketss=Ticket::all();
        foreach($ticketss as $t){
               $t->delete();
        }

        $books = Book::all();
        foreach($books as $book){
            $ticket = new Ticket([
                'book_id' =>$book->id,
          ]);
          $ticket->save();
        }

        $tickets = Ticket::latest('id')->get();

        return view('admin.ticket.index',compact('tickets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
         return view('admin.ticket.create');
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
        if(!Ticket::where('book_id', 'LIKE', $request->bookid)->first()){
         $request->validate([
              'bookid'=>'required',
        ]);
        
             $ticket = new Ticket([
                 'book_id' => $request->get('bookid'),
           ]);
        $ticket->save();
        return redirect('/ticket')->with('success', trans('sentence.added'));
            
            }
             
          else{
              session()->flash('warning', 'Sorry.you can not register twise!!');
        return redirect('/ticket');
          }
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
         $ticket = Ticket::find($id);
        return view('admin.ticket.show',compact('ticket'));
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
                $ticket = Ticket::find($id);
        return view('admin.ticket.edit',compact('ticket'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
     public function search(Request $request)
    {
        $name = $request->get('search');
    $tickets = Ticket::where('id','LIKE','%'.$name.'%')->orWhere('book_id','LIKE','%'.$name.'%')->get();
        return view('admin.ticket.index',compact('tickets'));
    }
    
    public function update(Request $request, $id)
    {
        //
        if(Book::where('id', 'LIKE', $request->bookid)->first()){
       $request->validate([
              'bookid'=>'required'
        ]);
        $ticket = Ticket::find($id);
        $ticket->book_id = $request->get('bookpid');
        $ticket->save();

        return redirect('/ticket')->with('success', trans('sentence.updated'));
        }
             
          else{
              session()->flash('warning', 'Sorry! please, check passenger id!!');
        return redirect('/ticket');
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
        $ticket = Ticket::find($id);
        $ticket->delete();

        return redirect('/ticket')->with('success', trans('sentence.deleted'));
    }
}
