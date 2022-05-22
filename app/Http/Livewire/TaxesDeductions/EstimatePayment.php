<?php

namespace App\Http\Livewire\TaxesDeductions;

use Livewire\Component;
use App\Core\GlobalService;


class EstimatePayment extends Component
{
    use GlobalService;
	public $currentStep = 1;
	public $DidYouMakeEstimatedTaxPayment;
    public $PaymentDateOne, $AmountForPaymentDateOne, $PaymentDateTwo, $AmountForPaymentDateTwo;
    public $PaymentDateThree,$AmountForPaymentDateThree,$PaymentDateFour,$AmountForPaymentDateFour;


    public function render()
    {
        return view('livewire.taxes-deductions.estimate-payment');
    }


    public function submitEstimatePayment(){
        $this->currentStep ++;
        $this->progressUpdate();
        return redirect()->route('stimulus');
    }
}
