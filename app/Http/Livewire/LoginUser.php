<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\User;

class LoginUser extends Component
{
	public $email;
	public $password;

    public function render()
    {
        return view('livewire.login-user');
    }


    public function loginUser()
    {
    	$validatedData = $this->validate([
            'email' => 'required',
            'password'=>'required'
        ],
        []);
    	if (Auth::attempt(['email' => $this->email, 'password' => $this->password]))
    	{
    		 $user = User::where('email',$this->email)->first();
    		 Session::put('email',$this->email);
             if($user->userstatus == 1){
                //Set new password
                session()->flash('message_init_resetpassord', 'Your account has been created. Check your email for your default password');
                return redirect()->to('/set-new-password');
             }else{
                 request()->session()->regenerate();
                 Session::put('name',$user->name);
                 return redirect()->to('/');
             }

		}
    }
}
