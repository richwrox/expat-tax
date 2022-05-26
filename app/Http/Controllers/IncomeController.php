<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IncomeController extends Controller
{
    public function showWages(){
    	return view('income.wages');
    }

    public function showBusinessIncome()
    {
        return view('income.business-income');
    }

    public function showRentalIncome()
    {
        return view('income.rental-income');
    }


}

