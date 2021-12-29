<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\exam;
use Validator;
use Auth;
use DB;

class MainController extends Controller
{
    //

    public function examboard(){

        $exam = new exam;
     
         

         
         

        $count=1;    
        
     //$exams = exam::select('*')->get();
    $exams = DB::table('exams')->simplePaginate(5);
     return view('exam', compact('exams'), ['count'=>$count]);

     
    
    //DB::table('subjects')->join('Grade','Grade.grade_id','subjects.grade_id')->where('subjects.grade_id',$grd)->get();
    

     

        
       
      
   }



    function index(){
        return view('login');
    }

    function checklogin(Request $request){
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|alphaNum|min:3'

        ]);

        $user_data = array(
            'email'  => $request->get('email'),
            'password'  => $request->get('password'),
            
        );

        if(Auth::attempt($user_data))
        {
            return redirect('main/successlogin');

        }

        else
        {
            return back()->with('error', 'Wrong Login Details');
        }
    }

    function successlogin(){

        return view('dashboard');
    }

    function logout(){

        Auth::logout();
        return redirect('main');
    }
    
}
