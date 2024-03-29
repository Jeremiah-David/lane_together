<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Listing;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('listings', [
        'heading' => 'Latest Listings',
        'listings' => App\Models\Listing::all()
    ]);    
});

Route::get('listings/{id}', function ($id) {
    return view('listing', [
    'listing' => Listing::find($id)
    ]);
});

// for refernce

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/hello', function () {
//     return response("Hello World");
// });


// // wildcard  curly braces varable
// Route::get("/posts/{id}", function ($id) { 
//     // ddd($id);
//  return response("Post " . $id)
//  ->header('Content-Type','text/plain');
// })->where('id','[0-9]+');


// Route::get('/search', function (Request $request) {
//     dd($request->name . " " . $request->city);
//     // return response("Search");
// });