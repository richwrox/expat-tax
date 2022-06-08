<?php

namespace App\Http\Livewire\CorporateTaxes;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Core\GlobalService;

class NotProfit extends Component
{

    use GlobalService;
    use WithFileUploads;

	public $currentStep = 1;

    // form variables 
    public $isFirstTimeFiling990;
    public $name;
    public $ein;
    public $address;
    public $officerInCareDetails;
    public $hasProperBalanceSheet;
    public $compileFinStmtForYou;
    public $isOrgRegisteredCharity;
    public $charityRegState;

    public $profitAndLossFilesFor2019_2022 = [];
    public $balanceSheetForTaxYears19_20 = [];
    public $bankStmtForRelevantTaxYear = [];
    public $creditCardStmtForRelevantTaxYear = [];
    public $fileForDonorlist;


    // function to submit s-corporation and route to summary page
    public function submitNotProfits()
    {
        // validation and form save/submission


        // goto partnership page
        $this->progressUpdate();
        // return redirect()->route('summary');

    }

    public function prevForm()
    {
        return redirect()->route('foreign-corporation-112DF');
    }

    public function render()
    {
        return view('livewire.corporate-taxes.not-profit');
    }
}
