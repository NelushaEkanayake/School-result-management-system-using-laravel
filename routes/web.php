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



//Route::view('amarks','allmarks');

Route::get('amarks/{exam}/{grade}/{subject}', 'gradeController@getmarks')->name('getDeleteRequest');
Route::get('/tasks','gradeController@store');

Route::get('subjects','gradeController@getsubjects');

Route::get('marks','gradeController@marks');

Route::get('allmarks','gradeController@getmarks');

Route::get('marksheet/{var1}','gradeController@marksheet');

Route::get('deletedata/{var1}','admincontroller@destroy');

Route::get('/result','gradeController@result');

// Route::get('/result', function () {
//     return view('result');
// });

Route::get('/main', 'MainController@index');
Route::get('/examboard', 'MainController@examboard');

Route::post('/main/checklogin', 'MainController@checklogin');
Route::get('/main/successlogin', 'MainController@successlogin');
Route::get('/main/logout', 'MainController@logout');
Route::post('/newexam', 'admincontroller@store');
Route::get('/exam/{exid}/edit', 'admincontroller@edit');