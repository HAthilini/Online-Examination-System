<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subject;
class categoryController extends Controller
{
    public function store(Request $request)
    {
        $category=new Subject;
        $category->category_name= $request->inputCategory;
        $category->subject_name= $request->inputSubject;
        $category->save();
        return redirect()->back(); 
        $data=Subject::all();
        return view('category')->with('subjects',$data);
                 
        
    }
    public function edit($id)
    {
       $category=Subject::find($id);
      
       return view('admin.dashadmin.edit',compact('category'));
                 
        
    }
    public function update(Request $request,$id)
    {
       $category=Subject::find($id);
       $category->category_name= $request->input('inputcategory1');
       $category->subject_name= $request->input('inputcategory2');
       $category->update();
       return redirect('category');
          
        
    }
    public function destroy($id)
    {
        $category=Subject::find($id);
       //$category->category_name= $request->input('inputcategory1');
       $category->delete();
       return redirect('category');
          
        
    }
}
