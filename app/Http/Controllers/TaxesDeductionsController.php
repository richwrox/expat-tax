<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaxesDeductionsController extends Controller
{
    public function showTaxFiling(){
    	return view('taxes_deductions.taxes-deductions');
    }

    public function showEstimatePayments(){
    	return view('taxes_deductions.estimate-payments');
    }

    public function showStimulus(){
    	return view('taxes_deductions.stimulus');
    }

    public function showAdvancedChildTax(){
    	return view('taxes_deductions.advanced-child-tax');
    }
}
