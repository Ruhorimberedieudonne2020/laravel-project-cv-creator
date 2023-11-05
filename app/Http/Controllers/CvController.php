<?php

namespace App\Http\Controllers;
use App\Models\cv;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class CvController extends Controller
{
   public function index(){

    $cvdata = DB::table('my-cv')->get();
     // Process skills data
     foreach ($cvdata as $data) {
        $data->skillsArray = explode(', ', $data->skills);
    }
    return view('main', ['data' => $cvdata]);
   }

   public function savecv(Request $request)
   {

    // dd($request->all());
       $rules = [
         
        'firstname'=>'required', 
        'lastname'=>'required',
        'profile_image'=>'required',
        'designation'=>'required',
        'email'=>'required',
        'address'=>'required',
        'phone'=>'required',
        'website'=>'required',      
        'career_objective'=>'required',
        'skills'=>'required',
        'secondary_school_name'=>'required',
        's_school_from'=>'required',
        's_school_to'=>'required',
        'bachelors_degree'=>'required',
        'b_degree_from'=>'required',
        'b_degree_to'=>'required',
        'company1_name'=>'required',
        'job1_title'=>'required',
        'company1_from'=>'required',
        'company1_to'=>'required',
        'c1_responsibilities'=>'required',
        'company2_name'=>'required',
        'job2_title'=>'required',
        'company2_from'=>'required',
        'company2_to'=>'required',
        'c2_responsibilities'=>'required',
        
           
       ];
       $request->validate($rules);  
      

       $cv= new cv([         
           'firstname' => $request->input('firstname'),
           'lastname'=> $request->input('lastname'),          
           'designation'=> $request->input('designation'),
           'email'=> $request->input('email'),
           'address'=> $request->input('address'),
           'phone'=> $request->input('phone'),
           'website'=> $request->input('website'),      
           'career_objective'=> $request->input('career_objective'),
        //    'skills'=> $request->input('skills'),
           'secondary_school_name'=> $request->input('secondary_school_name'),
           's_school_from'=> $request->input('s_school_from'),
           's_school_to'=> $request->input('s_school_to'),
           'bachelors_degree'=> $request->input('bachelors_degree'),
           'b_degree_from'=> $request->input('b_degree_from'),
           'b_degree_to'=> $request->input('b_degree_to'),
           'company1_name'=> $request->input('company1_name'),
           'job1_title'=> $request->input('job1_title'),
           'company1_from'=> $request->input('company1_from'),
           'company1_to'=> $request->input('company1_to'),
           'c1_responsibilities'=> $request->input('c1_responsibilities'),
           'company2_name'=> $request->input('company2_name'),
           'job2_title'=> $request->input('job2_title'),
           'company2_from'=> $request->input('company2_from'),
           'company2_to'=> $request->input('company2_to'),
           'c2_responsibilities'=> $request->input('c2_responsibilities'),
           'profile_image' => $request->input('profile_image'),
           
          
       ]);
       $skills = $request->input('skills', []);
       $cv->skills = implode(', ', $skills);  
       if ($request->hasFile('profile_image')) {
        $image = $request->file('profile_image');
        $imageName = $image->getClientOriginalName();
        $imagePath = $image->storeAs('images', $imageName, 'public');
    
        $cv->profile_image = $imageName;
    }
     

       $cv->save();

       return redirect()->route('main')->with('success', 'cv created  successfully');
   }

}
