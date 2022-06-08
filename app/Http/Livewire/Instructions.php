<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Instructions extends Component
{
	public $selectedYear='...';
	public $requestType;
	

	protected $listeners = ['selectYear','setTaxYear'];

    public function render()
    {
    	$years = range(2018, date('Y'));
    	
        return view('livewire.instructions',['years'=>$years]);
    }

    public function selectYear($year){
    	$this->requestType = $year;
    }

    public function setTaxYear($year){
        $this->selectedYear = $year;
    }
}
