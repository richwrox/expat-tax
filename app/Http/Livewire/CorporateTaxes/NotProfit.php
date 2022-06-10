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


    // function to submit notprofit and route to summary page
    public function submitNotProfits()
    {
        // validation and form save/submission

        // session('instructions')['completedYears']= session('instructions')['CurrentTaxFilingYear'];
        // dd(session('instructions')['CurrentTaxFilingYear']);

        if(session()->has('instructions')){
            session()->forget('contact-info');
            // dd('lol');
            // return redirect()->route('instructions');

            // dd(count(session('instructions')['selectedYear']));
            // dd('dkd');
            // dd(session()->all());
            // if(!empty(session('instructions')['completedYears'])){}
            if(empty(session('instructions')['completedYears']) || !in_array(session('instructions')['CurrentTaxFilingYear'], session('instructions')['completedYears'])){
                session()->push('instructions.completedYears', session('instructions')['CurrentTaxFilingYear']);

                // dd(session('completedYears'));
                if( is_array(session('instructions')['selectedYear'])){
                    $key = array_search(session('instructions')['CurrentTaxFilingYear'], session('instructions')['selectedYear']);
                    if($key < count(session('instructions')['selectedYear']) -1){
                        $key += 1;
                        session()->put('instructions.CurrentTaxFilingYear', session('instructions')['selectedYear'][$key]);
                    }
                }
            }

        }


        return redirect()->route('instructions');

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
