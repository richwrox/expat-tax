<?php

namespace App\Http\Livewire\Income;

use Livewire\Component;
use App\Core\GlobalService;


class PassiveIncome extends Component
{
    use GlobalService;
	public $currentStep = 1;

    public $inputs = [];
    public $i = 1;


    public $Have1099Forms, $NumberofFormsToUploadFor1099, $DocumentFor1099=[];
    public $HaveInterest, $NumberofFormsToUploadForInterest, $DocumentForInterest=[];
    public $HaveDividends, $NumberofFormsToUploadForDividends, $DocumentForDividends=[];
    public $HaveCapitalGains, $NumberofFormsToUploadForCapitalGains, $DocumentForCapitalGains=[];
    public $HaveRoyalties, $NumberofFormsToUploadForRoyalties, $DocumentForRoyalties=[];
    public $HavePensionPayments, $NumberofFormsToUploadForPensionPayments, $DocumentForPensionPayments=[];
    public $HaveSocialSecurity, $NumberofFormsToUploadForSocialSecurity, $DocumentForSocialSecurity=[];
    public $HaveK1s, $NumberofFormsToUploadForK1s, $DocumentForK1s=[];
    public $Have1042S, $NumberofFormsToUploadFor1042S, $DocumentFor1042S=[];
    public $HaveCryptoCurrency;
    public $HaveOthers, $NumberofFormsToUploadForOthers, $DocumentForOthers=[];
    public $CryptoCost, $DateCryptoAcquired, $DateCryptoSold,$Proceeds,$TransactionDate,$TransactionValue,$ValueIsAlsoIncome,$Expenses=[];



    public function render()
    {
        return view('livewire.income.passive-income');
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

    public function prevForm()
    {
        $this->currentStep--;
    }


    public function submitPassiveIncome(){
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
}
