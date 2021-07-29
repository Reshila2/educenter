<?php
use App\Http\Controllers\LanguageController1;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;

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
Route::get('/Home', function () {
    return view('Home');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/Home1', function () {
    return view('Home1');
});
Route::get('/home1', function () {
    return view('home1');
});
Route::get('Home', 'LocalizationController@index');
Route::get('change/lang', 'LocalizationController@lang_change')->name('LangChange');
Route::get('/sendemail','FormController@index');
Route::post('/sendemail/send','FormController@send');


Route::group(['middleware'=>'guest'],function(){
Route::get('/register','UserController@create')->name('register.create');
Route::post('/register','UserController@store')->name('register.store');

Route::get('/login','UserController@loginForm')->name('login.create');
Route::post('/login','UserController@login')->name('login');
});
Route::get('/logout','UserController@logout')->name('logout')->middleware('auth');
Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {
    Route::get('/', 'MainController@index')->name('admin.index');
});

