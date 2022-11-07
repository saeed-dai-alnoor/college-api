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
        return Student::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // request()->validate([
        //     'student_id' => 'required',
        //     'name' => 'required',
        //     'phone' => 'required',
        // ]);
            return Student::create([
             'student_id' => request('student_id'),   
            'name' => request('name'),
            'phone' => request('phone'),
    
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        request()->validate([
            'student_id' => 'required',
            'name' => 'required',
            'phone' => 'required',
        ]);
        $success = $student->update([
            'student_id' => request('student_id'),   
            'name' => request('name'),
            'phone' => request('phone'),

        ]    
        );
        return [
            'Success!' => $success
        ];
    }

     /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        $success = $student->delete();
        return [
            'Success!' => $success
        ];
    } 

    public function login(Request $request)
    {
        $vaild = $request->validate([
            'student_id' => 'required',
            'phone' => 'required',
        ]);

        $studentId = Student::where('student_id', $vaild['student_id'])->first();
        $studentPhone = Student::where('phone', $vaild['phone'])->first();

        if (!$studentId || !$studentPhone) {
            return response()->json([
                'status' => 'false',
                'result' => 'Wrong id or phone number',]);
        } else {
            return  response()->json([
                'status' => 'true',
                'result' =>  Student::find($studentId),
            ]);
            
           
        }
    }
























    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
    }

    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        //
    }

   
}
