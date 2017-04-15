<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DegreeController extends Controller
{
    public function create(){
      
      $degree = new \App\Degree;
      $schools = \App\School::all();

      return view('degree.create', ['degree'=>$degree, 'schools'=>$schools]);
    }
}
