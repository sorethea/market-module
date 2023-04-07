<?php

namespace Modules\Market\Http\Livewire\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Livewire\Component;


class Login extends Component
{
    public $email;
    public $password;

    protected $rules =[
        'email'=>'required|email',
        'password'=>'required|min:8',
    ];
    public function submit(Request $request){
        $credential = $this->validate();
        if (Auth::attempt($credential)) {
            $request->session()->regenerate();
            return redirect(route('market.index'));
        }
        session()->flash("invalid-credentials","The provided credentials do not match our records.");
    }
    public function render()
    {
        return view('market::livewire.auth.login');
    }
}
