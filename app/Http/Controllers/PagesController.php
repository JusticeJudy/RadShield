<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use App\Info;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Storage;
use GeoIP;
// use Illuminate\Support\Facades\Validator;
// use Illuminate\Support\Facades\Input;


class PagesController extends Controller
{
    

    public function about()

    {
    	
	     return view('about');
    }

    public function contact(){

        return view('contact');

    }

    public function SubmitContact(Request $request){

        

        $validation = Validator::make($request->all(), array(
            'name'=> 'required',
            'email'=>'required|email',
            'company'=>'required',
            'message'=>'required',
            'g-recaptcha-response' => 'required|captcha',
            'floorplan.*'=>'mimes:jpg,jpeg,png,pdf',
            ));

    //     if($request->hasFile('floorplan')){
    //             $files =$request->file('floorplan');
    //     foreach ($files as $file){
    //         $rules=array('file'=> 'mimes:jpg,jpeg,png,pdf');
    //         $validator = Validator::make(array('file'=> $file), $rules);
            
    //     }
    // }
        
        if($validation->fails()){
            return Redirect::to('contact')->withErrors($validation)->withInput();
            // dd($errors->all());
            } else{

                $info= new Info;
                $location= GeoIP::getLocation();
                $info->name=$request->input('name');
                $info->email=$request->input('email');
                $info->company=$request->input('company');
                $info->message=$request->input('message');
                $info->location=$location['city'];

                if($request->hasFile('floorplan')){
                   $files =$request->file('floorplan');
                    $filearray=array();
                     foreach ($files as $file){
                //$upload =$request->file('floorplan');
                //$upload =Input::file('floorplan');
                    $uploadPath='uploads';
                    $filename= time().$file->getClientOriginalName();
                   // $success= $file->move($uploadPath,$filename);
                    $success= Storage::disk('local')->put($filename,$file);
                    if($success){
                    $filearray[]=$filename;
                    
                    }
                    
                    }
                $info->floorplan=$filearray;
                }

                $info->save();

                return Redirect::to('contact')->with('success','Your inquiry has been submitted.');
                

            
            }
        }
    
}



 