<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;;

class CustomerController extends Controller
{
    public function store(Request $request){
        $data=new Customer();

        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->password =Hash::make($request->input('password'));

        $data->save();

        return redirect('/login')->with('success', 'Comment stored successfully!');
    }
    public function login(Request $request)
    {
        // dd(request()->all);
        $credentials = $request->only('email', 'password');

        $redirectRoute = $this->validateCredentials($credentials);

     

        if ($redirectRoute) { 

            return redirect()->route($redirectRoute);
        }
        // Authentication failed, redirect back to the login page with an error message
        // return redirect()->route('login')->withErrors([
        //     'email' =>"No matching user found with the provide email address"
        
        // ]);

        return redirect()->route('login')->with('error', 'Email or password is incorrect');
    }
    private function validateCredentials($credentials) //This function is child function is run under the above function
    {
        $customer = Customer::where('email', $credentials['email'])->first();
        if ($customer && password_verify($credentials['password'], $customer->password)) 
        {
            // request()->session()->regenerate();

            if ($customer->usertype == 1) 
            {
                return 'admin.dashboard'; // Redirect to the dashboard
            } 
            elseif ($customer->usertype == 0) { 
                return 'user.dashboard'; // Redirect to the user page
            }
            elseif ($customer->usertype == 2) { 
                return 'supplier.dashboard'; // Redirect to the user page
            }
         }
    }

    public function admin(){
        return view('admin.dashboard'); //For Display adminDashboard page
    }

    public function user(){
        return view('user.dashboard'); //For Display userpage page
    }
    public function supplier(){
        return view('supplier.dashboard'); //For Display supplier page
    }

    public function log(){
        return view('login'); //For Display Login pag
    }


   // In your admin controller method
   public function logout(Request $request)
   {
       Auth::logout();
   
       $request->session()->invalidate();
   
       $request->session()->regenerateToken();
   
       return redirect('/');
   }

   



  
   
    
    
}
