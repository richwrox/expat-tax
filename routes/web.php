<?php

use Illuminate\Contracts\View\View;
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


Route::get('/instructions', 'HomeController@index');
Route::get('/general-questions', 'GeneralQuestionsController@index');
Route::get('/personal-information', 'GeneralInformationController@personalInfo');
Route::get('/id-verification', 'GeneralInformationController@idVerification');
Route::get('/payment-for-our-service', 'GeneralInformationController@paymentForOurService');
Route::get('/wages', 'IncomeController@showWages');
Route::get('/tax-filing', 'TaxesDeductionsController@showTaxFiling')->name('tax-filing');
Route::get('/estimate-payments', 'TaxesDeductionsController@showEstimatePayments')->name('estimate-payments');
Route::get('/stimulus', 'TaxesDeductionsController@showStimulus')->name('stimulus');
