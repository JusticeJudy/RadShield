<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Info;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
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


        $upload =$request->file('floorplan');
        //$upload =Input::file('floorplan');
        $uploadPath='uploads';
        $filename= $upload->getClientOriginalName();
        $success= $upload->move($uploadPath,$filename);

        if($success){
        $info= new Info;
        $info->name=$request->input('name');
        $info->email=$request->input('email');
        $info->company=$request->input('company');
        $info->message=$request->input('message');
        $info->floorplan=$filename;

        $info->save();

        return Redirect::to('quote');
    }
    }
}



 