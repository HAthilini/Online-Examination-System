<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;


class studentController extends Controller
{
    public function store(Request $request)
    {
        $student=new Student;
        $student->Category_name= $request->inputstudent1;
        $student->student_name= $request->inputstudent2;
        $student->Reg_number= $request->inputstudent3;
        $student->Date_of_Birth= $request->inputstudent4;
        $student->Address= $request->inputstudent5;
        $student->E_Mail= $request->inputstudent6;
        $student->Password= $request->inputstudent7;
         $student->save();
        return redirect()->back(); 
        $data=Student::all();
        return view('student')->with('students',$data);
      
                 
        
    }
    public function show($id)
    {
       
        $student=Student::find($id);
      
        return view('admin.dashadmin.viewstudent',compact('student'));
             
        
    }
    public function edit($id)
    {
       $student=Student::find($id);
      
       return view('admin.dashadmin.studentedit',compact('student'));
                 
        
    }
    public function update(Request $request,$id)
    {
        $student=Student::find($id);
        $student->Category_name= $request->input('inputcategory1');
        $student->student_name= $request->input('inputcategory2');
        $student->Reg_number= $request->input('inputcategory3');
        $student->Date_of_Birth= $request->input('inputcategory4');
        $student->Address= $request->input('inputcategory5');
        $student->E_Mail= $request->input('inputcategory6');
        $student->Password= $request->input('inputcategory7');
        $student->update();
       return redirect('student');
       
          
        
    }
    public function destroy($id)
    {
        $student=Student::find($id);
       //$category->category_name= $request->input('inputcategory1');
       $student->delete();
       return redirect('student');
          
        
    }
}
