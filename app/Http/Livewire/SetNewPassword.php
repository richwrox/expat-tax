<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\User;


class SetNewPassword extends Component
{
	public $password;
	public $password_confirmation;

	protected $rules = [

        'password' => 'required|min:6|confirmed', 'password' => 'required|confirmed'

    ];

    public function render()
    {
        return view('livewire.set-new-password');
    }

    public function post()
    {
    	$email = Session::get('email');
    	$user = User::where('email',$email)->first();

    	$this->validate($this->rules);
    	$user->password = bcrypt($this->password);
    	$user->save();

    	//redirect
    	request()->session()->regenerate();
        Session::put('name',$user->name);
        session()->flash('message_new_password', 'Great password reset successful. Login with your new password');
        return redirect()->to('/');
    	
    }




}
