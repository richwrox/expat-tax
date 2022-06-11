<?php

namespace App\Http\Livewire\Generalinfo;

use Illuminate\Support\Facades\Session;
use Livewire\Component;
use Livewire\WithFileUploads;

class PersonalInformation extends Component
{
    use WithFileUploads;

	public $usCitizen = 'no';
	public $currentStep = 1;
    public $successMsg = '';
    public $firstName;
    public $lastName,$middleName,$TaxpayerDOB,$occupation,$TaxpayerCitizenShipStatus,$SSN,$SSNFile;
    public $isSpouseUSCitizen;
    public $dependentList;

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

    public $SpouseFirstName,$SpouseMiddleName,$SpouseLastName,$spouseDOB,$DoesSpouseHaveITN,$SpouseOccupation, $SpouseITIN;
    public $SpouseWantToApplyForITIN,$SpouseFID,$SpouseBC,$SpouseDL,$SpousePassport,$NonResidentSpouse;
    // public $IsChildNaturalised;

    public $StreetAddress,$City,$Country,$ZIPCode,$TaxPayerPhone,$TaxpayerEmail;

    public $dependentFirstName, $dependentMiddleName,$dependentLastName,$dependentSSN,$dependentSSNDate,$dependentdod,$dependentTaxpayerRelationship,$IsChildNaturalised;
    public $accountType,$accountPhone,$routingNo;

	protected $listeners = ['IsUSACitizen','spouseCitizenship','back','backTo'];
    public function render()
    {
        return view('livewire.generalinfo.personal-information');
    }

    public function mount()
    {
        if(session()->has('personal-info')){
            $this->firstName = session('personal-info')['firstName'];
            $this->lastName = session('personal-info')['lastName'];
            $this->middleName = session('personal-info')['middleName'];
            $this->TaxpayerDOB = session('personal-info')['TaxpayerDOB'];
            $this->occupation = session('personal-info')['occupation'];
            $this->TaxpayerCitizenShipStatus = session('personal-info')['TaxpayerCitizenShipStatus'];
            $this->SSN = session('personal-info')['SSN'];
            $this->SSNFile = session('personal-info')['SSNFile'];
            $this->AreYouUSCitizen = session('personal-info')['AreYouUSCitizen'];
        }


        if(session()->has('spouse-info')){
            $this->SpouseFirstName = session('spouse-info')['SpouseFirstName'];
            $this->SpouseMiddleName = session('spouse-info')['SpouseMiddleName'];
            $this->SpouseLastName = session('spouse-info')['SpouseLastName'];
            $this->spouseDOB = session('spouse-info')['spouseDOB'];
            $this->DoesSpouseHaveITN = session('spouse-info')['DoesSpouseHaveITN'];
            $this->SpouseOccupation = session('spouse-info')['SpouseOccupation'];
            $this->isSpouseUSCitizen = session('spouse-info')['isSpouseUSCitizen'];
            $this->SpouseSSNCardUpload = session('spouse-info')['SpouseSSNCardUpload'];
            $this->spouseSSN = session('spouse-info')['spouseSSN'];
        }


        if(session()->has('dependent-info')){
            $this->dependentFirstName = session('dependent-info')['dependentFirstName'];
            $this->dependentMiddleName = session('dependent-info')['dependentMiddleName'];
            $this->dependentLastName = session('dependent-info')['dependentLastName'];
            $this->dependentSSN = session('dependent-info')['dependentSSN'];
            $this->dependentSSNDate = session('dependent-info')['dependentSSNDate'];
            $this->dependentdod = session('dependent-info')['dependentdod'];
            $this->dependentTaxpayerRelationship = session('dependent-info')['dependentTaxpayerRelationship'];
            $this->IsChildNaturalised = session('dependent-info')['IsChildNaturalised'];
        }

        if(session()->has('contact-info')){
            $this->StreetAddress = session('contact-info')['StreetAddress'];
            $this->City = session('contact-info')['City'];
            $this->Country = session('contact-info')['Country'];
            $this->ZIPCode = session('contact-info')['ZIPCode'];
            $this->TaxPayerPhone = session('contact-info')['TaxPayerPhone'];
            $this->TaxpayerEmail = session('contact-info')['TaxpayerEmail'];
        }

        if(session()->has('bank-info')){
            $this->accountType = session('bank-info')['accountType'];
            $this->accountPhone = session('bank-info')['accountPhone'];
            $this->routingNo = session('bank-info')['routingNo'];
        }
    }

    public function IsUSACitizen($status){
    	$this->usCitizen = ($status == 'yes') ? 'yes':'no';
    }

    // public function TryAreYouUSCitizen($status)
    // {
    //     $this->AreYouUSCitizen = ($status == 'yes') ? 'yes':'no';
    // }

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

        $data = ['firstName'=>$this->firstName,'lastName'=>$this->lastName,'middleName'=>$this->middleName,'TaxpayerDOB'=>$this->TaxpayerDOB,'occupation'=>$this->occupation,'TaxpayerCitizenShipStatus'=>$this->TaxpayerCitizenShipStatus,'SSN'=>$this->SSN,'SSNFile'=>$this->SSNFile, 'AreYouUSCitizen'=>$this->AreYouUSCitizen];
        Session::put('personal-info',$data);



