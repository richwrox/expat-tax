<?php

namespace App\Http\Livewire\ForeignAccounts;

use Livewire\Component;
use App\Core\GlobalService;


class Fbr8938 extends Component
{

    use GlobalService;
	public $currentStep = 1;


    public $isRequiredToFileFBAR;
    public $fBarAccount =[1];
    public $i = 1;

    // bank information variables
    public $nameOfBank;
    public $addressOfBank;
    public $city;
    public $postalCode;
    public $country;

    // account information variables
    public $accountNumber;
    public $accountType;
    public $isNewAccountOpenedInTaxYear; //checkbox
    public $wasClosedDuringTaxYear; //checkbox


    // account balance variables
    public $currencyOfAccount;
    public $highestAccountBalanceDuringYear;
    public $balanceOn31stDecember;


    // Stage 2 Account holder variables
    public $primaryAccountHolder;
    public $ownershipType;
    public $numberOfAccountHolders;


    // additional account holder details variables
    public $nameOfAdditionalAccountHolder;
    public $additionalAccountHolderCountry;


    // Step 3 FATCA Requirements variables
    public $hasAssetValueAboveFilingThreshold;




     // function to create array to loop through to show more account fields
     public function addfBarAccount($i)
     {
         $i++;
         $this->i = $i;
         array_push($this->fBarAccount, $this->i);
     }
 
     // function to remove property field
     public function removefBarAccount($i)
     {
         if ($i==0) {
             return;
          }
          else{
            array_pop($this->fBarAccount);
          }
     }

    public function render()
    {
        return view('livewire.foreign-accounts.fbr8938');
    }


    public function gotoSalesOfProperty()
    {
        return redirect()->route('rental-income');
    }

    // move a step back
    public function prevForm()
    {
        if ($this->currentStep == 1) {
            return;
        }
        else
        {
            $this->currentStep--;
        }
    }


    // move from account info section to account holder section
    public function submitAccountInformation()
    {
        $this->currentStep++;
    }

    // move from account holder details section to 8938 fatca requirements
    public function submitAccountHolderDetails()
    {
        $this->currentStep++;
    }


    public function goto5471ForeignCorp()
    {
        return redirect()->route('five471');
    }

    public function submitFBR8938(){

        $this->currentStep ++;
        $this->progressUpdate();
        return redirect()->route('five471');
    }
}
