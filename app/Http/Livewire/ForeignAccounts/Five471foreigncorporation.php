<?php

namespace App\Http\Livewire\ForeignAccounts;

use Livewire\Component;
use App\Core\GlobalService;


class Five471foreigncorporation extends Component
{
    use GlobalService;
    public $currentStep = 1;
    public $companyField =[1];
    public $i = 1;
    public $stakeholderfieldId = 1;
    public $inputs = [];
    public $shareHolderInput = [];

    public $isDirector;
    public $countryOfResidence;
    public $hasBranchAgentInUs;


     // function to create array to loop through to show more Company fields
     public function addCompanyField($i)
     {
         $i++;
         $this->i = $i;
         array_push($this->companyField, $this->i);
     }
 
     // function to remove Company field
     public function removeCompanyField($i)
     {
         if ($i==0) {
             return;
          }
          else{
            array_pop($this->companyField);
          }
     }

     public function addInput($i)
    {
        $i = $i + 1;
        $this->i = $i;
        array_push($this->inputs ,$i);
    }

    public function removeInput($i)
    {
        array_pop($this->inputs);
    }


    public function addShareholderInput($stakeholderfieldId)
    {
        $stakeholderfieldId = $stakeholderfieldId + 1;
        $this->stakeholderfieldId = $stakeholderfieldId;
        array_push($this->shareHolderInput ,$stakeholderfieldId);
    }


    public function removeShareholderInput()
    {
        array_pop($this->shareHolderInput);
    }




    public function render()
    {
        return view('livewire.foreign-accounts.five471foreigncorporation');
    }
    
}
