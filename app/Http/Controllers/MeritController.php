<?php

namespace App\Http\Controllers;

use App\Course;
use App\Merit;
use Illuminate\Http\Request;

class MeritController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $merits = Merit::with('course')->get();
        return view('merit.list', compact('merits'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $courses = Course::all();
        $merit = new Merit;
        return view('merit.create',compact('merit','courses'));
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

       if(Merit::create($request->all())){
            flash('Les dades se han desat correctament.')->success();
            return redirect()->route('merit.index');
        }
        flash('Error desant les dades.')->error();
        return redirect()->route('merit.index');
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
    public function edit(Merit $merit)
    {
      $courses = Course::all();
      return view('merit.update', compact('merit', 'courses'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Merit $merit)
    {
        $this->validate($request, [
            'course_id' => 'required|exists:courses,id',
            'name' => 'required|max:255'
        ]);
        if($merit->fill($request->all())->save()){
            flash('Les dades se han desat correctament.')->success();
            return redirect()->route('merit.index');
        }
        flash('Error desant les dades.')->error();
        return redirect()->route('merit.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Merit $merit)
    {
        return $this->destroyResource($request, $merit);
    }
}
