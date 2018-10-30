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
    return view('welcome');
});
Route::get('/dashboard', function () {
    return view('admin.layout');
});
Route::get('/mainform', function () {
    return view('mainpanal.mainform');
});
Route::get('/subject', function () {
    
    return view('admin.dashadmin.subject');
});
Route::get('/student', function () {
    $data=App\Student::all();
    return view('admin.dashadmin.student')->with('students',$data);
     
});
Route::get('/dashboard2', function () {
   return view('admin.layout2');});
Route::get('/practicaltest', function () {
    return view('admin.student.practicaltest');
});
Route::get('/maintest', function () {
    return view('admin.student.maintest');
});
Route::get('/stunotice', function () {
    return view('admin.student.notice');
});
Route::get('/stunotice', function () {
    return view('admin.dashadmin.notice');
});
Route::get('/maintest', function () {
    return view('admin.student.maintest');
});

Route::get('/category', function () {
    $data=App\Subject::all();
   return view('admin.dashadmin.category')->with('subjects',$data);
});
Route::get('/contact', function () {
    return view('admin.student.contact');
 });
 Route::get('/change password', function () {
    return view('admin.changepassword');
 });
 Route::get('/exam', function () {
   //$data=App\Exam::all();
    //return view('admin.dashadmin.exam')->with('exams',$data);
   // return view('admin.dashadmin.exam');
   $data=App\Subject::all();
   return view('admin.dashadmin.exam')->with('students',$data);
});
Route::get('/notice', function () {
    $data=App\Notice::all();
    return view('admin.dashadmin.notice')->with('notices',$data);
    
});
 
Auth::routes();

Route::post('/savecategory', 'categoryController@store');
Route::get('/home', 'HomeController@index')->name('home');
Route::prefix('admin')->group(function(){
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
});
Route::get('admin/dashadmin/edit/{id}', 'categoryController@edit');
Route::put('admin/dashadmin/category/{id}', 'categoryController@update');
Route::delete('admin/dashadmin/category/{id}', 'categoryController@destroy');

Route::post('/savestudent', 'studentController@store');
Route::get('admin/dashadmin/studentedit/{id}', 'studentController@edit');
Route::put('admin/dashadmin/student/{id}', 'studentController@update');
Route::delete('admin/dashadmin/student/{id}', 'studentController@destroy');
Route::get('admin/dashadmin/viewstudent/{id}', 'studentController@show');
//Route::get('admin/dashadmin/viewstudent/{id}', 'studentController@show');

Route::post('/savenotice', 'noticeController@store');
Route::get('admin/dashadmin/editnotice/{id}', 'noticeController@edit');
Route::put('admin/dashadmin/notice/{id}', 'noticeController@update');
Route::delete('admin/dashadmin/notice/{id}', 'noticeController@destroy');
Route::get('admin/dashadmin/viewstudent/{id}', 'noticeController@show');

Route::post('/saveExam', 'examController@store');
Route::put('admin/dashadmin/exam/{id}', 'examController@update');
Route::delete('admin/dashadmin/exam/{id}', 'examController@destroy');