<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/stripe', 'StripePaymentController@stripe');
Route::post('/stripe', 'StripePaymentController@stripePost')->name('stripe.post');

Route::get('/online', 'StripePaymentController@stripe');
Route::post('/online', 'StripePaymentController@stripePost')->name('stripe.post');
