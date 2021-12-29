<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\exam;
class admincontroller extends Controller
{
    //

    public function store(Request $request){
        //dd($request->all());
        $this->validate($request,[
            'examname'=>'required|max:100|min:5',
            'examyear'=>'required|max:100|alphaNum',
            'ID'=>'required|max:100|min:5|alphaNum',
        ]);
        $exam=new exam;
        $exam->id=$request->ID;
        $exam->year=$request->examyear;
        $exam->exam_name=$request->examname;
        $exam->save();

        return $exam;
        

    }

    public function destroy($id){
        //dd($request->all());
        $data = exam::findOrFail($id);
        $data->delete();
        

    }

    public function edit($id){
        if(request()->ajax())
        {
            $data = exam::findOrFail($id);
            return response()->json(['result' => $data]);

        }

    }


}
