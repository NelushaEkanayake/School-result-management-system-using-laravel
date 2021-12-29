<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\grade;
use App\subject;
use App\exam;
use App\marks;
use App\students;

class gradeController extends Controller
{

    public function store(){
        $exam = new Exam;
        $grade=new grade;

        $sub = new subject;

        $grades = grade::select('*')->orderBy('id', 'asc')->get();
        $grdr = grade::select('*')->orderBy('id', 'asc')->first();
        $grd= $grdr->id;
        //$grd = 6;
        $se = grade::find($grd);
        $subs =  $se->subjects;

       // $grds = grade::with( relations: 'getSubject')->get();
        $exams = Exam::all();

        $last_exam = DB::table('exams')->orderBy('id', 'DESC')->first();

        $last_exam_id = $last_exam->id;

        //$data = Exam::select('*')->where('exam_id', '=', $last_exam_id)->get();

        //return view('tasks')->with('grades','subs',$data,$subs);

        return view('tasks',['grades'=> $grades,'subs'=>$subs,'last_exam'=>$last_exam,'exams'=>$exams,'grdr'=>$grdr]);
    }


    public function getsubjects(Request $request){

        $subject = new subject;
     
         $grd = $request->grd_id;

         $se = grade::find($grd);
         $subject =  $se->subjects;

         
        
     //$subjects = subjects::select('*')->where('id', '=', $grd)->get();

     return view('subjects',['subs'=>$subject]);

     
    
    //DB::table('subjects')->join('Grade','Grade.grade_id','subjects.grade_id')->where('subjects.grade_id',$grd)->get();
    

     

        
       
      
   }



   public function getmarks(Request $request){

    $marks = new marks;
 
     $sub = $request->subject;
     $exam = $request->exam;
     $grade = $request->grade;

     $subject= subject::select('*')->where('id', '=', $sub)->first();
     $ex=exam::select('*')->where('id', '=', $exam)->first();
     $class=grade::select('*')->where('id', '=', $grade)->first();

     $marks= marks::select('*')->where('grade_id', '=', $grade)->where('subject_id', '=', $sub)->where('exam_id', '=', $exam)->get();
     $count=1;
     //return $marks;

    return view('allmarks',['marks'=> $marks,'count'=>$count,'exam'=>$ex,'subject'=>$subject,'grade'=>$class]);
     
     

  
  
}

public function marksheet(Request $request){

    

     return view('allmarks');
     
     

  
  
}



   public function result(){
    $exam = new exam;
    $grade=new Grade;

    $results = new marks;

    $students = new students;
    $indexNo = 17;
    //$sub = new subjects;

    $exam = 1;
    $indexNo= 17;
    
    $name= students::select('*')->where('index_no', '=', $indexNo)->first();
    $reexam = exam::select('*')->where('id', '=', $exam)->first();
    

    $exams = exam::all();
    

    $last_exam = DB::table('exams')->orderBy('id', 'DESC')->first();
    //$results = DB::table('marks')->orderBy('marks_id', 'DESC')->first();
    //$last_exam_id = {{$last_exam->exam_id}};

    //$data = Exam::select('*')->where('exam_id', '=', $last_exam_id)->get();
    $count = 1;
    //return view('tasks')->with('grades','subs',$data,$subs);
    $display ='none';
    $results = marks::all();
//     $name = DB::table('students')
// ->select('*')


// ->where('students.index_no',$indexNo)
// ->get();
    // $result = DB::table('marks')
    // ->select('marks_id','marks','subject_name')
    // ->join('subjects', 'subjects.subject_id', '=', 'marks.subject_id')
    // ->where('marks.exam_id',$exam)
    // ->where('marks.index_no',$indexNo)
    // ->get();
    return view('result',['last_exam'=>$last_exam,'display'=>$display,'exams'=>$exams]);
}



public function marks(Request $request){

    $marks = new marks;

    $students = new students;
  
 $exam = $request->exam;

 $indexNo = $request->indexNo;

 $index = students::where('index_no', '=', $indexNo)->first();

 $reexam = exam::select('*')->where('id', '=', $exam)->first();

 

  //$result = marks::select('*')->where('index_no', '=', $indexNo)->where('exam_id', '=', $exam)->get();
   // $result = DB::table('marks')->join('subjects','subject_id','marks.subject_id')->where('marks.exam_id',$exam)->where('marks.index_no',$indexNo)->get();
 //return view('result',['subs'=>$result]);
$count = 1;

 $name = students::select('*')->where('index_no', '=', $indexNo)->first();
 $result = DB::table('marks')
    ->select('marks_id','marks','subject_name')
    ->join('subjects', 'subjects.id', '=', 'marks.subject_id')
    ->where('marks.exam_id',$exam)
    ->where('marks.index_no',$indexNo)
    ->get();

    $err = 'results not found !!! Please enter valid index number';

 //$display = 'flex';
 $display ='unset';
 if ($index === null || $result->isEmpty()) {
    return view('error',['err'=>$err]);
 }

 else{
    return view('table',['results'=>$result,'count'=>$count,'display'=>$display,'exam'=>$reexam,'name'=>$name]);

 }

 




}


    
    
    
}
