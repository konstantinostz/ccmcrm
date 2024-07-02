<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Customer;

class UserController extends Controller
{
     
   public function index() {
    

    return inertia::render('Login');
   }



    public function Check(Request $request) {
      
       
        $request->validate([
            'Username' => ['required', 'max:10'],
            'password' => ['required', 'max:10'],
        ]);
    
        $customers = Customer::select('name','password')->where('id',1)->get();

        

   
    
        return to_route('user.dashboard');   
    }


       public function Dashboard() {
    

        return inertia::render('Dashboard');
       }


      
                               /////// test /////////// 
       public function test() {
   
        $customers = Customer::select('name','password')->where('id',1)->get();

        return Inertia::render('test', [
            'customers' => $customers
        ]);
       }


  





}
