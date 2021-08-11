<?php

namespace App\Http\Controllers;

use App\Models\icon;
use Illuminate\Http\Request;

class IconController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
  

   public function add()
   {
       return view('icon.add');
   }
   public function store(Request $request)
   {
       
       $model = new icon;
       $model->name=$request->name;
       if ($file = $request->file('image')) 
       {          
           $name = time().$file->getClientOriginalName();
           $file->move('assets\uploads\catagory',$name);           
           $model->image= $name;
       }
       $model->save();
     return redirect('icon-list');
   }
   public function index()
   {
       $data = icon::get();
       return view('icon.view',['data'=>$data]);
   }
   public function edit($id)
   {
       $model=icon::find($id);
       return view('icon.edit',['data'=>$model]);
   }
   public function update(Request $request)
   {
       $model = icon::find($request->id);
      
    
       $model->name=$request->name;
       if ($file = $request->file('image')) 
       {          
           $name = time().$file->getClientOriginalName();
           $file->move('assets\uploads\catagory',$name);           
           $model->image= $name;
       }
       $model->save();
     return redirect('icon-list');
   }
   public function destroy($id)
   {
       $model = icon::find($id);
       $model->delete();
       return redirect('icon-list');
   }
}
