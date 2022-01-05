<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\username;
use App\Http\Controllers\studentc;



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
    return view('login');
});
// Route::post('login', function(){
//     return view('admin.constantdash.dash');
// });

Route::group(['middleware'=>['checkadmin']], function(){

Route::get('student_link',[studentc::class, 'addstudents']);

Route::get('teacher-link', function(){
    return view('admin.teacher');
}); 

Route::get('notice-link', function(){
    return view('admin.notice');
});
Route::get('attendance-link', function(){
    return view('admin.attendance');
});
Route::get('fee-link', function(){
    return view('admin.feereport');
});
Route::get('exam-link', function(){
    return view('admin.exam');
});
Route::get('admin-link', function(){
    return view('admin.addadmin');
});
Route::get('setting-link', function(){
    return view('admin.settings');
});
Route::get('media-link', function(){
    return view('admin.media');
});
Route::get('calender-link', function(){
    return view('admin.calender');
});
Route::get('logout-link', function(){
    return view('login');
});





});

Route::post('login', [username::class, 'checkidpw']);
// Route::get('student_link', [studentc::class, 'addstudents']);
 Route::post('student_link', [studentc::class, 'addstudents']);

Route::get('delete/{id}', [studentc::class, 'delete']);

