<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\studentm;


class studentc extends Controller{
    
    
    function addstudents()
    {
        $data = studentm::select('Name','id','Class','Section')->get();
      //return["data"=>$data];
          return view('admin.student',compact('data'));

//        return view('admin.student', ['student'=> $data]);
    }
      
    function delete($id) {  

        $data = studentm::find($id)->delete();
        return redirect('student-link');       
    }







}

// class studentc extends Controller
// {
//     function formsubmit(Request $request){
//         $student = new studentm;
//         $student->REG_DATE=$request->date;
//         $student->gender=$request->Gender;
//         $student->Name=$request->fullname;
//         $student->Class=$request->class;
//         $student->Section=$request->section;
//         $student->Rollno=$request->rollno;
//         $student->DOB=$request->dob;
//         $student->Address=$request->address;
//         $student->email=$request->email;
//         $student->Phonenumber=$request->phone;
//         $student->ParentsName=$request->parent;
//         $student->Guardiansname=$request->guardian;
        
//         if($student->save()){
//             echo "success";
//         }
     
//     }
// } 
 