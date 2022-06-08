<?php

namespace App\Http\Livewire\CorporateTaxes;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Core\GlobalService;

class SCorporations extends Component
{

    use GlobalService;
    use WithFileUploads;

	public $currentStep = 1;

   

    // form variables for general partnership information
    public $isFirstTimeFiling1120s;
    public $fileFor1120s; //file upload if above is yes
    public $isAssetsOverMillion;
    public $hasProfitLossStmt;
    public $nameOfCorporation;
    public $addressOfCorporation;
    public $employerIDnumber;
    public $serviceProvided;
    public $principalBusinessActivity;
    public $formationDateOfCorporation;
    public $shareHolderDetails = [];
    public $paymentToIndependentContractor;
    public $foreignShareholderTransactions;
    public $endOfYearBalance;


   


    // form variables for income and expenses
    public $incomeExpenseCurrency;
    public $grossIncome;
    public $hasExpenses;
    // public $
    // public $
    // public $
    // public $
    // public $
    // public $
    // public $
    // public $
    // public $
    // public $
    // public $
    // public $
    // public $
    // public $
    // public $
    // public $
    // public $
    // public $
    // public $
    // public $
    // public $
    // public $
    // public $
    // public $
    // public $
    // public $


    // end of variables for income and expenses section


    // form variables for cost of goods sold
    public $hasCostOfGoodsSold;
    public $hasChangesInQuantities;
    public $methodForClosingInventory;
    public $startOfYearInventory;
    public $amountSpentOnPurchases;
    public $itemsRedrawnForPersonalUse;
    public $costOfLabor;
    public $amountSpentOnMaterials;
    public $otherCosts;
    public $endOfYearInventory;
    // end of variables for cost of goods sold


    // function to submit s-corporation and route to partnership page
    public function submitScorporation()
    {
        // validation and form save/submission


        // goto partnership page
        $this->progressUpdate();
        return redirect()->route('partnership');

    }

    public function prevForm()
    {
        return redirect()->route('c-corporations');
    }

    public function render()
    {
        return view('livewire.corporate-taxes.s-corporations');
    }
}
