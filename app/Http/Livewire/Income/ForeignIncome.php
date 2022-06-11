<?php

namespace App\Http\Livewire\Income;

use Livewire\Component;
<<<<<<< HEAD
use App\Core\GlobalService;


class ForeignIncome extends Component
{
    use GlobalService;
	public $currentStep = 1;

    public $inputs = [];
    public $i = 1;

	public $employerName,$employerAddress,$isACitizenOfWhatCountry,
    $DidYouMaintainASeparateForeignResidence, $CityOfSeparateForeignResidence,$CountryOfSeparateForeignResidence, $NumberOfDaysForSeparateForeignResidence,
    $CountryOfResidence, $WhenDidYouMoveToCountryOfResidence, $DateResidenceEnded,
    $StatementApplicableToYouRegardingLivingQuarters, $DidAnyFamilyLiveWithYouAbroad, $RelativeName, $RelativeStayPeriod,
    $HaveYouSubmittedAStatmentToAuthorities, $AreYouRequiredToPayIncomeTaxToForeignCountry,
    $WereYouPresentInUSDuringTaxYear, $DateOfArrivalInUS, $DateLeftUS, $NumberOfDaysInTheUSOnBusiness, $IncomeEarnedInUS,
    $AnyContracturalTerms,$UnderWhatTypeOfVisaDidYouEnterTheForeignCountry, $DidYourVisaLimitLengthOfStay,$InWhatWayDidYourVisaLimitLengthOfStay,$DidYouMaintainAHomeInUS, $AddressOfHomeInUS, $NameOfOccupantsOfHomeInUS,$RelationshipWithOccupants;

    // spouse
    public $SpouseEmployerName,$SpouseEmployerAddress,$SpouseIsACitizenOfWhatCountry,
    $SpouseDidYouMaintainASeparateForeignResidence, $SpouseCityOfSeparateForeignResidence,$SpouseCountryOfSeparateForeignResidence, $SpouseNumberOfDaysForSeparateForeignResidence,
    $SpouseCountryOfResidence, $SpouseWhenDidYouMoveToCountryOfResidence, $SpouseDateResidenceEnded,
    $SpouseStatementApplicableToYouRegardingLivingQuarters, $SpouseDidAnyFamilyLiveWithYouAbroad, $SpouseRelativeName, $SpouseRelativeStayPeriod,
    $SpouseHaveYouSubmittedAStatmentToAuthorities, $SpouseAreYouRequiredToPayIncomeTaxToForeignCountry,
    $SpouseWereYouPresentInUSDuringTaxYear, $SpouseDateOfArrivalInUS, $SpouseDateLeftUS, $SpouseNumberOfDaysInTheUSOnBusiness, $SpouseIncomeEarnedInUS,
    $SpouseAnyContracturalTerms,$SpouseUnderWhatTypeOfVisaDidYouEnterTheForeignCountry, $SpouseDidYourVisaLimitLengthOfStay,$SpouseInWhatWayDidYourVisaLimitLengthOfStay,$SpouseDidYouMaintainAHomeInUS, $SpouseAddressOfHomeInUS, $SpouseNameOfOccupantsOfHomeInUS,$SpouseRelationshipWithOccupants;


    // Foreign Housing Exclusion
    public $Rent,$HouseholdRepairs,$Utilities,$RealPropertyInsurance,$OccupancyTax,$NonRefundableSecurityDeposit,
    $FurnitureRental,$ResidentialParking;

=======

class ForeignIncome extends Component
{
	public $currentStep = 1;
	public $SeparateForeignResidence,$SecondCityAndCountry,$CountryofResidence,$DateMoved,$HadFamilyMember,$SubmittedStatement,$RequiredToPayTaxToResidentCountry,$PresentInUS,$DateofArrival,$NumberofBusinessDaysInUS,$IncomeEarnedUS,$Contract,$TypeofVisa,$DidYouMaintainHome,$VisaLimitation;

	public $SpouseNameofEmployer,$SpouseAddressofEmployer,$SpouseSeparateForeignAddress,$CountryofResidenceDuringYear,$SpouseResidentCountry,$DateMovedToCountryOfResidence,$DateMovedFromResidenceCountry,$DidFamilyLiveWithYou,$LivingQuarters,$NameOfRelative,$LivedInStartDate,$SubmittedAuthorizedStatement,$WereYouprenstInUS,$RequiredToPayIncomeTax,$DateArrivedInUS,$DateLeftInUS,$NumberofDaysInUS,$TNC,$InWhatWay,$VisaLimit,$OccupantsAddress,$SpouseDidYouMaintainHome;

    public $Rent,$HouseholdRepairs,$Utilities,$RealProperty,$OccupancyTaxes,$Nonrefundable,$FurnitureRental,$ResidentialParking;
>>>>>>> master

    public function render()
    {
        return view('livewire.income.foreign-income');
    }


<<<<<<< HEAD
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

