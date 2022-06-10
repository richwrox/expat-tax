<?php

namespace App\Http\Livewire\Income;

use Livewire\Component;
use App\Core\GlobalService;
use Livewire\WithFileUploads;
use App\Models\Country;


class Wages extends Component
{
	use GlobalService;
	public $currentStep=1;
	public $DoyouHaveSalaryIncome,$DoyouHaveW2Forms,$DidYouFileIsraliTax,$WasIncomeReceivedOnTlush;
	public $NumberofFormsToUploadIsraeliTaxReturn,$DidYouReceiveAnyCompensation,$UploadFileCompensationForms,$NumberofFormsToUploadDidYouReceiveAnyCompensation,$NumberofFormsToUploadAustralianIncomeTax;
	public $UploadFilePayFromDec=1;
	public $PayFromDeclip,$NonTaxDistribution,$AmountDistributed,$UploadFileAustralianIncomeTax,$NumberofEmployers;
	public $UploadFileUKIncomeTax=1;
	public $UploadFileUKPaySlips=1;
	public $NumberofUploadsCanadianForms =1;
	public $T4WageStatements;
	public $NumberofT4WageStatements=1;
	public $NumberofSupportingDocuments = 1;
	public $NumberofWageSatements =1;
	public $P60Forms,$DidYouTerminateYourContract,$EmployedByMoreOneEmployer,$UploadCanadianForms,$UploadSupportingDocuments,$Country;
    public $countries;
    public $NumberofFormsToUpload=1;

    public function mount()
    {
        $this->countries = Country::get();

    }

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
                'NumberofEmployers'=>'required',
                'P60Forms'=>'required',
                'DidYouTerminateYourContract'=>'required',
                'EmployedByMoreOneEmployer'=>'required'

            ]);
    	// $this->progressUpdate();
     //    $this->emit('IncreamentProgress');
    }
}
