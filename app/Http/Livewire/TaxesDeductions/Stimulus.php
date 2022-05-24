<?php

namespace App\Http\Livewire\TaxesDeductions;

use Livewire\Component;
use App\Core\GlobalService;


class Stimulus extends Component
{
    use GlobalService;
	public $currentStep = 1;
	public $DidYouReceiveFirstEconomicStimulus,$FirstStimulusDate,$AmountTaxPayerReceivedForFirstStimulus, $AmountSpouseReceivedForFirstStimulus, $TotalAmountReceivedForThirdStimulus;
    public $DidYouReceiveSecondEconomicStimulus,$SecondStimulusDate,$AmountTaxPayerReceivedForSecondStimulus, $AmountSpouseReceivedForSecondStimulus,$TotalAmountReceivedForSecondStimulus;
    public $DidYouReceiveThirdEconomicStimulus,$ThirdStimulusDate,$AmountTaxPayerReceivedForThirdStimulus, $AmountSpouseReceivedForThirdStimulus,$TotalAmountReceivedForFirstStimulus;


    public function render()
    {
        $this->TotalAmountReceivedForThirdStimulus = $this->AmountTaxPayerReceivedForThirdStimulus + $this->AmountSpouseReceivedForThirdStimulus;
        $this->TotalAmountReceivedForSecondStimulus = $this->AmountTaxPayerReceivedForSecondStimulus + $this->AmountSpouseReceivedForSecondStimulus;
        $this->TotalAmountReceivedForFirstStimulus = $this->AmountTaxPayerReceivedForFirstStimulus + $this->AmountSpouseReceivedForFirstStimulus;
        return view('livewire.taxes-deductions.stimulus', [
            'TotalAmountReceivedForFirstStimulus', 'TotalAmountReceivedForSecondStimulus', 'TotalAmountReceivedForThirdStimulus'
        ]);
    }


    public function submitStimulus(){
        $validatedData = $this->validate([
            'DidYouReceiveFirstEconomicStimulus' => 'required',
            'DidYouReceiveSecondEconomicStimulus' => 'required',
            'DidYouReceiveThirdEconomicStimulus' => 'required',

            'FirstStimulusDate'=>'required_if:DidYouReceiveFirstEconomicStimulus,==,yes',
            'AmountTaxPayerReceivedForFirstStimulus'=>'required_if:DidYouReceiveFirstEconomicStimulus,==,yes',
            'AmountSpouseReceivedForFirstStimulus'=>'required_if:DidYouReceiveFirstEconomicStimulus,==,yes',

            'SecondStimulusDate'=>'required_if:DidYouReceiveSecondEconomicStimulus,==,yes',
            'AmountTaxPayerReceivedForSecondStimulus'=>'required_if:DidYouReceiveSecondEconomicStimulus,==,yes',
            'AmountSpouseReceivedForSecondStimulus'=>'required_if:DidYouReceiveSecondEconomicStimulus,==,yes',

            'ThirdStimulusDate'=>'required_if:DidYouReceiveThirdEconomicStimulus,==,yes',
            'AmountTaxPayerReceivedForThirdStimulus'=>'required_if:DidYouReceiveThirdEconomicStimulus,==,yes',
            'AmountSpouseReceivedForThirdStimulus'=>'required_if:DidYouReceiveThirdEconomicStimulus,==,yes',
        ],
        []);

        $this->currentStep ++;
        $this->progressUpdate();
        return redirect()->route('estimate-payments');
    }

}
