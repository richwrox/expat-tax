<?php

namespace App\Http\Livewire\Generalinfo;

use Livewire\Component;
use App\Core\GlobalService;

class IdVerification extends Component
{
	use GlobalService;

	public $taxPayerIdType;
	public $spouseIdType;

	public $currentStep = 1;

    public function render()
    {
        return view('livewire.generalinfo.id-verification');
    }

    public function submitTaxpayerVerification(){
        $validatedData = $this->validate([
            'taxPayerIdType' => 'required',
            'LicenseNumber'=>'required_if:taxPayerIdType,===,1',
            'IDNumber'=>'required_if:taxPayerIdType,===,2',
        ],
        []);
    	$this->currentStep ++;
    	$this->progressUpdate();
    	$this->emit('IncreamentProgress');
    }

    public function submitSpouseIdVerification(){
        $this->currentStep ++;
        $this->progressUpdate();
        return redirect()->to('/payment-for-our-service');
    }

      public function back(){
    	$this->currentStep --;

    	$progress = \Session::get('progress') - 2;
    	 \Session::put('progress',$progress);
         $this->emit('IncreamentProgress');
    }
}
