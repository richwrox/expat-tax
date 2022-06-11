<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Session;
use Livewire\Component;

class Instructions extends Component
{
	public $selectedYear;
	public $requestType;
    public $setTaxYear;
    public $multipleSelectedYear = [];
    public $CurrentTaxFilingYear;
    public $completedYears;
    public $filingMode;
	


	protected $listeners = ['selectYear','setTaxYear', 'multipleSelectedYear'];

    public function render()
    {
    	$years = range(2018, date('Y'));
    	//\Session::pull('instructions');
        return view('livewire.instructions',['years'=>$years]);
    }

    public function selectYear($data)
    {
    	$this->requestType = $data;
        \Session::put('filingMode',$data);
    }

    public function multipleSelectedYear($year)
    {
    	$this->requestType = $year;
    }

    public function setTaxYear($year)
    {
        $this->selectedYear = $year;
    }


    public function post(){
        if(session()->has('instructions')){
            return redirect()->to('/general-questions');
        }
        $validatedData = $this->validate([
            'selectedYear' => 'required_if:requestType,==,single',
             'requestType' => 'required',
             'multipleSelectedYear' => 'required_if:requestType,==,multiple',
            ],
            [
                'selectedYear.required'=>'Which year would you like to file'
            ]
         );
        // $rules    = ['selectedYear'=>'required','lastName'=>'required','email'=>'required','gender'=>'required','phone'=>'required'];
        // $messages = ['firstName' => 'Firstname is missing',
        // 'lastName'=>'Lastname is missing',
        // 'email.email' =>'Invalid email address',];
        // $this->validate($rules,$messages);

        // dd($this->multipleSelectedYear);
        if($this->requestType == 'single'){
            // dd($this->selectedYear);
            $data= ['selectedYear'=>$this->selectedYear, 'requestType'=>$this->requestType, 'CurrentTaxFilingYear'=>$this->selectedYear, 'completedYears'=>$this->completedYears];
        }
        else{
            sort($this->multipleSelectedYear);
            $this->CurrentTaxFilingYear = $this->multipleSelectedYear[0];
            $data= ['selectedYear'=>$this->multipleSelectedYear, 'requestType'=>$this->requestType, 'CurrentTaxFilingYear'=>$this->CurrentTaxFilingYear, 'completedYears'=>$this->completedYears];
        }

        Session::put('progress',1);
        Session::put('instructions',$data);

        // dd(session('instructions'));


        return redirect()->to('/general-questions');
    }




}
