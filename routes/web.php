<?php

use App\Http\Controllers\MyController;
use Illuminate\Support\Facades\Route;
use App\Models\second;
use App\Http\Controllers\PostTableController;


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
Route::get('/conn', function () {
    return view('conn');
});

Route::post('/saveItem',[MyController::class, 'saveItem'])
->name('saveItem');
//Route::get('/test',[MyController::class,'index']);

// Route::get('/display',function(){
//     return view('displayData');
// });
Route::get('/index','MyController@index') ;
// Route::get('/show','MyController@show') ;

Route::post('/show',[MyController::class, 'show']) ;

Route::get('table', function () {
    return view('php');
});
Route::get('/seconds',[PostTableController::class, 'index'])->name('seconds');

