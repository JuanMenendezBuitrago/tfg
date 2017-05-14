<?php

namespace App\Http\Controllers;

use App\Activity;
use App\Point;
use App\PointCategory;
use App\User;
use Illuminate\Http\Request;

class PointController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $points = Point::with('category','user','activity')->get();
        return view('point.list', compact('points'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $point = new Point;
        $categories = PointCategory::all();
        $users = User::all();
        $activities = Activity::all();
        return view('point.create',compact('point', 'categories', 'users', 'activities'));
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
            'category_id'=>'required|exists:pointCategories,id',
            'amount'=>'required|integer|min:0',
            'user_id'=>'required|exists:users,id',
            'activity_id'=>'required|exists:activities,id',
            'name' => 'required|max:255'
        ]);

       if(Point::create($request->all())){
            flash('Les dades se han desat correctament.')->success();
            return redirect()->route('point.index');
        }
        flash('Error desant les dades.')->error();
        return redirect()->route('point.index');
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
    public function edit(Point $point)
    {
      $categories = PointCategory::all();
      return view('point.update', compact('point', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Point $point)
    {
        $this->validate($request, [
            'category_id'=>'required|exists:pointCategories,id',
            'amount'=>'required|integer|min:0',
            'user_id'=>'required|exists:users,id',
            'activity_id'=>'required|exists:activities,id',
            'name' => 'required|max:255'
        ]);
        if($point->fill($request->all())->save()){
            flash('Les dades se han desat correctament.')->success();
            return redirect()->route('point.index');
        }
        flash('Error desant les dades.')->error();
        return redirect()->route('point.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Point $point)
    {
        return $this->destroyResource($request, $point);
    }
}
