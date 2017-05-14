<?php

namespace App\Http\Controllers;

use App\School;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class SchoolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $schools = School::all();
        return view('school.list',['schools'=>$schools]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $school = new School;
        return view('school.create',['school'=>$school]);
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
            'name' => 'required|max:255'
        ]);

        if(School::create($request->all())){
            flash('Les dades se han desat correctament.')->success();
            return redirect()->route('school.index');
        }
        flash('Error desant les dades.')->error();
        return redirect()->route('school.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\School  $school
     * @return \Illuminate\Http\Response
     */
    public function show(School $school)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\School  $school
     * @return \Illuminate\Http\Response
     */
    public function edit(School $school)
    {
      return view('school.update', compact('school'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\School  $school
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, School $school)
    {
        $this->validate($request, [
            'name' => 'required|max:255'
        ]);

        if($school->fill($request->all())->save()){
            flash('Les dades se han desat correctament.')->success();
            return redirect()->route('school.index');
        }
        flash('Error desant les dades.')->error();
        return redirect()->route('school.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\School  $school
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, School $school)
    {   
        return $this->destroyResource($request, $school);
    }
}
