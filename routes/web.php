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
   return redirect()->to('/instructions');
});

Route::get('/login', 'LoginController@index');
Route::get('/register-user', 'LoginController@showRegistrationForm');
Route::get('/set-new-password', 'LoginController@showNewPasswordForm');


Route::get('/instructions', 'HomeController@index');
Route::get('/general-questions', 'GeneralQuestionsController@index');
Route::get('/personal-information', 'GeneralInformationController@personalInfo');
Route::get('/id-verification', 'GeneralInformationController@idVerification');
Route::get('/payment-for-our-service', 'GeneralInformationController@paymentForOurService');
Route::get('/wages', 'IncomeController@showWages');
Route::get('/foreign-erned-income', 'IncomeController@showForeignErnedIncome');
Route::get('/business-income', 'IncomeController@showBusinessIncome');
