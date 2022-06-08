<?php

namespace App\Http\Livewire\Income;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Core\GlobalService;

class RentalIncome extends Component
{
    use GlobalService;
	public $currentStep = 1;
    public $propertyField =[1];
    public $i = 1;

    // public $taxYearRange = range(1900, strftime("%Y", time()));


    // variables for step 1 general rental property information
    public $hasRentalProperty;
    public $noOfProperties = [];

    // property details field variables
    public $percentageOwned;
    public $addressOfProperty;
    public $propertyType;
    public $tenantRelationship;
    public $numberOfDaysduringTaxYearRented;
    public $numberOfDaysduringTaxYearPersonal;
    public $propertyManager;
    public $ownersOfProperty;
    public $pricOfLand;
    public $startDateOfPropertyRent;
    public $propertyPurchasePrice;
    public $dateOfPurchase;

    // end of step 1 variables


    // variables for step 2
    public $taxYear =2022;
    public $hasExpenses;
    public $numberOfDocs;
    public $relevantDocs;
    public $incomeExpenseCurrency;
    public $otherExpenses;
    public $grossRentalIncome;
    public $advertisingExpenses;
    public $autoExpenses;
    public $travelExpenses;
    public $cleaningMaintenance;
    public $commissions;
    public $qualifiedMortgageInsurance;
    public $otherInsurance;
    public $legalProfessionalFees;
    public $managementFees;
    public $mortgageInterestqualified;
    public $otherMortgageInterest;
    public $otherInterestPayment;
    public $repairExpenses;
    public $suppliesExpenses;
    public $realEstatetaxes;
    public $otherTaxes;
    public $utilities;
    public $vehicleRental;



    // function to create array to loop through to show more property fields
    public function addPropertyField($i)
    {
        $i++;
        $this->i = $i;
        array_push($this->propertyField, $this->i);
    }

    // function to remove property field
    public function removePropertyField($i)
    {
        if ($i==0) {
            return;
         }
         else{
           array_pop($this->propertyField);
         }
    }

    // go back to previous stage
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

    // submit rental property information and go to income & expenses
    public function submitRentalPropertyInfo()
    {
        // validate all form fields 

        // go to next page income and expenses
        $this->currentStep++;
    }

    // submit income and expenses -> section 2
    public function submitIncomeAndExpenses()
    {

    }

    public function render()
    {
        return view('livewire.income.rental-income');
    }
}
