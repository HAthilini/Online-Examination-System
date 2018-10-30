<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notice;
class noticeController extends Controller
{
    public function store(Request $request)
    {
        $category=new Notice;
        $category->Notice_subject= $request->inputcategory1;
        $category->Notice_date= $request->inputcategory2;
        $category->Notice= $request->inputcategory3;
        $category->save();
        return redirect()->back(); 
        $data=Notice::all();
        return view('notice')->with('notices',$data);
                 
        
    }
    public function edit($id)
    {
       $category=Notice::find($id);
      
       return view('admin.dashadmin.editnotice',compact('category'));
                 
        
    }
    public function update(Request $request,$id)
    {
       $category=Notice::find($id);
       $category->Notice_subject= $request->input('inputcategory1');
       $category->Notice_date= $request->input('inputcategory2');
       $category->Notice= $request->input('inputcategory3');
       $category->update();
       return redirect('notice');
          
        
    }
    public function destroy($id)
    {
        $category=Notice::find($id);
       //$category->category_name= $request->input('inputcategory1');
       $category->delete();
       return redirect('notice');
          
        
    }
}
