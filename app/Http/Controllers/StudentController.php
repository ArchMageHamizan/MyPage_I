<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;

class StudentController extends Controller
{   

    protected $student;
    public function __construct(){
        $this->student=new Student();
    }

    // 5 ACTION: 
    //   @ DISPLAY LIST & SPECIFIC
    //   @ STORE NEW
    //   @ UPDATE SPECIFIC
    //   @ DELETE SPECIFIC 
    
    // DISPLAY LIST of the resource.
    public function index()
    {
        return $this->student->all();
    }
    // =============================
      
    // DISPLAY SPECIFIC resource.
    public function show(string $id)
    {
        return $student=$this->student->find($id);
    }
    // =============================
  
    // STORE NEW created resource in storage.
    public function store(Request $request)
    {
        return $this->student->create($request->all());
    }
    // =============================

    
    // UPDATE  SPECIFIC resource in storage.
    public function update(Request $request, string $id)
    {
        $student=$this->student->find($id); // find the target student by refer to id
                                            // assign the values to student object
        $student->update($request->all());  // update the student 
        return $student;
    }
    // =============================

    // DELETE SPECIFIC resource from storage.
    public function destroy(string $id)
    {
        $student =$this->$student->find($id);
        return $student->delete(); //delete entire row
    }
    // =============================
}
