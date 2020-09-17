<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

//Movies

//list Movies
Route::get('movies', 'MoviesController@index');

//List Single Movies
Route::get('movie/{id}', 'MoviesController@show');

// create new Movies
Route::post('movie', 'MoviesController@store');

// update movies
Route::put('movie', 'MoviesController@store');

// delete movies
Route::delete('movie/{id}', 'MoviesController@destroy');


//Shows


//list Show
Route::get('shows', 'ShowsController@index');

//List Single Show
Route::get('show/{id}', 'ShowsController@show');

// create Show
Route::post('show', 'ShowsController@store');

// update Show
Route::put('show', 'ShowsController@store');

// delete show
Route::delete('show/{id}', 'ShowsController@destroy');


// Studios

//list Studio
Route::get('studios', 'StudiosController@index');

//List Single Studio
Route::get('studio/{id}', 'StudiosController@show');

// create Studio
Route::post('studio', 'StudiosController@store');

// update Studio
Route::put('studio', 'StudiosController@store');

// delete studio
Route::delete('studio/{id}', 'StudiosController@destroy');


// Seats

//list seat
Route::get('seats', 'SeatsController@index');

//List Single Seats
Route::get('seat/{id}', 'SeatsController@show');

// create Seats
Route::post('seat', 'SeatsController@store');

// update Seats
Route::put('seat', 'SeatsController@store');

// delete seats
Route::delete('seat/{id}', 'SeatsController@destroy');



// Tickets

//list ticket
Route::get('tickets', 'TicketsController@index');

//List Single Ticket
Route::get('ticket/{id}', 'TicketsController@show');

// create Ticket
Route::post('ticket', 'TicketsController@store');

// update ticket
Route::put('ticket', 'TicketsController@store');

// delete ticket
Route::delete('ticket/{id}', 'TicketsController@destroy');


// Tickets Type

//list ticket type
Route::get('ticketstype', 'TicketsTypeController@index');

//List Single Ticket Type
Route::get('tickettype/{id}', 'TicketsTypeController@show');

// create Ticket type
Route::post('tickettype', 'TicketsTypeController@store');

// update ticket type
Route::put('tickettype', 'TicketsTypeController@store');

// delete ticket type
Route::delete('tickettype/{id}', 'TicketsTypeController@destroy');


// Payments
//list payments
Route::get('payments', 'PaymentsController@index');

//List Single Payments
Route::get('payment/{id}', 'PaymentsController@show');

// create payment
Route::post('payment', 'PaymentsController@store');

// update payment
Route::put('payment', 'PaymentsController@store');

// delete payment
Route::delete('payment/{id}', 'PaymentsController@destroy');



// Costumer
//list costumer
Route::get('costumers', 'CostumerController@index');

//List Single Costumer
Route::get('costumer/{id}', 'CostumerController@show');

// create costumer
Route::post('costumer', 'CostumerController@store');

// update costumer
Route::put('costumer', 'CostumerController@store');

// delete costumer
Route::delete('costumer/{id}', 'CostumerController@destroy');



// Staff
//list staff
Route::get('staff', 'StaffController@index');

//List Single Staff
Route::get('staff/{id}', 'StaffController@show');
