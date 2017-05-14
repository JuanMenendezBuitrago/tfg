<?php

namespace App\Http\Controllers;

use App\Course;
use App\Level;
use Illuminate\Http\Request;

class LevelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $levels = Level::with('course')->get();
        return view('level.list', compact('levels'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $level= new Level;
        $courses = Course::all();
        return view('level.create',compact('level','courses'));
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
            'course_id' => 'required|exists:courses,id',
            'min'=>'integer',
            'max'=>'integer',
            'name' => 'required|max:255'
        ]);

        if(Level::create($request->all())){
            flash('Les dades se han desat correctament.')->success();
            return redirect()->route('level.index');
        }
        flash('Error desant les dades.')->error();
        return redirect()->route('level.index');
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
    public function edit(Level $level)
    {
      $courses = Course::all();
      return view('level.update', compact('level', 'courses'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Level $level)
    {
        $this->validate($request, [
            'course_id' => 'required|exists:courses,id',
            'min'=>'integer',
            'max'=>'integer',
            'name' => 'required|max:255'
        ]);

        if($level->fill($request->all())->save()){
            flash('Les dades se han desat correctament.')->success();
            return redirect()->route('level.index');
        }
        flash('Error desant les dades.')->error();
        return redirect()->route('level.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Level $level)
    {
        return $this->destroyResource($request, $level);
    }
}
