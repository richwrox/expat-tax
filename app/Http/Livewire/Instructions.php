<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Instructions extends Component
{
	public $selectedYear;
	public $requestType;
    public $setTaxYear;
	

	protected $listeners = ['selectYear','setTaxYear'];

    public function render()
    {
    	$years = range(2018, date('Y'));
    	//\Session::pull('instructions');
        return view('livewire.instructions',['years'=>$years]);
    }

    public function selectYear($year)
    {
    	$this->requestType = $year;
    }

    public function setTaxYear($year)
    {
        $this->selectedYear = $year;
    }

    public function post(){
        $validatedData = $this->validate(['selectedYear' => 'required','requestType' => 'required'],
        [
            'selectedYear.required'=>'Which year would you like to file'
        ]
    );
        // $rules    = ['selectedYear'=>'required','lastName'=>'required','email'=>'required','gender'=>'required','phone'=>'required'];
        // $messages = ['firstName' => 'Firstname is missing',
        // 'lastName'=>'Lastname is missing',
        // 'email.email' =>'Invalid email address',];
        // $this->validate($rules,$messages);


        $data= ['selectedYear'=>$this->selectedYear, 'requestType'=>$this->requestType];
       
        \Session::put('progress',1);
        \Session::put('instructions',$data);

       
        return redirect()->to('/general-questions');
    }




}
