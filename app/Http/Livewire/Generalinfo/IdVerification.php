<?php

namespace App\Http\Livewire\Generalinfo;

use Livewire\Component;
use App\Core\GlobalService;
use Illuminate\Support\Facades\Session;

class IdVerification extends Component
{
	use GlobalService;

	public $taxPayerIdType,$LicenseNumber,$IDNumber,$IDIssueState,$IDExpirationDate,$IDIssueDate;
	public $spouseIdType, $SpouseLicenseNumber, $spouseIDNo, $SpouseIssuingState, $SpouseIDExpirationDate, $SpouseSpouseIDExpirationDate;

	public $currentStep = 1;

    public function render()
    {
        return view('livewire.generalinfo.id-verification');
    }

    public function mount()
    {
        if(session()->has('taxpayerIDVerification')){
            $this->taxPayerIdType = session('taxpayerIDVerification')['taxPayerIdType'];
            $this->LicenseNumber = session('taxpayerIDVerification')['LicenseNumber'];
            $this->IDNumber = session('taxpayerIDVerification')['IDNumber'];
            $this->IDIssueState = session('taxpayerIDVerification')['IDIssueState'];
            $this->IDExpirationDate = session('taxpayerIDVerification')['IDExpirationDate'];
            $this->IDIssueDate = session('taxpayerIDVerification')['IDIssueDate'];
        }

        if(session()->has('SpouseIDVerification')){
            $this->spouseIdType = session('SpouseIDVerification')['spouseIdType'];
            $this->SpouseLicenseNumber = session('SpouseIDVerification')['SpouseLicenseNumber'];
            $this->spouseIDNo = session('SpouseIDVerification')['spouseIDNo'];
            $this->SpouseIssuingState = session('SpouseIDVerification')['SpouseIssuingState'];
            $this->SpouseIDExpirationDate = session('SpouseIDVerification')['SpouseIDExpirationDate'];
            $this->SpouseSpouseIDExpirationDate = session('SpouseIDVerification')['SpouseSpouseIDExpirationDate'];
        }
    }


    public function submitTaxpayerVerification(){
        $validatedData = $this->validate([
            'taxPayerIdType' => 'required',
            'LicenseNumber'=>'required_if:taxPayerIdType,===,1',
            'IDNumber'=>'required_if:taxPayerIdType,===,2',
        ],
        []);

        $data = ['taxPayerIdType'=>$this->taxPayerIdType,'LicenseNumber'=>$this->LicenseNumber,'IDNumber'=>$this->IDNumber,'IDIssueState'=>$this->IDIssueState,'IDExpirationDate'=>$this->IDExpirationDate,'IDIssueDate'=>$this->IDIssueDate];
        Session::put('taxpayerIDVerification',$data);

    	$this->currentStep ++;
    	$this->progressUpdate();
    	$this->emit('IncreamentProgress');
    }

    public function submitSpouseIdVerification(){

        $data = ['spouseIdType'=>$this->spouseIdType, 'SpouseLicenseNumber'=>$this->SpouseLicenseNumber, 'spouseIDNo'=>$this->spouseIDNo, 'SpouseIssuingState'=>$this->SpouseIssuingState, 'SpouseIDExpirationDate'=>$this->SpouseIDExpirationDate, 'SpouseSpouseIDExpirationDate'=>$this->SpouseSpouseIDExpirationDate];
        Session::put('SpouseIDVerification',$data);

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
