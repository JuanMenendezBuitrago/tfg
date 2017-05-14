<?php

namespace App\Http\Controllers;

use App\PointCategory;
use Illuminate\Http\Request;

class PointCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = PointCategory::all();
        return view('pointCategory.list', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pointCategory = new PointCategory;
        return view('pointCategory.create',compact('pointCategory'));        
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

       if(PointCategory::create($request->all())){
            flash('Les dades se han desat correctament.')->success();
            return redirect()->route('pointCategory.index');
        }
        flash('Error desant les dades.')->error();
        return redirect()->route('pointCategory.index');
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
    public function edit(PointCategory $category)
    {
      return view('pointCategory.update', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PointCategory $pointCategory )
    {
        $this->validate($request, [
            'name' => 'required|max:255'
        ]);
       if($pointCategory->fill($request->all())->save()){
            flash('Les dades se han desat correctament.')->success();
            return redirect()->route('pointCategory.index');
        }
        flash('Error desant les dades.')->error();
        return redirect()->route('pointCategory.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, PointCategory $pointCategory)
    {
        return $this->destroyResource($request, $pointCategory);
    }
}
