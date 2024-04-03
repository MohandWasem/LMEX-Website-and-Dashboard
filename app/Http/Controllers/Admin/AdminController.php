<?php

namespace App\Http\Controllers\Admin;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class AdminController extends Controller
{
   public function index()
   {
    $Services=Service::get();
    return view("admin.admin",compact("Services"));
   }

   public function add()
   {
    return view("admin.add");

   }

   public function show(Request $request)
   {
    if($request->has('image')){
        $file=$request->file('image');
        $extension=$file->getClientOriginalName();
        $filename=md5(uniqid()).".".$extension;
        $path='uploads/images/';
        $file->move($path, $filename);
       Service::create([
          "services_name"=>$request->input("services_name"),
          "Description"=>$request->input("Description"),
          "image"=>$path.$filename,
    ]);
   }

    return redirect()->route('Services')->with('success','Services Added Successfully');
   }

   public function edit($id)
   {
       $Services=Service::findOrfail($id);
       return view("admin.edit",compact("Services"));
   }

   public function update(Request $request , $id)
   {
      
      $Services=Service::findOrfail($id);
      $img=Service::where('id',$id)->first();

      $Services->update([
        "services_name"=>$request->input("services_name"),
        "Description"=>$request->input("Description"),
      ]);

      if($request->hasfile('image')){
        if(File::exists($img->image)){
          File::delete($img->image);
        }
          $file=$request->file('image');
          $extension=$file->getClientOriginalName();
          $filename=md5(uniqid()).".".$extension;
          $path='uploads/images/';
          $file->move($path, $filename);
          $img->image = $path.$filename ;
          $img->save();
      }

      return redirect()->route('Services');
   }

   public function delete($id)
   {
     $image=Service::where('id',$id)->first('image');
      if(File::exists($image->image)){
        File::delete($image->image);
      }
      $image->delete();

      $Services=Service::where('id',$id)->delete();
      return redirect()->route('Services')->with("success","Successfully Delete Service");
   }


   public function logout()
   {
       Auth::guard("web")->logout();
       return redirect()->route("login");
   }
}
