<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\subjects;
class subjectContoller extends Controller
{
    public function getsubjects(Request $request){
         $grd = $request->grd_id;

         return $grd;
        
       
    }
}
