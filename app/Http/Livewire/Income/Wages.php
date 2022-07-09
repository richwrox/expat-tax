<?php

namespace App\Http\Livewire\Income;

use Livewire\Component;
use App\Core\GlobalService;
use Livewire\WithFileUploads;
use App\Models\Country;
use App\Models\Wages as WagesModel;
use App\Models\WagesFiles;

class Wages extends Component
{
	use GlobalService;
	public $currentStep=1;
	public $DoyouHaveSalaryIncome,$DoyouHaveW2Forms,$DidYouFileIsraliTax,$WasIncomeReceivedOnTlush;
	public $NumberofFormsToUploadIsraeliTaxReturn,$DidYouReceiveAnyCompensation,$NumberofFormsToUploadDidYouReceiveAnyCompensation,$NumberofFormsToUploadAustralianIncomeTax;
	public $NumberofUploadFilePayFromDec=1;
	public $PayFromDeclip,$NonTaxDistribution,$AmountDistributed,$NumberofEmployers;
	public $UploadFileUKIncomeTax=1;
	public $UploadFileUKPaySlips=1;
	public $NumberofUploadsCanadianForms =1;
	public $T4WageStatements;
	public $NumberofT4WageStatements=1;
	public $NumberofSupportingDocuments = 1;
	public $NumberofWageSatements =1;
	public $P60Forms,$DidYouTerminateYourContract,$EmployedByMoreOneEmployer,$UploadCanadianForms,$UploadSupportingDocuments,$Country;
    public $countries;
    public $NumberofFormsToUpload=1;

    public $w2Forms = [];
    public $IsraleiTaxReturnFiles = [];
    public $Forms106 = [];
    public $UploadFileCompensationForms = [];
    public $UploadFileAustralianIncomeTax = [];
    public $UploadFilePayFromDec = [];

    public function mount()
    {
        $this->countries = Country::get();

    }

    public function render()
    {
        return view('livewire.income.wages');
    }

    public function submitWages(){
    	$validatedData = $this->validate(
            [
                'DoyouHaveSalaryIncome'=>'required',
                'DoyouHaveW2Forms'=>'required',
                'WasIncomeReceivedOnTlush'=>'required',
                'DidYouReceiveAnyCompensation'=>'required',
                'UploadFileAustralianIncomeTax'=>'required',
                'NonTaxDistribution'=>'required',
                'AmountDistributed'=>'required_if:NonTaxDistribution,===,yes',
                'NumberofEmployers'=>'required',
                'P60Forms'=>'required',
                'DidYouTerminateYourContract'=>'required',
                'EmployedByMoreOneEmployer'=>'required'

            ]);


            $wage = WagesModel::where('user_id', UserID())->where('filing_years_id', CurrentFilingYear())->get();
            if($wage){
                $wage->salary_income = $this->DoyouHaveSalaryIncome;
                $wage->w2forms = $this->DoyouHaveW2Forms;
                $wage->wage_country = $this->Country;
                $wage->is_file_isralei_tax_return =$this->DidYouFileIsraliTax;
                $wage->was_income_received_on_tlush =$this->WasIncomeReceivedOnTlush;
                $wage->did_you_receive_any_compensation =$this->DidYouReceiveAnyCompensation;
                $wage->non_tax_distribution =$this->NonTaxDistribution;
                $wage->amount_distributed =$this->AmountDistributed;
                $wage->number_of_employers =$this->NumberofEmployers;
                $wage->employer_name =$this->EmployerName;
                $wage->date_of_employment =$this->DatesofEmployment;
                $wage->save();

                if(!empty($this->w2Forms)){
                    foreach($this->w2Forms as $file){
                        $wage_file = new WagesFiles;
                        $wage_file->user_id = UserID();
                        $wage_file->wages_id = $wage->id;
                        $wage_file->path = $file->store('files');
                        $wage_file->type = 'w2forms';
                        $wage_file->save();
                    }
                }

                if(!empty($this->IsraleiTaxReturnFiles)){
                    foreach($this->IsraleiTaxReturnFiles as $file){
                        $wage_file = new WagesFiles;
                        $wage_file->user_id = UserID();
                        $wage_file->wages_id = $wage->id;
                        $wage_file->path = $file->store('files');
                        $wage_file->type = 'IsraleiTaxReturn';
                        $wage_file->save();
                    }
                }

                if(!empty($this->Forms106)){
                    foreach($this->Forms106 as $file){
                        $wage_file = new WagesFiles;
                        $wage_file->user_id = UserID();
                        $wage_file->wages_id = $wage->id;
                        $wage_file->path = $file->store('files');
                        $wage_file->type = 'Forms106';
                        $wage_file->save();
                    }
                }

                if(!empty($this->UploadFileCompensationForms)){
                    foreach($this->UploadFileCompensationForms as $file){
                        $wage_file = new WagesFiles;
                        $wage_file->user_id = UserID();
                        $wage_file->wages_id = $wage->id;
                        $wage_file->path = $file->store('files');
                        $wage_file->type = 'CompensationForms';
                        $wage_file->save();
                    }
                }

                if(!empty($this->UploadFileAustralianIncomeTax)){
                    foreach($this->UploadFileAustralianIncomeTax as $file){
                        $wage_file = new WagesFiles;
                        $wage_file->user_id = UserID();
                        $wage_file->wages_id = $wage->id;
                        $wage_file->path = $file->store('files');
                        $wage_file->type = 'AustralianIncomeTax';
                        $wage_file->save();
                    }
                }
                if(!empty($this->UploadFilePayFromDec)){
                    foreach($this->UploadFilePayFromDec as $file){
                        $wage_file = new WagesFiles;
                        $wage_file->user_id = UserID();
                        $wage_file->wages_id = $wage->id;
                        $wage_file->path = $file->store('files');
                        $wage_file->type = 'PaySlipFromDec';
                        $wage_file->save();
                    }
                }

            }

    	// $this->progressUpdate();
     //    $this->emit('IncreamentProgress');
    }
}
