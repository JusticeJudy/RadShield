<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use App\Info;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
// use Illuminate\Support\Facades\Validator;
//use Illuminate\Support\Facades\Input;


class PagesController extends Controller
{
    

    public function about()

    {
    	
	     return view('about');
    }

    public function quote(){

        return view('quote');

    }

    public function SubmitQuote(Request $request){

        

        $validation = Validator::make($request->all(), array(
            'name'=> 'required',
            'email'=>'required|email',
            'company'=>'required',
            'message'=>'required',
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
            return Redirect::to('quote')->withErrors($validation)->withInput();
            } else{

                $info= new Info;
                $info->name=$request->input('name');
                $info->email=$request->input('email');
                $info->company=$request->input('company');
                $info->message=$request->input('message');

                if($files){
                    $filearray=array();
                     foreach ($files as $file){
                //$upload =$request->file('floorplan');
                //$upload =Input::file('floorplan');
                    $uploadPath='uploads';
                    $filename= time().$file->getClientOriginalName();
                    $success= $file->move($uploadPath,$filename);
                    if($success){
                    $filearray[]=$filename;
                    
                    }
                    
                    }
                $info->floorplan=$filearray;
                }

                $info->save();

                return Redirect::to('quote')->with('success','Your inquiry has been submitted.');
                

            
            }
        }
    
}



 