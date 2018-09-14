<?php

namespace App\Traits;

use App\Student;
use Illuminate\Http\Request;

trait Students {
   /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    private function storeStudent(Request $request)
    {

        $student = new Student;
        $student->name = $request->name;
        $student->surname = $request->surname;
        $student->DOB = $request->DOB;
        $student->EMBG = $request->EMBG;

        $student->save();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    private function showStudent($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    private function getStudent($id)
    {
        $student = Student::find($id);
        return $student;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    private function updateStudent(Request $request, $id)
    {
        $students = Student::find($id);
        $students->name = $request->name;
        $students->surname = $request->surname;
        $students->DOB = $request->DOB;
        $students->EMBG = $request->EMBG;

        $students->save();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        Student::find($id)->delete();


    }
}

