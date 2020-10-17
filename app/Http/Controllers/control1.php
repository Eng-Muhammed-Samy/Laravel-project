<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
//to create class type controll --> php artisan make:controller <control-name>
class control1 extends Controller
{
    // to get Home page --> in routes --> web.php use namespace '[App\Http\Controllers]
    // +\<control-name>@gethome'
    public function gethome()
    {
        return view('home');
    }
    // to get About page
    public function getabout()
    {
        return view('about us');
    }
    // to get contact us page
    public function getcontact()
    {
        return view('contact us');
    }
    // to get form page
    public function addstudent()
    {
        return view('new student');
    }
    // after submit
    public function submitstudent()
    {
        $fname = Request('fname');
        $lname = Request('lname');
        $email = Request('email');
        $password = Request('password');
        $address = Request('address');
        $phone = Request('phone');
        // insert from inputs to database
        $std = new Student();
        $std->FirstName = $fname;
        $std->LastName = $lname;
        $std->Email = $email;
        $std->Password = $password;
        $std->Adress = $address;
        $std->phone = $phone;
        // save after insert
        $std->save();
        return redirect('/All Student');
    }

    // to get student page
    public function getstudent($studentanaumber)
    {
        $students = ['Mohammed', 'Islam', 'Ziad', 'Aymen', 'Yasser', 'Mahmoud', 'uocef'];
        $student = array_key_exists($studentanaumber, $students) ? $students[$studentanaumber] : abort(404);
        return $student;
    }

    // to show view that shawing all student reded it
    public function getAllStudent()
    {
        $AllStudents = Student::all();
        return view('information', ['x' => $AllStudents]);
    }

    // public function showstudent($student)
    // {
    // }
    // public function editstudent($student)
    // {
    // }
    // public function deletestudent($student)
    // {
    // }
}