 		$this->currentStep ++;

        $this->progressUpdate();
        $this->emit('IncreamentProgress');
    }

    public function submitSpuseInfo($switch=null){
        // if($this->AreYouUSCitizen == 'yes'){
    	//     $this->currentStep++;
        //     return $this->submitPersonalInfo();
        // }

        $validatedData = $this->validate([
            'SpouseFirstName' => 'required',
            'SpouseLastName' => 'required',
            'spouseDOB'=>'required',
            'isSpouseUSCitizen'=>'required',
            'spouseSSN'=>'required_if:isSpouseUSCitizen,===,yes',

        ],
        []);

        $data = ['SpouseFirstName'=>$this->SpouseFirstName,'SpouseMiddleName'=>$this->SpouseMiddleName,'SpouseLastName'=>$this->SpouseLastName,'spouseDOB'=>$this->spouseDOB,'DoesSpouseHaveITN'=>$this->DoesSpouseHaveITN,'SpouseOccupation'=>$this->SpouseOccupation, 'isSpouseUSCitizen'=>$this->isSpouseUSCitizen, 'SpouseSSNCardUpload'=>$this->SpouseSSNCardUpload,'spouseSSN'=>$this->spouseSSN];
        Session::put('spouse-info',$data);

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


        $data = ['DoesSpouseHaveITN'=>$this->DoesSpouseHaveITN, 'SpouseITIN'=>$this->SpouseITIN, 'SpouseWantToApplyForITIN'=>$this->SpouseWantToApplyForITIN, 'SpousePassport'=>$this->SpousePassport, 'UploadSpouseDL'=>$this->UploadSpouseDL,'UploadSpouseBirthCert'=>$this->UploadSpouseBirthCert,'UploadSpouseForiegnId'=>$this->UploadSpouseForiegnId,'SpouseDL'=>$this->SpouseDL,'SpouseBC'=>$this->SpouseBC,'SpouseFID'=>$this->SpouseFID,'NonResidentSpouse'=>$this->NonResidentSpouse];
        Session::put('spouse-ITIN',$data);
    	//Check if form is not empty
    	$this->progressUpdate();
    	$this->emit('IncreamentProgress');
    	//return redirect()->to('/id-verification');

    }

    public function submitDependentInfo(){
        $this->currentStep ++;

        $data = ['dependentFirstName'=>$this->dependentFirstName, 'dependentMiddleName'=>$this->dependentMiddleName, 'dependentLastName'=>$this->dependentLastName, 'dependentSSN'=>$this->dependentSSN, 'dependentSSNDate'=>$this->dependentSSNDate,'dependentdod'=>$this->dependentdod,'dependentTaxpayerRelationship'=>$this->dependentTaxpayerRelationship,'IsChildNaturalised'=>$this->IsChildNaturalised];
        Session::put('dependent-info',$data);


        $this->progressUpdate();
        $this->emit('IncreamentProgress');
    }

    public function submitITIN(){
        if($this->AreYouUSCitizen == 'yes'){
    	    $this->currentStep++;
            return $this->submitPersonalInfo();
        }
        $validatedData = $this->validate([
            'TaxpayerForiegnPassportUpload'=>'required_if:WantToApplyForITINTaxpayer,===,yes',
            'dl'=>'required_if:UploadTaxpayerDL,===,true',
            'fId'=>'required_if:UploadTaxpayerDL,===,true',
            'bc'=>'required_if:UploadTaxpayerDL,===,true'
        ],
        []);


        $data = ['DoYouHaveITIN'=>$this->DoYouHaveITIN, 'WantToApplyForITINTaxpayer'=>$this->WantToApplyForITINTaxpayer, 'TaxpayerITIN'=>$this->TaxpayerITIN, 'TaxpayerForiegnPassportUpload'=>$this->TaxpayerForiegnPassportUpload, 'UploadTaxpayerDL'=>$this->UploadTaxpayerDL,'UploadTaxpayeBirthCert'=>$this->UploadTaxpayeBirthCert,'UploadTaxpayerForiegnId'=>$this->UploadTaxpayerForiegnId,'dl'=>$this->dl,'fId'=>$this->fId,'bc'=>$this->bc];
        Session::put('ITIN-info',$data);

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


        $data = ['StreetAddress'=>$this->StreetAddress, 'City'=>$this->City, 'Country'=>$this->Country, 'ZIPCode'=>$this->ZIPCode, 'TaxPayerPhone'=>$this->TaxPayerPhone,'TaxpayerEmail'=>$this->TaxpayerEmail];
        Session::put('contact-info',$data);

    	$this->currentStep ++;
    	$this->progressUpdate();
    	 $this->emit('IncreamentProgress');
    }

    public function moveToIdVerification(){

        $data = ['accountType'=>$this->accountType, 'accountPhone'=>$this->accountPhone, 'routingNo'=>$this->routingNo];
        Session::put('bank-info',$data);

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
