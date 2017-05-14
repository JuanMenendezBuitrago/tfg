<?php

namespace App\Http\Controllers;

use App\Course;
use App\Degree;
use App\School;
use App\User;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all(['id', 'name', 'niu','nickname','email']);
        if(request()->ajax())
        {
            return response()->json($users);
        }
        return view('user.list', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $user = new User;
        return view('user.create', compact('user'));
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
            'niu' => 'required|integer|max:9999999',
            'name' => 'required|max:255',
            'nickName' => 'required|max:255',
            'email' => 'required|max:255',
            'password' => 'required|max:255',
            'avatar' => 'file|size:500|mimes:jpg,jpeg,gif,png'
        ]);

        $request->file('avatar')->saveAs('avatar');
        dd($request->file('avatar'));

        if(User::create($request->all())){
            flash('Les dades se han desat correctament.')->success();
            return redirect()->route('user.index');
        }
        flash('Error desant les dades.')->error();
        return redirect()->route('user.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        $groupedDegrees=$user->schoolsDegreesCourses();
        $userCoursesWithPoints=$user->coursesWithPoints;        
        // $courses = User::with('courses.degree')->where('id',$user->id)->first()->courses;
        // $groupedCourses = $this->groupedCourses($courses);
        // // Get user's point informa
        // $userCoursesWithPoints = Course::with(['activities.points.category','activities.pointsSum', 'activities.points'=>function($q) use ($user){
        //     $q->where('user_id','=',$user->id);
        // }])->whereHas('activities')->get();

        return view('user.show', compact('user','groupedDegrees','userCoursesWithPoints'));
    }
    // private function groupedCoursesWithPoints($groupedCourses, $coursesWithPoints)
    // {
    //     foreach ($groupedCourses as $degree => $courses) {
    //         $sum = 0;
    //         foreach ($courses as $course) {
    //             if(count($coursesWithPoints->where('id', $course->id))>0);
    //             // foreach($course->)
    //         }
    //     }
    // }
    
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('user.update', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {        
        $this->validate($request, [
            'niu' => 'required|integer|max:9999999',
            'name' => 'required|max:255',
            'nickname' => 'required|max:255',
            // 'email' => 'required|max:255',
            'avatar' => 'file|max:500|mimes:jpg,jpeg,gif,png'
        ]);


        if($request->file('avatar'))
        {
            $file = $request->file('avatar');
            $ext = strtolower($file->guessClientExtension());
            Image::make($file)->resize(300, 300, function ($constraint) {
                $constraint->aspectRatio();
            })->save(storage_path("app/avatars/{$user->niu}/mini.jpg"));
            $file->storeAs('avatars/'. $user->niu, "avatar.{$ext}");            
        }

        if($user->fill($request->all())->save()){
            flash('Les dades se han desat correctament.')->success();
            return redirect()->route('user.index');
        }
        flash('Error desant les dades.')->error();
        return redirect()->route('user.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, User $user)
    {
        return $this->destroyResource($request, $user);
    }
}
