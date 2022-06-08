<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IncomeController extends Controller
{
    public function showWages(){
    	return view('income.wages');
    }

    public function showForeignErnedIncome(){
    	return view('income.foreign_erned_income');
    }

    public function showBusinessIncome(){
    	return view('income.business_income');
    }
}
