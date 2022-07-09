<?php

namespace App\Http\Livewire\Generalinfo;

use App\Models\BankInformation;
use App\Models\Contact;
use App\Models\Dependent;
use App\Models\ItinInformation;
use App\Models\PersonalInformation as ModelsPersonalInformation;
use App\Models\SpouseItin;
use App\Models\SpousePersonals;
use App\Models\User;
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
    public $uploadedSpouseSSN, $uploadedSSNCard,$uploadedSpousePassport, $uploadedPassport, $UploadedDL,  $UploadedBirthCert, $UploadedForeignId, $UploadedSpouseDL,$UploadedSpouseBirthCert,$UploadedSpouseForiegnId;
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
        $personals = ModelsPersonalInformation::where('user_id', UserID())->first();
        if($personals){
            $this->firstName = $personals->first_name;
            $this->lastName = $personals->last_name;
            $this->middleName = $personals->middle_name;
            $this->TaxpayerDOB = $personals->birth_date;
            $this->occupation = $personals->occupation;
            $this->AreYouUSCitizen = $personals->us_citizen;
            $this->SSN = $personals->ssn;
            $this->uploadedSSNCard = $personals->ss_card;
        }


        $Itin = ItinInformation::where('user_id', UserID())->first();
        if($Itin){
             $this->DoYouHaveITIN = $Itin->itin;
             $this->TaxpayerITIN = $Itin->itin_number;
             $this->WantToApplyForITINTaxpayer = $Itin->apply_itin;
             $this->uploadedPassport = $Itin->passport;
            $this->AreYouFilingNonResidentTax = $Itin->non_resident_tax;

            if(!empty($Itin->driver_license)){
                $this->UploadTaxpayerDL = true;
                $this->UploadedDL = $Itin->driver_license;
            }
            if(!empty($Itin->birth_cert)){
                $this->UploadTaxpayeBirthCert = true;
                $this->UploadedBirthCert = $Itin->birth_cert;
            }
            if(!empty($Itin->foreign_id)){
                $this->UploadTaxpayerForiegnId = true;
                $this->UploadedForeignId = $Itin->foreign_id;
            }
        }


        $SpousePersonals = SpousePersonals::where('user_id', UserID())->first();
        if($SpousePersonals){
            $this->SpouseFirstName = $SpousePersonals->first_name;
            $this->SpouseMiddleName = $SpousePersonals->middle_name;
            $this->SpouseLastName = $SpousePersonals->last_name;
            $this->spouseDOB = $SpousePersonals->birth_date;
            $this->SpouseOccupation = $SpousePersonals->occupation;
            $this->isSpouseUSCitizen = $SpousePersonals->us_citizen;
            $this->spouseSSN = $SpousePersonals->ssn;
            $this->uploadedSpouseSSN = $SpousePersonals->ss_card;
        }

        $SpouseItin = SpouseItin::where('user_id', UserID())->first();
        if($SpouseItin){
             $this->DoesSpouseHaveITN = $SpouseItin->itin;
             $this->SpouseITIN = $SpouseItin->itin_number;
             $this->SpouseWantToApplyForITIN = $SpouseItin->apply_itin;
             $this->uploadedSpousePassport = $SpouseItin->passport;

            if(!empty($SpouseItin->driver_license)){
                $this->UploadSpouseDL = true;
                $this->UploadedSpouseDL = $SpouseItin->driver_license;
            }
            if(!empty($SpouseItin->birth_cert)){
                $this->UploadSpouseBirthCert = true;
                $this->UploadedSpouseBirthCert = $SpouseItin->birth_cert;
            }
            if(!empty($SpouseItin->foreign_id)){
                $this->UploadSpouseForiegnId = true;
                $this->UploadedSpouseForiegnId = $SpouseItin->foreign_id;
            }


            $this->NonResidentSpouse = $SpouseItin->non_resident_tax;


        }


        $Dependent = Dependent::where('user_id', UserID())->first();
        if($Dependent){
            $this->dependentFirstName = $Dependent->first_name;
            $this->dependentMiddleName = $Dependent->middle_name;
            $this->dependentLastName = $Dependent->last_name;
            $this->dependentSSN = $Dependent->ssn;
            $this->dependentSSNDate = $Dependent->ssn_date;
            $this->dependentdod = $Dependent->birth_date;
            $this->dependentTaxpayerRelationship =$Dependent->relationship;
            $this->IsChildNaturalised = $Dependent->naturalized;
        }

        $contact = Contact::where('user_id', UserID())->first();
        if($contact){
            $this->StreetAddress = $contact->street_address;
            $this->City = $contact->city;
            $this->Country = $contact->country;
            $this->ZIPCode = $contact->zipcode;
            $this->TaxPayerPhone =$contact->phone;
            $this->TaxpayerEmail = $contact->email;
        }

        $BankInfo = BankInformation::where('user_id', UserID())->first();
        if($BankInfo){
            $this->accountType = $BankInfo->account_type;
            $this->accountPhone = $BankInfo->account_number;
            $this->routingNo = $BankInfo->routing_number;
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
        // dd('here');

    	$validatedData = $this->validate([
            'firstName' => 'required',
            'lastName' => 'required',
            'TaxpayerDOB'=>'required',
            'occupation'=>'required',
            'AreYouUSCitizen'=>'required',
            'SSN'=>'required_if:AreYouUSCitizen,===,yes',

        ],
        []);

        $user = ModelsPersonalInformation::where('user_id', UserID())->first();
        if($user){
            $user->first_name = $this->firstName;
            $user->last_name = $this->lastName;
            $user->middle_name = $this->middleName;
            $user->birth_date = $this->TaxpayerDOB;
            $user->occupation = $this->occupation;
            $user->us_citizen = $this->AreYouUSCitizen;
            $user->ssn = $this->SSN;
            if(!empty($this->SSNFile)){
                $user->ss_card = $this->SSNFile->store('files');
            }
            $user->save();
            return $this->currentStep++;
        }

        $info = new ModelsPersonalInformation;
        $info->user_id = UserID();
        $info->first_name = $this->firstName;
        $info->last_name = $this->lastName;
        $info->middle_name = $this->middleName;
        $info->birth_date = $this->TaxpayerDOB;
        $info->occupation = $this->occupation;
        $info->us_citizen = $this->AreYouUSCitizen;
        $info->ssn = $this->SSN;
        if(!empty($this->SSNFile)){
            $info->ss_card = $this->SSNFile->store('files');
            // $this->SSNFile->store('files', 'public');
        }

        $info->save();

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


        $user = SpousePersonals::where('user_id', UserID())->first();
        if($user){
            $user->user_id = UserID();
            $user->first_name = $this->SpouseFirstName;
            $user->last_name = $this->SpouseLastName;
            $user->middle_name = $this->SpouseMiddleName;
            $user->birth_date = $this->spouseDOB;
            $user->occupation = $this->SpouseOccupation;
            $user->us_citizen = $this->isSpouseUSCitizen;
            $user->ssn = $this->spouseSSN;
            if(!empty($this->SpouseSSNCardUpload)){
                $user->ss_card = $this->SpouseSSNCardUpload->store('files');
            }

            $user->save();
            return $this->currentStep = $switch;
        }

        $info = new SpousePersonals;
        $info->user_id = UserID();
        $info->first_name = $this->SpouseFirstName;
        $info->last_name = $this->SpouseLastName;
        $info->middle_name = $this->SpouseMiddleName;
        $info->birth_date = $this->spouseDOB;
        $info->occupation = $this->SpouseOccupation;
        $info->us_citizen = $this->isSpouseUSCitizen;
        $info->ssn = $this->spouseSSN;
        if(!empty($this->SpouseSSNCardUpload)){
            $info->ss_card = $this->SpouseSSNCardUpload->store('files');
        }

        $info->save();

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
            // 'SpouseFID'=>'required_if:UploadSpouseForiegnId,===,true',
            // 'SpouseBC'=>'required_if:UploadSpouseBirthCert,===,true',
            // 'SpouseDL'=>'required_if:UploadSpouseForiegnId,===,true',
        ],
        []);

        $user = SpouseItin::where('user_id', UserID())->first();
        if($user){
            $user->itin = $this->DoesSpouseHaveITN;
            $user->itin_number = $this->SpouseITIN;
            $user->apply_itin = $this->SpouseWantToApplyForITIN;

            if(!empty($this->SpousePassport)){
                $user->passport = $this->SpousePassport->store('files');
            }

            if(!empty($this->SpouseDL)){
                $user->driver_license = $this->SpouseDL->store('files');
            }
            if(!empty($this->SpouseBC)){
                $user->birth_cert = $this->SpouseBC->store('files');
            }

            if(!empty($this->SpouseFID)){
                $user->foreign_id = $this->SpouseFID->store('files');
            }
            $user->non_resident_tax = $this->NonResidentSpouse;
            $user->save();
    	    return $this->currentStep++;
        }

        $info = new SpouseItin;
        $info->user_id = UserID();
        $info->itin = $this->DoesSpouseHaveITN;
        $info->itin_number = $this->SpouseITIN;
        $info->apply_itin = $this->SpouseWantToApplyForITIN;

        if(!empty($this->SpousePassport)){
            $info->passport = $this->SpousePassport->store('files');
        }

        if(!empty($this->SpouseDL)){
            $info->driver_license = $this->SpouseDL->store('files');
        }
        if(!empty($this->SpouseBC)){
            $info->birth_cert = $this->SpouseBC->store('files');
        }

        if(!empty($this->SpouseFID)){
            $info->foreign_id = $this->SpouseFID->store('files');
        }

        $info->non_resident_tax = $this->NonResidentSpouse;


        $info->save();

    	$this->currentStep ++;


        $data = ['DoesSpouseHaveITN'=>$this->DoesSpouseHaveITN, 'SpouseITIN'=>$this->SpouseITIN, 'SpouseWantToApplyForITIN'=>$this->SpouseWantToApplyForITIN, 'SpousePassport'=>$this->SpousePassport, 'UploadSpouseDL'=>$this->UploadSpouseDL,'UploadSpouseBirthCert'=>$this->UploadSpouseBirthCert,'UploadSpouseForiegnId'=>$this->UploadSpouseForiegnId,'SpouseDL'=>$this->SpouseDL,'SpouseBC'=>$this->SpouseBC,'SpouseFID'=>$this->SpouseFID,'NonResidentSpouse'=>$this->NonResidentSpouse];
        Session::put('spouse-ITIN',$data);
    	//Check if form is not empty
    	$this->progressUpdate();
    	$this->emit('IncreamentProgress');
    	//return redirect()->to('/id-verification');

    }




    public function submitDependentInfo(){

        $user = Dependent::where('user_id', UserID())->first();
        if($user){
    	    $user->first_name = $this->dependentFirstName;
            $user->last_name = $this->dependentLastName;
            $user->middle_name = $this->dependentMiddleName;
            $user->birth_date = $this->dependentdod;
            $user->relationship = $this->dependentTaxpayerRelationship;
            $user->naturalized = $this->IsChildNaturalised;
            $user->ssn = $this->dependentSSN;
            $user->ssn_date = $this->dependentSSNDate;
            $user->save();

            return $this->currentStep ++;
        }

        $info = new Dependent;
        $info->user_id = UserID();
        $info->first_name = $this->dependentFirstName;
        $info->last_name = $this->dependentLastName;
        $info->middle_name = $this->dependentMiddleName;
        $info->birth_date = $this->dependentdod;
        $info->relationship = $this->dependentTaxpayerRelationship;
        $info->naturalized = $this->IsChildNaturalised;
        $info->ssn = $this->dependentSSN;
        $info->ssn_date = $this->dependentSSNDate;


        $info->save();


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
        // $validatedData = $this->validate([
        //     // 'TaxpayerForiegnPassportUpload'=>'required_if:WantToApplyForITINTaxpayer,===,yes',
        //     // 'dl'=>'required_if:UploadTaxpayerDL,===,true',
        //     // 'fId'=>'required_if:UploadTaxpayerDL,===,true',
        //     // 'bc'=>'required_if:UploadTaxpayerDL,===,true'
        // ],
        // []);


        $user = ItinInformation::where('user_id', UserID())->first();
        if($user){
            $user->itin = $this->DoYouHaveITIN;
            $user->itin_number = $this->TaxpayerITIN;
            $user->apply_itin = $this->WantToApplyForITINTaxpayer;
            $user->passport = $this->TaxpayerForiegnPassportUpload;

            if(!empty($this->TaxpayerForiegnPassportUpload)){
                $user->passport = $this->TaxpayerForiegnPassportUpload->store('files');
            }

            if(!empty($this->dl)){
                $user->driver_license = $this->dl->store('files');
            }
            if(!empty($this->bc)){
                $user->birth_cert = $this->bc->store('files');
            }

            if(!empty($this->fId)){
                $user->foreign_id = $this->fId->store('files');
            }

            $user->non_resident_tax = $this->AreYouFilingNonResidentTax;


            $user->save();

    	    return $this->currentStep =3;
        }

        $info = new ItinInformation;
        $info->user_id = UserID();
        $info->itin = $this->DoYouHaveITIN;
        $info->itin_number = $this->TaxpayerITIN;
        $info->apply_itin = $this->WantToApplyForITINTaxpayer;
        $info->passport = $this->TaxpayerForiegnPassportUpload;

        if(!empty($this->TaxpayerForiegnPassportUpload)){
            $info->passport = $this->TaxpayerForiegnPassportUpload->store('files');
        }

        if(!empty($this->dl)){
            $info->driver_license = $this->dl->store('files');
        }
        if(!empty($this->bc)){
            $info->birth_cert = $this->bc->store('files');
        }

        if(!empty($this->fId)){
            $info->foreign_id = $this->fId->store('files');
        }

        $info->non_resident_tax = $this->AreYouFilingNonResidentTax;


        $info->save();


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

        $user = Contact::where('user_id', UserID())->first();
        if($user){
            $user->street_address = $this->StreetAddress;
            $user->city = $this->City;
            $user->country = $this->Country;
            $user->zipcode = $this->ZIPCode;
            $user->phone = $this->TaxPayerPhone;
            $user->email = $this->TaxpayerEmail;

            $user->save();
            return $this->currentStep++;
        }

        $info = new Contact;
        $info->user_id = UserID();
        $info->street_address = $this->StreetAddress;
        $info->city = $this->City;
        $info->country = $this->Country;
        $info->zipcode = $this->ZIPCode;
        $info->phone = $this->TaxPayerPhone;
        $info->email = $this->TaxpayerEmail;

        $info->save();



        $data = ['StreetAddress'=>$this->StreetAddress, 'City'=>$this->City, 'Country'=>$this->Country, 'ZIPCode'=>$this->ZIPCode, 'TaxPayerPhone'=>$this->TaxPayerPhone,'TaxpayerEmail'=>$this->TaxpayerEmail];
        Session::put('contact-info',$data);

    	$this->currentStep ++;
    	$this->progressUpdate();
    	 $this->emit('IncreamentProgress');
    }

    public function moveToIdVerification(){
        $user = BankInformation::where('user_id', UserID())->first();
        if($user){
            $user->account_type = $this->accountType;
            $user->account_number = $this->accountPhone;
            $user->routing_number = $this->routingNo;
            $user->save();

            return redirect()->to('/id-verification');
        }

        $info = new BankInformation;
        $info->user_id = UserID();
        $info->account_type = $this->accountType;
        $info->account_number = $this->accountPhone;
        $info->routing_number = $this->routingNo;

        $info->save();

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
