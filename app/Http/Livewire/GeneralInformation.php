<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Core\GlobalService;
use Livewire\WithFileUploads;
class GeneralInformation extends Component
{
    use GlobalService;use WithFileUploads;

  

	public $hasIPPIN = 'no';
	public $addIPPIN;
    public $currentStep=1;
    public $currentView ='general-question';
    public $CorporateOrPartnerTax,$ReturningClient,$SupportingDocument,$NumberofFilesUploded,$UploadPreviosUSTax,$FiledExtention,$SpecifyExtendedDate,$ClaimedasDependent,$StreamLinedFile;
    public $AmendedReturns='';
    public $NonWillfulWording;
    public $NumberofFormsToUpload =0;
    public $FiledPreviousUSTax,$ImmigrationDate,$LivingInUS,$IPPIN,$ProvidePIN,$CantFindPIN;



	protected $listeners = ['SetPINStatus','ToggleAmendedReturns','back'];

    public function render()
    {
        return view('livewire.general-information');
    }

    public function SetPINStatus($status){
   
    	$this->addIPPIN = ($status == 'yes') ? 'yes':'no';
    }

    public function submitSectionOne(){
         $validatedData = $this->validate(['CorporateOrPartnerTax' => 'required',
            'AmendedReturns'=>'required',
            'ReturningClient'=>'required','FiledExtention'=>'required_if:ReturningClient,===,no',
            'ClaimedasDependent'=>'required',
            //'SpecifyExtendedDate'=>'required_if:FiledExtention,===,yes',
            //'SupportingDocument'=>'required_if:AmendedReturns,===,yes',
            'UploadPreviosUSTax'=>'required_if:FiledPreviousUSTax,===,yes'
            ],

            [
                'CorporateOrPartnerTax.required'=>'Select an option'
            ]

        );

        $this->currentStep ++;
        $this->progressUpdate();
        $this->emit('IncreamentProgress');

    }

    public function submitGeneralQuestion(){
        $validatedData = $this->validate(
            [
                'LivingInUS'=>'required',
                'IPPIN'=>'required',
                'ProvidePIN'=>'required_if:IPPIN,===,yes'
                //'NonWillfulWording'=>'required_if:StreamLinedFile,===,yes'

            ]);

        $this->currentStep ++;
        $this->progressUpdate();
        $this->emit('IncreamentProgress');

        return redirect()->to('/personal-information');
    }

    public function back($step){
       
         $this->currentStep --;
         $progress = \Session::get('progress') - 2;
         \Session::put('progress',$progress);
         $this->emit('IncreamentProgress');
    }

    

    public function submitStreamline(){
       
        $validatedData = $this->validate(
            [
                'StreamLinedFile'=>'required',
                'NonWillfulWording'=>'required_if:StreamLinedFile,===,yes'

            ]);

        $this->currentStep ++;
        $this->progressUpdate();
        $this->emit('IncreamentProgress');
    }




    public function ToggleAmendedReturns($status){
        $this->AmendedReturns = $status;
    }
}
