<?php

namespace App\Http\Livewire\Generalinfo;

use Livewire\Component;
use App\Core\GlobalService;
class PaymentForOurService extends Component
{
	use GlobalService;
	public $currentStep = 1;
	public $HowDidYouKnow;
	public $InterestedInOurService;


    public function render()
    {
        return view('livewire.generalinfo.payment-for-our-service');
    }

    public function submitPaymentDetails(){
    
    	$this->currentStep ++;
    }

    public function submitFeeData(){
    		$validatedData = $this->validate([
            'HowDidYouKnow' => 'required'
        ],
        []);
    	$this->progressUpdate();
    	$this->emit('IncreamentProgress');
    	
    	return redirect()->to('/wages');	
    }

    public function back(){
    	$this->currentStep --;
    }
}
