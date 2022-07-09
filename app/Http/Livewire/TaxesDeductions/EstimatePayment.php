<?php

namespace App\Http\Livewire\TaxesDeductions;

use Livewire\Component;
use App\Core\GlobalService;
use App\Models\EstimatedTaxPayment;

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

    public function mount()
    {
        if(CurrentFilingYear() != false){
            $estimated = EstimatedTaxPayment::where('user_id', UserID())->where('filing_years_id', CurrentFilingYear())->get();
            if($estimated->count()>0){
                $this->DidYouMakeEstimatedTaxPayment = 'yes';
                $this->PaymentDateOne = $estimated->first()->payment_date;
                $this->AmountForPaymentDateOne =$estimated->first()->amount;

                if($estimated->skip(1)->first()){
                    $this->PaymentDateTwo = $estimated->skip(1)->first()->payment_date;
                    $this->AmountForPaymentDateTwo  =$estimated->skip(1)->first()->amount;
                }

                if($estimated->skip(2)->first()){
                    $this->PaymentDateThree = $estimated->skip(2)->first()->payment_date;
                    $this->AmountForPaymentDateThree =$estimated->skip(2)->first()->amount;
                }

                if($estimated->skip(3)->first()){
                    $this->PaymentDateFour = $estimated->last()->payment_date;
                    $this->AmountForPaymentDateFour  =$estimated->last()->amount;
                }
            }
            else{
                $this->DidYouMakeEstimatedTaxPayment = 'no';
            }
        }
    }


    public function submitEstimatePayment(){
        $validatedData = $this->validate([
            'DidYouMakeEstimatedTaxPayment' => 'required',
            'DidYouMakeEstimatedTaxPayment' => 'required',
            'PaymentDateOne' => 'required_if:DidYouMakeEstimatedTaxPayment,==,yes',
            'AmountForPaymentDateOne' => 'required_if:DidYouMakeEstimatedTaxPayment,==,yes',
        ],
        []);


        $estimated = EstimatedTaxPayment::where('user_id', UserID())->where('filing_years_id', CurrentFilingYear())->get();
        if($estimated->count()>0){
            $update = EstimatedTaxPayment::where('user_id', UserID())->where('filing_years_id', CurrentFilingYear())->first();

            if($this->PaymentDateOne != ''){
                $update->payment_date = $this->PaymentDateOne;
            }
            else{
                $update->payment_date= date('00 00 00');
            }

            $update->amount = $this->AmountForPaymentDateOne;
            $update->save();


            $update = EstimatedTaxPayment::where('user_id', UserID())->where('filing_years_id', CurrentFilingYear())->skip(1)->first();
            $update->payment_date = $this->PaymentDateTwo;
            $update->amount = $this->AmountForPaymentDateTwo;
            $update->save();

            $update = EstimatedTaxPayment::where('user_id', UserID())->where('filing_years_id', CurrentFilingYear())->skip(2)->first();
            $update->payment_date = $this->PaymentDateThree;
            $update->amount = $this->AmountForPaymentDateThree;
            $update->save();

            $update = EstimatedTaxPayment::where('user_id', UserID())->where('filing_years_id', CurrentFilingYear())->skip(3)->first();
            if($this->PaymentDateFour != ''){
                $update->payment_date = $this->PaymentDateFour;
            }
            else{
                $update->payment_date=NULL;
            }

            // $update->payment_date = $this->PaymentDateFour;
            $update->amount = $this->AmountForPaymentDateFour;
            $update->save();


            $this->currentStep ++;
            return redirect()->route('stimulus');

        }


        $estimated = new EstimatedTaxPayment;
        $estimated->user_id = UserID();
        $estimated->filing_years_id = CurrentFilingYear();
        $estimated->payment_date = $this->PaymentDateOne;
        $estimated->amount = $this->AmountForPaymentDateOne;
        $estimated->save();

        $estimated = new EstimatedTaxPayment;
        $estimated->user_id = UserID();
        $estimated->filing_years_id = CurrentFilingYear();
        $estimated->payment_date = $this->PaymentDateTwo;
        $estimated->amount = $this->AmountForPaymentDateTwo;
        $estimated->save();

        $estimated = new EstimatedTaxPayment;
        $estimated->user_id = UserID();
        $estimated->filing_years_id = CurrentFilingYear();
        $estimated->payment_date = $this->PaymentDateThree;
        $estimated->amount = $this->AmountForPaymentDateThree;
        $estimated->save();

        $estimated = new EstimatedTaxPayment;
        $estimated->user_id = UserID();
        $estimated->filing_years_id = CurrentFilingYear();
        $estimated->payment_date = $this->PaymentDateFour;
        $estimated->amount = $this->AmountForPaymentDateFour;
        $estimated->save();




        $this->currentStep ++;
        $this->progressUpdate();
        return redirect()->route('stimulus');
    }

    public function prevForm()
    {
        return redirect()->route('tax-filing');
    }
}
