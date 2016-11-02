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
    echo 'Hello Laravel';
});

Route::get('hello/{name}', function($name) {
	echo 'Hello ' . $name;
});

//Create an item
Route::post('test', function() {
	echo 'We just created an item';
});

//Read an item
Route::get('test', function() {
	echo '<form action="test" method="POST">';
	echo '<input type="submit">';
	echo '<input type="hidden" value="' . csrf_token() . '" name="_token">';
	echo '</form>';
});

//update an item
Route::put('test', function() {

});

//delete an item
Route::delete('test', function() {

});
