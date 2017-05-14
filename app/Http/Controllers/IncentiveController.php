<?php

namespace App\Http\Controllers;

use App\Course;
use App\Incentive;
use Illuminate\Http\Request;

class IncentiveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $incentives = Incentive::with('course')->get();
        return view('incentive.list', compact('incentives'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $incentive = new Incentive;
      $courses = Course::all();
      return view('incentive.create', ['incentive'=>$incentive, 'courses'=>$courses]);
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
            'name' => 'required|max:255',
            'price' => 'required|integer|min:0'
        ]);

        if(Incentive::create($request->all())){
            flash('Les dades se han desat correctament.')->success();
            return redirect()->route('incentive.index');
        }
        flash('Error desant les dades.')->error();
        return redirect()->route('incentive.index');
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
    public function edit(Incentive $incentive)
    {
      $courses = Course::all();
      return view('icentive.update', compact('incentive', 'courses'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Incentive $incentive)
    {
        $this->validate($request, [
            'course_id' => 'required|exists:courses,id',
            'name' => 'required|max:255'
        ]);
        if($incentive->fill($request->all())->save()){
            flash('Les dades se han desat correctament.')->success();
            return redirect()->route('incentive.index');
        }
        flash('Error desant les dades.')->error();
        return redirect()->route('incentive.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Incentive $incentive)
    {
        return $this->destroyResource($request, $incentive);
    }
}
