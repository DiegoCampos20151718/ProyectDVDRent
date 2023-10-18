<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    public function store(Request $request)
    {
        $student = Student :: create([
            'name'=> $request->name,
            'last_name'=>$request->last_name,
            'control'=>$request->control,
            'email'=>$request->email,
            'semester'=>$request->semester,
            'program_id'=>$request->program_id
        ]);
        $student->save();

        return $request;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request ) {
        $student= Student::where('name', $request->name)
        ->where('last_name', $request->last_name)
        ->get();

        return $student;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $student =Student::where('name', $request-> name)
        ->Orwhere('last_name', $request->last_name)
        ->get();

        return $student->id;
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
       $student->name =$request->name;
       $student->last_name =$request->last_name;
       $student->control =$request->control;
       $student->email =$request->email;
       $student->semester =$request->semester;

       $student->save();
       return $request;

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $student=Student::where('control', $request->control)
        ->delete();
        return 'ok';
    }

    public function token(){
        return csrf_token();
    }
}
