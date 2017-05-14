<?php

namespace App\Http\Controllers;

use App\Course;
use App\Degree;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses=Course::with('degree')->get();
        return view('course.list', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $degrees = Degree::all();
        $course = new Course;
        return view('course.create', compact('course','degrees'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'degree_id' => 'required|exists:degrees,id',
            'code' => 'required|max:255|integer',
            'name' => 'required|max:255',
            'year' => 'required|integer',
            'semester' => 'required|integer|max:3'
        ]);

        if(Course::create($request->all())){
            flash('Les dades se han desat correctament.')->success();
            return redirect()->route('course.index');
        }
        flash('Error desant les dades.')->error();
        return redirect()->route('course.index');
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
    public function edit(Course $course)
    {
      $degrees = Degree::all();
      return view('course.update', compact('course', 'degrees'));        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $course)
    {
        $this->validate($request, [
            'degree_id' => 'required|exists:degrees,id',
            'code' => 'required|max:255|integer',
            'name' => 'required|max:255',
            'year' => 'required|integer',
            'semester' => 'required|integer|max:3'
        ]);
        if($course->fill($request->all())->save()){
            flash('Les dades se han desat correctament.')->success();
            return redirect()->route('course.index');
        }
        flash('Error desant les dades.')->error();
        return redirect()->route('course.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, School $school)
    {
        return $this->destroyResource($request, $school);
    }
}
