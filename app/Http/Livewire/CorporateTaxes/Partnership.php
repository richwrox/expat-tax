<?php

namespace App\Http\Livewire\CorporateTaxes;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Core\GlobalService;

class Partnership extends Component
{

    use GlobalService;
    use WithFileUploads;


    public $currentStep = 1;

    public $isFirstTimeFiling1065;
    public $fileFor1065Partnerships; //file for if above is yes

    // form variables for partnership general info first section
    public $isAssetsOverMillion;
    public $hasProfitLossStmt;
    public $nameOfPartnership;
    public $addressOfPartnership;
    public $employerIDnumber;
    public $serviceProvided;
    public $principalBusinessActivity;
    public $formationDateOfPartnership;
    public $partnerInfoDetails;
    public $employedWorkersWithWages;
    public $madePaymentToContractor;
    public $endOfYearBalance;

    public $fileForBalanceSheet; //file if balance sheet exists
    public $fileForProfitLossStmt; // file for if there is profit and loss statement.


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


    // function to validate and move to next section (Foreign corporation)
    public function submitPartnerships()
    {
        // validate form fields

        // go to next section and increase progress bar
        $this->progressUpdate();
        return redirect()->route('foreign-corporation-112DF');
    }

    public function prevForm()
    {
        return redirect()->route('s-corporations');
    }


    public function render()
    {
        return view('livewire.corporate-taxes.partnership');
    }
}

