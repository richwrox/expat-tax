<?php

namespace App\Http\Livewire\Income;

use Livewire\Component;

class ForeignIncome extends Component
{
	public $currentStep = 1;
	public $SeparateForeignResidence,$SecondCityAndCountry,$CountryofResidence,$DateMoved,$HadFamilyMember,$SubmittedStatement,$RequiredToPayTaxToResidentCountry,$PresentInUS,$DateofArrival,$NumberofBusinessDaysInUS,$IncomeEarnedUS,$Contract,$TypeofVisa,$DidYouMaintainHome,$VisaLimitation;

	public $SpouseNameofEmployer,$SpouseAddressofEmployer,$SpouseSeparateForeignAddress,$CountryofResidenceDuringYear,$SpouseResidentCountry,$DateMovedToCountryOfResidence,$DateMovedFromResidenceCountry,$DidFamilyLiveWithYou,$LivingQuarters,$NameOfRelative,$LivedInStartDate,$SubmittedAuthorizedStatement,$WereYouprenstInUS,$RequiredToPayIncomeTax,$DateArrivedInUS,$DateLeftInUS,$NumberofDaysInUS,$TNC,$InWhatWay,$VisaLimit,$OccupantsAddress,$SpouseDidYouMaintainHome;

    public $Rent,$HouseholdRepairs,$Utilities,$RealProperty,$OccupancyTaxes,$Nonrefundable,$FurnitureRental,$ResidentialParking;

    public function render()
    {
        return view('livewire.income.foreign-income');
    }


    public function submitTaxperDetails(){
    	$this->currentStep ++;
    }

    public function submitSpouseDetails()
    {
        $this->currentStep ++;
    }

    public function submitForeignHousingDetails()
    {
        $this->currentStep ++;
    }

    public function back()
    {

    }
}
