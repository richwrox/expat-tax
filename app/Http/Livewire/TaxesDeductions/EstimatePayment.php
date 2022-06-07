<?php

namespace App\Http\Livewire\TaxesDeductions;

use Livewire\Component;
use App\Core\GlobalService;


class EstimatePayment extends Component
{
    use GlobalService;
	public $currentStep = 2;
	public $DidYouMakeEstimatedTaxPayment;
    public $PaymentDateOne, $AmountForPaymentDateOne, $PaymentDateTwo, $AmountForPaymentDateTwo;
    public $PaymentDateThree,$AmountForPaymentDateThree,$PaymentDateFour,$AmountForPaymentDateFour;


    public function render()
    {
        return view('livewire.taxes-deductions.estimate-payment');
    }


    public function submitEstimatePayment(){
        $validatedData = $this->validate([
            'DidYouMakeEstimatedTaxPayment' => 'required',
            'DidYouMakeEstimatedTaxPayment' => 'required',
            'PaymentDateOne' => 'required_if:DidYouMakeEstimatedTaxPayment,==,yes',
            'AmountForPaymentDateOne' => 'required_if:DidYouMakeEstimatedTaxPayment,==,yes',
        ],
        []);

        $this->currentStep ++;
        $this->progressUpdate();
        return redirect()->route('stimulus');
    }

    public function prevForm()
    {
        return redirect()->route('tax-filing');
    }
}
