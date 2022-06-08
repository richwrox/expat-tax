<?php

namespace App\Http\Livewire\Generalinfo;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Country;
class PersonalInformation extends Component
{
    use WithFileUploads;

	public $usCitizen = 'no';
	public $currentStep = 1;
    public $successMsg = '';
    public $firstName,$lastName,$middleName,$TaxpayerDOB,$occupation,$TaxpayerCitizenShipStatus,$SSN,$SSNFile;
    public $isSpouseUSCitizen;
    public $dependentList;
    public $dependentFirstName,$dependentSSN,$dependentdod,$dependentMiddleName,$dependentLastName;

    public $DoYouHaveITIN,$WantToApplyForITINTaxpayer;
    public $TaxpayerForiegnPassportUpload;
    public $TaxpayerITIN;
    public $AreYouUSCitizen; 

    public $UploadTaxpayerDL =false;
    public $UploadTaxpayeBirthCert=false;
    public $UploadTaxpayerForiegnId=false;

    public $UploadSpouseDL =false;
    public $UploadSpouseBirthCert=false;
    public $UploadSpouseForiegnId=false;



    public $AreYouFilingNonResidentTax;
    //
    public $dl,$fId,$bc;
    public $SpouseSSNCardUpload,$spouseSSN;

    public $SpouseFirstName,$SpouseMiddleName,$SpouseLastName,$spouseDOB,$DoesSpouseHaveITN,$SpouseOccupation;
    public $SpouseWantToApplyForITIN,$SpouseFID,$SpouseBC,$SpouseDL;
    public $IsChildNaturalised;

    public $StreetAddress,$City,$Country,$ZIPCode,$TaxPayerPhone,$TaxpayerEmail; 

    public $RelationshipToTaxpayer;

     public function mount()
    {
        $this->countries = Country::get();

    }

	protected $listeners = ['IsUSACitizen','spouseCitizenship','back','backTo'];
    public function render()
    {
        return view('livewire.generalinfo.personal-information');
    }

    public function IsUSACitizen($status){
    	$this->usCitizen = ($status == 'yes') ? 'yes':'no';
    }

    public function spouseCitizenship($status){
    	$this->isSpouseUSCitizen = ($status == 'yes') ? 'yes':'no';
    }

    public function backTo($step){
        $this->currentStep = $step;
    }

    public function back(){
    	
    	$this->currentStep --;
    	$progress = \Session::get('progress') - 2;
    	\Session::put('progress',$progress);
        $this->emit('IncreamentProgress');
    }

    

    public function submitPersonalInfo(){

    	$validatedData = $this->validate([
            'firstName' => 'required',
            'lastName' => 'required',
            'TaxpayerDOB'=>'required',
            'occupation'=>'required',
            'AreYouUSCitizen'=>'required',
            'SSN'=>'required_if:AreYouUSCitizen,===,yes',
           
        ],
        []);
       
 		$this->currentStep ++;
        
        $this->progressUpdate();
        $this->emit('IncreamentProgress');
        
        
        

        
    }

    public function submitSpuseInfo($switch=null){
       
        $validatedData = $this->validate([
            'SpouseFirstName' => 'required',
            'SpouseLastName' => 'required',
            'spouseDOB'=>'required',
            'isSpouseUSCitizen'=>'required',
            'spouseSSN'=>'required_if:isSpouseUSCitizen,===,yes',
           
        ],
        []);
    	$this->currentStep = $switch;
    	$this->progressUpdate();
    	 $this->emit('IncreamentProgress');
    }

    public function moveToDependent(){
        //Submit spouse info and move to dependent
        $validatedData = $this->validate([
            'DoesSpouseHaveITN' => 'required',
            'SpouseFID'=>'required_if:UploadSpouseForiegnId,===,true',
            'SpouseBC'=>'required_if:UploadSpouseBirthCert,===,true',
            'SpouseDL'=>'required_if:UploadSpouseForiegnId,===,true',
        ],
        []);
    	$this->currentStep ++;

    	//Check if form is not empty
    	$this->progressUpdate();
    	$this->emit('IncreamentProgress');
    	//return redirect()->to('/id-verification');
    	
    }

    public function submitDependentInfo(){
        $this->currentStep ++;

        $this->progressUpdate();
        $this->emit('IncreamentProgress');
    }

    public function submitITIN(){
        $validatedData = $this->validate([    
            'TaxpayerForiegnPassportUpload'=>'required_if:WantToApplyForITINTaxpayer,===,yes',
            'dl'=>'required_if:UploadTaxpayerDL,===,true',
            'fId'=>'required_if:UploadTaxpayerDL,===,true',
            'bc'=>'required_if:UploadTaxpayerDL,===,true'
        ],
        []);
    	$this->currentStep =3;
    	$this->progressUpdate();
    	 $this->emit('IncreamentProgress');
    }

    public function submitContactInfo(){
        $validatedData = $this->validate([    
            'TaxpayerEmail'=>'required',
            'TaxPayerPhone'=>'required',
            'ZIPCode'=>'required',
            'Country'=>'required',
            'City'=>'required',
            'StreetAddress'=>'required'
        ],
        []);
    	$this->currentStep ++;
    	$this->progressUpdate();
    	 $this->emit('IncreamentProgress');
    }

    public function moveToIdVerification(){

        $this->progressUpdate();
        $this->emit('IncreamentProgress');
        return redirect()->to('/id-verification');
    }


    public function addDependentToList(){
    	$dependentData = [  
        ];
       dd("mc");
        array_push($this->dependentList, $cartData);
        \Session::put('cartItems',$this->cart);
    }



    public function progressUpdate(){
    	 $progress = \Session::get('progress') + 5;
    	 \Session::put('progress',$progress);
         $this->emit('IncreamentProgress');
    }




    public function enableUploadTaxpayerUploadTaxpayerDL(){

        $this->UploadTaxpayerDL = true;
    }

    public function enableUploadTaxpayerBirthCert(){
        $this->UploadTaxpayeBirthCert = true;
    }

    public function enableUploadTaxpayerForiegnId(){
        $this->UploadTaxpayerForiegnId = true; 
    }



}
