<?php

namespace App\Http\Livewire\TaxesDeductions;

use Livewire\Component;
use App\Core\GlobalService;


class TaxFiling extends Component
{
    use GlobalService;
	public $currentStep = 1;
	public $DidYouPayForTuition,$TuitionPaymentDetials,$NumberOfFormsUploadedForTuitionPayment;
    public $DoYouHaveStudenLoan,$ProvideStudentLoanInterest,$NumberOfFormsUploadedForStudentLoanInterest;

    public function render()
    {
        return view('livewire.taxes-deductions.tax-filing');
    }


    public function submitTaxFiling(){
        $this->currentStep ++;
        $this->progressUpdate();
        return redirect()->route('estimate-payments');
    }
}
