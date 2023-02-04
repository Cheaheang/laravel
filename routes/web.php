<?php

use App\Http\Controllers\MyController;
use Illuminate\Support\Facades\Route;
use App\Models\second;
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

Route::get('/display',function(){
    return view('displayData');
});