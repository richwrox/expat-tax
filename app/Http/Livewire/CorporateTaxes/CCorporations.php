<?php

namespace App\Http\Livewire\CorporateTaxes;

use Livewire\Component;
use App\Core\GlobalService;


class CCorporations extends Component
{
    use GlobalService;
	public $currentStep = 1;

    public $inputs = [];
    public $i = 1;

    public $isFirstTimeFiling1120, $FileForFirstTimeFiling1120,
    $nameOfCorporation, $addressOfCorporation,$EIN,$ServiceProvided,$PricipalBusinessActivity,$CorporationDate,
    $ShareHolderName,$ShareHolderAddress,$PercentageOwnership,$USTaxNo,$DidYouEmployAnyWorkers,
    $isPaymentToIndependentContractors,$isFile1099MISCForms,$isForeignNonUsTransaction,$BusinessAccountBalance,
    $isAssetWorth,$DocumentForBalanceSheet,$HaveProfitLossStatement,$DocumentForProfitLossStatment;

    public $incomeExpenseCurrency;
    public $grossIncome;
    public $hasExpenses;
    public $hasProfitLossStmt;

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



    public function render()
    {
        return view('livewire.corporate-taxes.c-corporations');
    }

    public function prevForm()
    {
        // $this->currentStep--;
        return redirect()->route('thirty520');
    }

    public function submitCCorporation(){

       $this->currentStep ++;
       $this->progressUpdate();
       $this->emit('IncreamentProgress');

       return redirect()->route('s-corporations');

    }
}
