<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('house');
});

Route::get('/chats', 'ChatController@index');
Route::get('/messages', 'ChatController@fetchAllMessages');
Route::post('/messages', 'ChatController@sendMessage');

// Admin
Route::post('/send-sms',['as'=>'send.sms','uses'=>'Admin\SendSMSController@sendSMS']);
Route::get('send-sms-message', 'SmsMsgController@sendSmsToMobile');
//Route::resource('/bmessage','Banker\MessageController');
Route::resource('/bmessage','Banker\MessageController');

Route::resource('/message','Admin\MessageController');
Route::get('/msearch','Admin\MessageController@search')->name('search');

Route::resource('/payment','Admin\PaymentController');
Route::get('/paysearch','Admin\PaymentController@search')->name('search');

Route::resource('/ticket','Admin\TicketController');
Route::get('/tsearch','Admin\TicketController@search')->name('search');

Route::resource('/sschedule','Admin\ScheduleController');
Route::get('/schsearch','Admin\ScheduleController@search')->name('search');

Route::resource('/route','Admin\RouteController');
Route::get('/rsearch','Admin\RouteController@search')->name('search');

Route::resource('/passenger','Admin\PassengerController');
Route::get('/psearch','Admin\PassengerController@search')->name('search');

Route::resource('/driver','Admin\DriverController');
Route::get('/dsearch','Admin\DriverController@search')->name('search');

Route::resource('/conductor','Admin\ConductorController');
Route::get('/csearch','Admin\ConductorController@search')->name('search');

Route::resource('/station','Admin\StationController');
Route::get('/stationsearch','Admin\StationController@search')->name('search');

Route::resource('/book','Admin\BookController');
Route::get('/booksearch','Admin\BookController@search')->name('search');

Route::resource('/bus','Admin\BusController');
Route::get('/bsearch','Admin\BusController@search')->name('search');

Route::resource('/seatbus','Admin\SeatBusPassengerController');
Route::get('/display','Admin\SeatBusPassengerController@display')->name('display');
Route::get('/showseat/{code}/{id}','Admin\SeatBusPassengerController@showSeat');


Route::resource('/seat','Admin\SeatController');
Route::get('/ssearch','Admin\SeatController@search')->name('search');
Route::get('/check','Admin\SeatController@check')->name('check');
    
Route::resource('/busschedule', 'Admin\BusScheduleController');
Route::get('/bussearch', 'Admin\BusScheduleController@search')->name('routename');

Route::get('/etb/{id}/{sid}', 'Admin\StripePaymentController@stripe');
Route::get('/nexmo/{pid}/{sid}', 'Admin\StripePaymentController@nexmo');
Route::post('/etb', 'Admin\StripePaymentController@stripePost')->name('etb.post');


//conductor

Route::get('/cetb', 'Conductor\StripePaymentController@stripe');
Route::post('/cetb', 'Conductor\StripePaymentController@stripePost')->name('cetb.post');

Route::post('/csend-sms',['as'=>'csend.sms','uses'=>'Conductor\SendSMSController@sendSMS']);

Route::resource('/cmessage','Conductor\MessageController');
Route::get('/cmsearch','Conductor\MessageController@search')->name('search');

Route::resource('/cpayment','Conductor\PaymentController');
Route::get('/cpaysearch','Conductor\PaymentController@search')->name('search');

Route::resource('/cticket','Conductor\TicketController');
Route::get('/ctsearch','Conductor\TicketController@search')->name('search');

Route::resource('/csschedule','Conductor\ScheduleController');
Route::get('/cschsearch','Conductor\ScheduleController@search')->name('search');

Route::resource('/croute','Conductor\RouteController');
Route::get('/rsearch','Admin\RouteController@search')->name('search');

Route::resource('/cpassenger','Conductor\PassengerController');
Route::get('/cpsearch','Conductor\PassengerController@search')->name('search');

Route::resource('/cdriver','Conductor\DriverController');
Route::get('/cdsearch','Conductor\DriverController@search')->name('search');

Route::resource('/cconductor','Conductor\ConductorController');
Route::get('/ccsearch','Conductor\ConductorController@search')->name('search');

Route::resource('/cstation','Conductor\StationController');
Route::get('/cstationsearch','Conductor\StationController@search')->name('search');

Route::resource('/cbook','Conductor\BookController');
Route::get('/cbooksearch','Conductor\BookController@search')->name('search');

Route::resource('/cbus','Conductor\BusController');
Route::get('/cbsearch','Conductor\BusController@search')->name('search');

Route::resource('/cseat','Conductor\SeatController');
Route::resource('/cseatbus','Conductor\SeatBusPassengerController');

Route::get('/cssearch','Conductor\SeatController@search')->name('search');
Route::get('/ctransport','Conductor\SeatController@transport')->name('ctransport');
Route::get('/ccheck','Conductor\SeatController@check')->name('check');
    
Route::resource('/cbusschedule', 'Conductor\BusScheduleController');
Route::get('/cbussearch', 'Conductor\BusScheduleController@search')->name('routename');

Route::get('cchange.pd', 'Conductor\ChangePasswordController@index');
Route::post('cchange.pd', 'Conductor\ChangePasswordController@store')->name('cchange.pd');

//banker
Route::get('/betb', 'Banker\StripePaymentController@stripe');
Route::post('/betb', 'Banker\StripePaymentController@stripePost')->name('uetb.post');

Route::resource('/bpayment','Banker\BankerPaymentController');
Route::get('/bpaysearch','Banker\BankerPaymentController@search')->name('search');

Route::resource('/bticket','Banker\TicketController');
Route::get('/btsearch','Banker\TicketController@search')->name('search');

