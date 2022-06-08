<?php

namespace App\Http\Livewire\Income;

use Livewire\Component;

class BusinessIncome extends Component
{
	public $currentStep = 1;
	public $EmployedInIsreal,$SelfEmployed,$NameOfBusiness,$AddressOfBusiness,$PrincipleBusinessActivity,
	$BusinessOperator,$BusinessStartDate,$DidYouEmployeeWorkers,$FileAllRequiredForm,$NECForm,$UploadNEC,$WasIncomeFromNECYes;
	public $GenBusinessName,$GenBusinessAddress,$GenPrincipleBusiness,$GenBusinessOperator,$GenBusinessStartDate,$GenDidYouEmployeeOtherWorker,$GenWillFileForms;

	public $TaxYear,$GrossReceipt,$Currency,$DoYouHaveExpense,$CommissionsFees,$ContractLabor,$CostOfGoods,$Depletion,$EmployeeBenefits,$EmployeeBenefitPrograms,$SelfEmployedHealthInsurance,$MortgageInterest,$OtherInterestPayments,$LegalServices,$OfficeExpenses,$PensionProfitSharing,$RentLeaseVehicles,$RentLeaseMachineryEquipment,$RentLeaseOtherItems,$RepairsMaintenance,$Supplies,$Travel,$Meals,$Utilities,$WagesExpense,$OtherExpenses;

	public $DoyouHaveCostOfGoodsSold,$InventoryMethod,$ChangeInQuantity,$InitialInventory,$AmountSpent,$CostOfWithDrawal,$CostOfLabor,$AmountOnMaterials,$Cost,$YearEndInventory;

	public $NumberOfDochRevachForms = 1;
	public $NumberofNECForms = 1;

    public function render()
    {
        return view('livewire.income.business-income');
    }


    public function submitBusinessIncome(){
    	// $validatedData = $this->validate([
     //        'NECForm'=>'required',
     //        //'ReturningClient'=>'required','FiledExtention'=>'required_if:ReturningClient,===,no',
     //        //'UploadPreviosUSTax'=>'required_if:FiledPreviousUSTax,===,yes'
     //        ],
     //    );
    	$this->currentStep ++;
    }


    public function submitIncomeExpense()
    {
    	$this->currentStep ++;
    }

    public function submitCostOfGoods()
    {
    	
    }

    public function back()
    {
    	$this->currentStep --;
    }
}
