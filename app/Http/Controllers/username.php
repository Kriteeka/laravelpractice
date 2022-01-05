<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Admin;

class username extends controller{

    function checkidpw(Request $request){
        $username=$request->email;
        $password=$request->password;
        if(Admin::where([['User_Name','=',$username],['PASSWORD','=',$password]])->exists()){
            $request->session()->put('admin-validation',"VALIDATED");
            $request->session()->put('username',$username);
            
            return view('admin.calender');

        }
        else{
            echo "login failed"; 
        }
        
    
        // if($username=="admin" && $password=="admin"){
        //     return view("admin.constantdash.dash");
        // }
        // else{
        //     echo "Login Failed";
        // }
    
    
    }

}




