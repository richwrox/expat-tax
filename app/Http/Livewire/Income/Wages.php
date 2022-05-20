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
	public $NumberofFormsToUploadIsraeliTaxReturn,$DidYouReceiveAnyCompensation;


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
                'DidYouReceiveAnyCompensation'=>'required'
                //'NonWillfulWording'=>'required_if:StreamLinedFile,===,yes'

            ]);
    	// $this->progressUpdate();
     //    $this->emit('IncreamentProgress');
    }
}
