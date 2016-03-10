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
            'floorplan'=>'mimes:jpg,jpeg,png,tif,pdf',
            ));

        if($validation->fails()){
            return Redirect::to('quote')->withErrors($validation);
            } else{

                $info= new Info;
                $info->name=$request->input('name');
                $info->email=$request->input('email');
                $info->company=$request->input('company');
                $info->message=$request->input('message');

                if($request->hasFile('floorplan')){
                $upload =$request->file('floorplan');
                //$upload =Input::file('floorplan');
                $uploadPath='uploads';
                $filename= $upload->getClientOriginalName();
                $success= $upload->move($uploadPath,$filename);
                $info->floorplan=$filename;
                }

                $info->save();

                return Redirect::to('quote')->with('success','Your inquiry has been submitted.');
                

            
            }
        }
}



 