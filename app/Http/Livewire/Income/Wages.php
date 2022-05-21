<?php

namespace App\Http\Livewire\Income;

use Livewire\Component;
use App\Core\GlobalService;
use Livewire\WithFileUploads;


class Wages extends Component
{
	use GlobalService;
	public $currentStep=1;
	public $DoyouHaveSalaryIncome,$DoyouHaveW2Forms,$NumberofFormsToUpload,$DidYouFileIsraliTax,$WasIncomeReceivedOnTlush;
	public $NumberofFormsToUploadIsraeliTaxReturn,$DidYouReceiveAnyCompensation,$UploadFileCompensationForms,$NumberofFormsToUploadDidYouReceiveAnyCompensation,$NumberofFormsToUploadAustralianIncomeTax;
	public $UploadFilePayFromDec,$PayFromDeclip,$NonTaxDistribution,$AmountDistributed,$UploadFileAustralianIncomeTax,$NumberofEmployers;


    public function render()
    {
        return view('livewire.income.wages');
    }

    public function submitWages(){
    	$validatedData = $this->validate(
            [
                'DoyouHaveSalaryIncome'=>'required',
                'DoyouHaveW2Forms'=>'required',
                'WasIncomeReceivedOnTlush'=>'required',
                'DidYouReceiveAnyCompensation'=>'required',
                'UploadFileAustralianIncomeTax'=>'required',
                'NonTaxDistribution'=>'required',
                'AmountDistributed'=>'required_if:NonTaxDistribution,===,yes',
                'NumberofEmployers'=>'required'

            ]);
    	// $this->progressUpdate();
     //    $this->emit('IncreamentProgress');
    }
}
