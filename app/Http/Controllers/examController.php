<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subject;
use App\Exam;
use DB;
class examController extends Controller
{
    public function store(Request $request)
    {
        $category=new Exam;
        $category->Category_name= $request->inputexam1;
        $category->Subject_name= $request->inputexam2;
        $category->Exam_date= $request->inputexam3;
        $category->Exam_duration= $request->inputexam4;
        $category->Term_condition= $request->inputexam5;
        $category->save();
        return redirect()->back(); 
        $data=Exam::all();
        return view('exam')->with('exams',$data);
                 
        
    }
    public function update(Request $request,$id)
    {
       $category=Exam::find($id);
       $category=Subject::find($id);
       $category->Category_name= $request->input('inputexam1');
       $category->Subject_name= $request->input('inputexam2');
       $category->Exam_duration= $request->input('inputexam3');
       $category->Term_condition= $request->input('inputexam4');
       $category->category_name= $request->input('inputexam5');
       $category->update();
       return redirect('category');
          
        
    }
    public function destroy($id)
    {
        $category=Exam::find($id);
       //$category->category_name= $request->input('inputcategory1');
       $category->delete();
       return redirect('exam');
          
        
    }
}
