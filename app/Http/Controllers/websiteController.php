<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class websiteController extends Controller
{
    //


    public function mywebsite(){


      $header_section =  DB::table('hero_section')->get();

      $myexpertise = DB::table('myexpertise')->get();

      $about = DB::table('about')->get();

     // dd($header_section);


        return view('home',compact('header_section','myexpertise','about'));

    //    return $list[3];




        // return view('home')->with('name',$person_name);

        // return view('home')->with('hellow',$hellow)->with('name',$person_name)->with('designation',$designation)->with('button_text',$button_text)->with('button_url',$button_url);
    }

    public function about($id,$username){



        return view("about");
    }
}