Route::resource('/bsschedule','Banker\ScheduleController');
Route::get('/bschsearch','Banker\ScheduleController@search')->name('search');

Route::resource('/broute','Banker\RouteController');
Route::get('/brsearch','Banker\RouteController@search')->name('search');

Route::resource('/bpassenger','Banker\PassengerController');
Route::get('/bpsearch','Banker\PassengerController@search')->name('search');

Route::resource('/bbook','Banker\BookController');
Route::get('/bbooksearch','Banker\BookController@search')->name('search');

Route::get('/bcancel','Banker\TicketController@cancelTicket')->name('ucancel');

Route::resource('/bbus','Banker\BusController');
Route::get('/bbsearch','Banker\BusController@search')->name('search');

Route::resource('/bseat','Banker\SeatController');
Route::resource('/bseatbus','Banker\SeatBusPassengerController');
Route::get('/bssearch','Banker\SeatController@search')->name('search');
Route::get('/btransport','Banker\SeatController@transport')->name('utransport');
Route::get('/bcheck','Banker\SeatController@check')->name('check');
Route::get('/bviewseat','Banker\SeatController@allTogether')->name('viewseat');
    
Route::resource('/bbusschedule', 'Banker\BusScheduleController');
Route::get('/bbussearch', 'Banker\BusScheduleController@search')->name('routename');

Route::get('banker-pswd', 'Banker\ChangePasswordController@index');
Route::post('banker-pswd', 'Banker\ChangePasswordController@store')->name('banker-pswd');


//User

Route::post('/usend-sms',['as'=>'send.sms','uses'=>'User\SendSMSController@sendSMS']);
Route::get('usend-sms-message', 'SmsMsgController@sendSmsToMobile');
//Route::resource('/bmessage','Banker\MessageController');
Route::resource('/ubmessage','Banker\MessageController');

Route::resource('/umessage','User\MessageController');
Route::get('/umsearch','User\MessageController@search')->name('search');

Route::resource('/upayment','User\PaymentController');
Route::get('/upaysearch','User\PaymentController@search')->name('search');

Route::resource('/uticket','User\TicketController');
Route::get('/utsearch','User\TicketController@search')->name('search');

Route::resource('/usschedule','User\ScheduleController');
Route::get('/uschsearch','User\ScheduleController@search')->name('search');

Route::resource('/uroute','User\RouteController');
Route::get('/ursearch','User\RouteController@search')->name('search');

Route::resource('/upassenger','User\PassengerController');
Route::get('/upsearch','User\PassengerController@search')->name('search');

Route::resource('/udriver','User\DriverController');
Route::get('/udsearch','User\DriverController@search')->name('search');

Route::resource('/uconductor','User\ConductorController');
Route::get('/ucsearch','User\ConductorController@search')->name('search');

Route::resource('/ustation','User\StationController');
Route::get('/ustationsearch','User\StationController@search')->name('search');

Route::resource('/ubook','User\BookController');
Route::get('/ubooksearch','User\BookController@search')->name('search');

Route::resource('/ubus','User\BusController');
Route::get('/ubsearch','User\BusController@search')->name('search');

Route::resource('/useatbus','User\SeatBusPassengerController');
Route::get('/udisplay','User\SeatBusPassengerController@display')->name('display');
Route::get('/ushowseat/{code}/{id}','User\SeatBusPassengerController@showSeat');


Route::resource('/useat','User\SeatController');
Route::get('/ussearch','User\SeatController@search')->name('search');
Route::get('/ucheck','User\SeatController@check')->name('check');
    
Route::resource('/busschedule', 'User\BusScheduleController');
Route::get('/ubussearch', 'User\BusScheduleController@search')->name('routename');
 
Route::get('/unexmo/{pid}/{sid}', 'User\StripePaymentController@nexmo');
Route::get('/ustripe/{id}/{sid}', 'User\StripePaymentController@stripe');
Route::post('/ustripe', 'User\StripePaymentController@stripePost')->name('ustripe.post');
//


Route::get('/uchange-pswd', 'User\ChangePasswordController@index');
Route::post('/uchange-pswd', 'User\ChangePasswordController@store')->name('uchange-pswd');

Route::get('change-password', 'ChangePasswordController@index');
Route::post('change-password', 'ChangePasswordController@store')->name('change.password');

//notification
Route::get('/send', 'HomeController@sendNotification');
Route::resource('/allow','UserController');
Route::resource('/permission','PermissionController');
Route::get('/allowsearch', 'UserController@search')->name('search');

Route::get('detect', function () {
    $agent = new \Jenssegers\Agent\Agent;

   // $result = $agent->isMobile();

    if($agent->isMobile()){
       return "This is Mobile."; 
    }
        
    elseif($agent->isTablet()){
        return "This is Tablet.";
    }
    elseif($agent->isDesktop()){
        return "This is Desktop.";
    }
    else{
        
      return "This is not Mobile,tablet or disktop.";  
    }
});

Auth::routes();
Route::get('/house', function () {
     return view('house');
 });
Route::get('/about', function () {
     return view('about');
 });
Route::get('/contact', function () {
     return view('contact');
 });
Route::post('/password/reset', 'Auth\PasswordController@reset');
//Route::post('password/reset','Auth\AuthController@resetPassword');
Auth::routes(['verify' => true]);
Route::get('/admin', 'HomeController@adminHome')->name('admin.home')->middleware('is_admin');
Route::get('/employee', 'HomeController@conductorHome')->name('conductor.home')->middleware('is_conductor');
Route::get('/banker', 'HomeController@bankerHome')->name('banker.home')->middleware('is_banker');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('lang/{locale}', 'HomeController@lang');
