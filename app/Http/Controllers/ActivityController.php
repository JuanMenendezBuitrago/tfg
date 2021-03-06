<?php

namespace App\Http\Controllers;

use App\Activity;
use App\Course;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $activities = Activity::with('course')->get();
        return view('activity.list', compact('activities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $courses = Course::all();
        $activity = new Activity;
        return view('activity.create',compact('activity','courses'));
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
            'name' => 'required|max:255'
        ]);

        if(Activity::create($request->all())){
            flash('Les dades se han desat correctament.')->success();
            return redirect()->route('activity.index');
        }
        flash('Error desant les dades.')->error();
        return redirect()->route('activity.index');
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
    public function edit(Activity $activity)
    {
      $courses = Course::all();
      return view('activity.update', compact('activity', 'courses'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Activity $activity)
    {
        $this->validate($request, [
            'course_id' => 'required|exists:courses,id',
            'name' => 'required|max:255'
        ]);

        if($activity->fill($request->all())->save()){
            flash('Les dades se han desat correctament.')->success();
            return redirect()->route('school.index');
        }
        flash('Error desant les dades.')->error();
        return redirect()->route('school.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Activity $activity)
    {
        return $this->destroyResource($request, $activity);
    }
}
