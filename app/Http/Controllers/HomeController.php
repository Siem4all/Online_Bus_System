<?php
   
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\User;
use App;
use App\Bus;
use App\Route;
use App\Seat;
use App\Ticket;
use App\Schedule;
use App\Message;
use App\Payment;
use App\Book;
use App\Passenger;
use Notification;
use App\Notifications\MyFirstNotification;
   
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       $this->middleware('auth');
    }
  
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    { $passengers = Passenger::all();
        $buses = Bus::all();
        $routes = Route::all();
        $seates = Seat::all();
        $books = Book::all();
        $tickets=Ticket::all();
        $messages=Message::all();
        $schedules=Schedule::all();
        $payments = Payment::all();
        return view('home',compact('passengers','buses','routes','seates','books','payments','messages','schedules','tickets'));
    }
  
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function adminHome()
    {
        $passengers = Passenger::all();
        $buses = Bus::all();
        $routes = Route::all();
        $seates = Seat::all();
        $books = Book::all();
        $tickets=Ticket::all();
        $messages=Message::all();
        $schedules=Schedule::all();
        $payments = Payment::all();
        return view('adminhome',compact('passengers','buses','routes','seates','books','payments','messages','schedules','tickets'));
    }
    public function conductorHome()
    {
        $passengers = Passenger::all();
        $buses = Bus::all();
        $routes = Route::all();
        $seates = Seat::all();
        $books = Book::all();
        $tickets=Ticket::all();
        $messages=Message::all();
        $schedules=Schedule::all();
        $payments = Payment::all();
        return view('conductorhome',compact('passengers','buses','routes','seates','books','payments','messages','schedules','tickets'));
    }
    public function bankerHome()
    {
        $passengers = Passenger::all();
        $buses = Bus::all();
        $routes = Route::all();
        $seates = Seat::all();
        $books = Book::all();
        $tickets=Ticket::all();
        $messages=Message::all();
        $schedules=Schedule::all();
        $payments = Payment::all();
        return view('bankerhome',compact('passengers','buses','routes','seates','books','payments','messages','schedules','tickets'));
    }
    
     public function sendNotification()
    {
        $user = User::first();
  
        $details = [
            'greeting' => 'Hi everyone',
            'body' => 'This is our system for our customers',
            'thanks' => 'Thank you for using our service!',
            'actionText' => 'View our Site',
            'actionURL' => url('/'),
            'order_id' => 101
        ];
  
        Notification::send($user, new MyFirstNotification($details));
   
        dd('done');
    }
    
    public function lang($locale)
    {
        App::setLocale($locale);
        session()->put('locale', $locale);
        return redirect()->back();
    }
    
}