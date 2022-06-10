<?php

namespace App\Http\Livewire\Income;

use Livewire\Component;
use App\Core\GlobalService;

class BusinessIncome extends Component
{
    use GlobalService;
	public $currentStep = 1;

    // business information variables
    public $inputs = [];
    public $i = 1;
    public $selfEmployedinIsrael;
    public $selfEmployedinOther;
    public $NumberofDochRevachforms, $fileForDocRevach;
    public $countryChosen;
    public $nameOfBusiness, $addressOfBusiness, $principleBusinessActivity,$businessOperator, $businessStartDate;
    public $form1099Worker, $confirmform1099Worker;
    public $hasSelfEmployedor1099Nec, $fileFor1099Nec;
    public $wasIncomeReportedonTaxReturn;
    // end of business information variables


    // income and expenses variables
    public $hasExpenses;
    // end of income and expenses variables


    // variables for section 3 Cost of goods sold
    public $hasCostOfGoodSold;
    // end of variables for cost of goods sold


    // section

    public function render()
    {
        return view('livewire.income.business-income');
    }

    public function addInput($i)
    {
        $i = $i + 1;
        $this->i = $i;
        array_push($this->inputs ,$i);
    }

    public function removeInput($i)
    {
        array_pop($this->inputs);
    }

    public function prevForm()
    {
        $this->currentStep--;
    }

    public function submitBusinessInformation()
    {
        $this->currentStep ++;
    
    }

    public function submitIncomeAndExpenses()
    {
        $this->currentStep ++;
    
    }
}
