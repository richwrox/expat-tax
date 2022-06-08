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
        $validatedData = $this->validate([
            'DidYouPayForTuition' => 'required',
            'DoYouHaveStudenLoan' => 'required',
            'NumberOfFormsUploadedForTuitionPayment'=>'required_if:DidYouPayForTuition,==,yes',
            'NumberOfFormsUploadedForStudentLoanInterest'=>'required_if:DoYouHaveStudenLoan,==,yes',
        ],
        []);

        $this->currentStep ++;
        $this->progressUpdate();
        return redirect()->route('estimate-payments');
    }
}
