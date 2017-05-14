<?php

namespace App\Http\Controllers;

use App\Degree;
use App\School;
use Illuminate\Http\Request;

class DegreeController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $degrees=Degree::with('school')->get();
    return view('degree.list',compact('degrees'));
  }
  
  public function create(){    
    $degree = new Degree;
    $schools = School::all();
    return view('degree.create', compact('degree', 'schools'));
  }

  public function store(Request $request) {
    $this->validate($request, [
        'school_id' => 'required|exists:schools,id',
        'name' => 'required|max:255'
    ]);

    if(Degree::create($request->all())){
        flash('Les dades se han desat correctament.')->success();
        return redirect()->route('degree.index');
    }

    flash('Error desant les dades.')->error();
    return redirect()->route('degree.index');
  }

  public function edit(Degree $degree) {
    $schools = School::all();
    return view('degree.update', compact('degree', 'schools'));
  }

  public function update(Request $request, Degree $degree)
  {
    $this->validate($request, [
        'school_id' => 'required|exists:schools,id',
        'name' => 'required|max:255'
    ]);
    if($degree->fill($request->all())->save()){
        flash('Les dades se han desat correctament.')->success();
        return redirect()->route('degree.index');
    }
    flash('Error desant les dades.')->error();
    return redirect()->route('degree.index');
  }

    public function destroy(Request $request, Degree $degree)
    {
        return $this->destroyResource($request, $degree);
    }
}
