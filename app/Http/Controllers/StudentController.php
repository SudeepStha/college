<?php

namespace App\Http\Controllers;

use App\Models\Faculty;
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
        $students = Student::all();
        return view('backend.student.index',compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $faculties = Faculty::all();
        return view('backend.student.create',compact('faculties'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $student = new Student();
       $student->name = $request->name;
       $student->age = $request->age;
       $student->roll = $request->roll;
       $student->mobile = $request->mobile;
       $student->faculty_id = $request->faculty_id;
       
       //For image
       if($request->hasFile('image')){
        $file = $request->file('image');
        $newName = time() . $file->getClientOriginalName();
        $file->move('student',$newName);
        $student->image = 'student/' . $newName;
    }
       $student->save();

       $request->session()->flash('message','Your record has been saved.');

       return redirect()->back();
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $faculties = Faculty::all();
        $student = Student::find($id);
        return view('backend.student.edit',compact('student','faculties'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       $student = Student::find($id);
       $student->name = $request->name;
       $student->age = $request->age;
       $student->roll = $request->roll;
       $student->mobile = $request->mobile;
       $student->update();

       $request->session()->flash('message','Your record has been updated.');

       return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = Student::find($id);
        $student->delete();
        return back();
    }
}
