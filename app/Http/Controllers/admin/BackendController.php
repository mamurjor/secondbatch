<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Requests\HeroSectionRequest;

class BackendController extends Controller
{
    //


    public function herolist(){


        $header_section =  DB::table('hero_section')->get();

        return view("admin.herolist",compact("header_section"));
    }


    public function herodelete($id){

            DB::select('DELETE FROM hero_section WHERE id="'.$id.'"');
            return redirect()->route('admin.herolist');
            // return redirect()->action('${App\Http\Controllers\HomeController@index}', ['parameterKey' => 'value']);

    }

    public function heroform(){
        return view('admin.heroform');
    }




    public function heroformsave(HeroSectionRequest $areqeust){


      $validted =   $areqeust->validated();
    //  $validate =    $areqeust->validate([
    //     "hero_title" => "required|string|max:2",
    //     "hero_name" => "required",
    //     "hero_designation" => "required",

    //  ]);
            // $$areqeust->all();
           $hero_title= $areqeust->hero_title;
           $hero_name= $areqeust->hero_name;
           $hero_designation= $areqeust->hero_designation;
           $button_url= $areqeust->button_url;
           $button_text= $areqeust->button_text;

            // DB::select("INSERT INTO hero_section(hero_title, hero_name, hero_designation, button_url, button_text)
            // -- VALUES ('[value-2]','[value-3]','[value-4]','[value-5]','[value-6]')");



            DB::select("INSERT INTO hero_section(hero_title, hero_name, hero_designation, button_url, button_text)
            VALUES ('$hero_title','$hero_name','$hero_designation','$button_url','$button_text')");
        // DB::table()
        // DB::insert()


        // return
        // return redirect()->back();

        return redirect()->route('admin.herolist');


    }


    public function heroforupdate(Request $areqeust){

        // dd($areqeust->all());
        $id= $areqeust->id;
        $hero_title= $areqeust->hero_title;
        $hero_name= $areqeust->hero_name;
        $hero_designation= $areqeust->hero_designation;
        $button_url= $areqeust->button_url;
        $button_text= $areqeust->button_text;

        DB::select("UPDATE  hero_section set hero_title='$hero_title', hero_name='$hero_name', hero_designation='$hero_designation', button_url='$button_url', button_text='$button_text'
          where id= '$id'");


     // DB::table()
     // DB::insert()


     // return
     // return redirect()->back();

     return redirect()->route('admin.herolist');

    }

    public function heroedit($id){

        $header_section_by_id =  DB::table('hero_section')->where('id',$id)->first();


         return view("admin.heroeditform",compact("header_section_by_id"));

    }
}