    public function prevForm()
    {
        $this->currentStep--;
    }

    public function submitTaxPayer(){
        $validatedData = $this->validate([
            'employerName' => 'required',
            'employerAddress' => 'required',
            'isACitizenOfWhatCountry' => 'required',
           'DidYouMaintainASeparateForeignResidence'=>'required',
           'CountryOfSeparateForeignResidence'=>'required_if:DidYouMaintainASeparateForeignResidence,==,yes',
           'CityOfSeparateForeignResidence'=>'required_if:DidYouMaintainASeparateForeignResidence,==,yes',
           'NumberOfDaysForSeparateForeignResidence'=>'required_if:DidYouMaintainASeparateForeignResidence,==,yes',
           'CountryOfResidence'=>'required_if:DidYouMaintainASeparateForeignResidence,==,yes',
           'WhenDidYouMoveToCountryOfResidence'=>'required_if:DidYouMaintainASeparateForeignResidence,==,yes',
           'DidAnyFamilyLiveWithYouAbroad'=>'required',
           'RelativeName'=>'required_if:DidAnyFamilyLiveWithYouAbroad,==,yes',
           'RelativeStayPeriod'=>'required_if:DidAnyFamilyLiveWithYouAbroad,==,yes',
           'HaveYouSubmittedAStatmentToAuthorities'=>'required',
           'AreYouRequiredToPayIncomeTaxToForeignCountry'=>'required_if:HaveYouSubmittedAStatmentToAuthorities,==,yes',
           'WereYouPresentInUSDuringTaxYear'=>'required',
           'DateOfArrivalInUS'=>'required_if:WereYouPresentInUSDuringTaxYear,==,yes',
           'DateLeftUS'=>'required_if:WereYouPresentInUSDuringTaxYear,==,yes',
           'NumberOfDaysInTheUSOnBusiness'=>'required_if:WereYouPresentInUSDuringTaxYear,==,yes',
           'IncomeEarnedInUS'=>'required_if:WereYouPresentInUSDuringTaxYear,==,yes',
           ],

           [

           ]

       );

       $this->currentStep ++;
       $this->progressUpdate();
       $this->emit('IncreamentProgress');

   }




public function submitSpouse(){
    $validatedData = $this->validate([
        'SpouseEmployerName' => 'required',
        'SpouseEmployerAddress' => 'required',
        'SpouseIsACitizenOfWhatCountry' => 'required',
        'SpouseDidYouMaintainASeparateForeignResidence'=>'required',
        'SpouseCountryOfSeparateForeignResidence'=>'required_if:SpouseDidYouMaintainASeparateForeignResidence,==,yes',
        'SpouseCityOfSeparateForeignResidence'=>'required_if:SpouseDidYouMaintainASeparateForeignResidence,==,yes',
        'SpouseNumberOfDaysForSeparateForeignResidence'=>'required_if:SpouseDidYouMaintainASeparateForeignResidence,==,yes',
        'SpouseCountryOfResidence'=>'required_if:SpouseDidYouMaintainASeparateForeignResidence,==,yes',
        'SpouseWhenDidYouMoveToCountryOfResidence'=>'required_if:SpouseDidYouMaintainASeparateForeignResidence,==,yes',
        'SpouseDidAnyFamilyLiveWithYouAbroad'=>'required',
        'SpouseRelativeName'=>'required_if:SpouseDidAnyFamilyLiveWithYouAbroad,==,yes',
        'SpouseRelativeStayPeriod'=>'required_if:SpouseDidAnyFamilyLiveWithYouAbroad,==,yes',
        'SpouseHaveYouSubmittedAStatmentToAuthorities'=>'required',
        'SpouseAreYouRequiredToPayIncomeTaxToForeignCountry'=>'required_if:SpouseHaveYouSubmittedAStatmentToAuthorities,==,yes',
        'SpouseWereYouPresentInUSDuringTaxYear'=>'required',
        'SpouseDateOfArrivalInUS'=>'required_if:SpouseWereYouPresentInUSDuringTaxYear,==,yes',
        'SpouseDateLeftUS'=>'required_if:SpouseWereYouPresentInUSDuringTaxYear,==,yes',
        'SpouseNumberOfDaysInTheUSOnBusiness'=>'required_if:SpouseWereYouPresentInUSDuringTaxYear,==,yes',
        'SpouseIncomeEarnedInUS'=>'required_if:SpouseWereYouPresentInUSDuringTaxYear,==,yes',
        ],

       [

       ]

   );


   $this->currentStep ++;
   $this->progressUpdate();
   $this->emit('IncreamentProgress');

}


public function submitForeignHousing(){


    $this->currentStep ++;
    $this->progressUpdate();
    $this->emit('IncreamentProgress');

    return redirect()->route('business-income');
 }

=======
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
>>>>>>> master
}
