<?php


use Illuminate\Support\Facades\Route;



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
    return view('welcome');
});
Route::get('pets', 'PetsController@getAllPets');
Route::get('pets', 'PetsController@getPetsByLimit');
Route::get('pets/{pet}', 'PetsController@getPetById');
Route::post('pets', 'PetsController@createPet');
Route::put('pets/{pet}', 'PetsController@updatePet');
Route::delete('pets/{pet}', 'PetsController@deletePet');
