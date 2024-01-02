<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
Route::group(['namespace' => 'Site'],function (){
    Route::get('/', 'MainController')->name('main');
    Route::get('/o-proekte', 'AboutController')->name('about');
    Route::get('/universities', 'UniversitiesController')->name('universities');
    Route::get('/universities/{id}', 'UniversitiesCardController')->name('universities.id');
    Route::get('/school', 'SchoolController')->name('school');
    Route::get('/contacts', 'ContactsController')->name('contacts');
});


Auth::routes();


