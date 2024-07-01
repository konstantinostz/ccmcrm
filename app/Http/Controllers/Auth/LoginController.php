<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;
use App\Models\Customer;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    //

    public function Login() {
   

      return inertia::render('Login');
    }

    public function authenticate(Request $request): RedirectResponse
    {    
  
        $customer = new Customer();
        $customer->name = 'test';
        $customer->password = Hash::make('test');
        $customer->save();

        //Log::info($request);


        $credentials = $request->validate([
            'name' => ['required', 'max:10'],
            'password' => ['required', 'max:10'],
        ]);
    
 
        if (Auth::attempt($credentials)) {
           $test =  $request->session()->regenerate();
            
            
           Log::info($test);
           
            return redirect()->intended('dashboard');   
        }
        
       
        
        return back()->withErrors([
            'name' => 'The provided credentials do not match ',
            'password' => 'The provided credentials do not match '
        ])->onlyInput('name','password');
    }
}
