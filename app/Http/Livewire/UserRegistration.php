<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Mail\UserRegistration as WelcomeMail;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
class UserRegistration extends Component
{
	public $Email;
	public $Fullname;
    public function render()
    {
        return view('livewire.user-registration');
    }

    public function registerUser()
    {
         $defaultPassword   = substr(number_format(time() * rand(),0,'',''),0,6);
         $data              = ['name'=>$this->Fullname,'defaultPassword'=>$defaultPassword];
         $current_timestamp = Carbon::now();
         $token = (string) Str::uuid();
         $user = new User;
    	//  dd($token);

         try{
            $user->name      = $this->Fullname;
             $user->email    = $this->Email;
             $user->password = bcrypt($defaultPassword);
             $user->userid = $token;
             $user->userstatus = 1;
             $user->save();

            Mail::to($this->Email)->send(new WelcomeMail($data));
            session()->flash('message_new_user', 'Your account has been created. Check your email for your default password');
            return redirect()->to('/login');
         }catch(\Exception $e){
            dd($e);
             session()->flash('message_error', 'Error creating your account. Check your internet and try again ');
             return redirect()->to('/register-user');
         }

    }
}
