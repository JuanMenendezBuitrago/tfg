<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
  use Notifiable;

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'name', 'email', 'password',
  ];

  /**
   * The attributes that should be hidden for arrays.
   *
   * @var array
   */
  protected $hidden = [
      'password', 'remember_token',
  ];


  /**
 * One-to-many relationship with files
 * @return mixed The files related to the current User
 */
  public function files()
  {
    return $this->hasMany(File::class);
  }

  /**
   * Many-to-many relationship with levels
   * @return mixed The levels related to the current User
   */
  public function levels()
  {
    return $this->belongsToMany(Level::class, 'levels_users');
  }

  /**
   * Many-to-many relationship with merits
   * @return mixed The merits related to the current User
   */
  public function merits()
  {
    return $this->belongsToMany(Merit::class, 'merits_users');
  }

  /**
   * Many-to-many relationship with incentives
   * @return mixed The incentives related to the current User
   */
  public function incentives()
  {
    return $this->belongsToMany(Incentive::class, 'incentives_users');
  }
  /**
   * Many-to-many relationship with roles
   * @return mixed The roles related to the current user
   */
  public function roles() 
  {
    return $this->belongsToMany(Role::class, 'roles_users');
  }
  /**
   * Many-to-many relationship with courses
   * @return mixed The courses related to the current user
   */
  public function courses() 
  {
    return $this->belongsToMany(Course::class, 'courses_users');
  }

  public function points()
  {
    return $this->hasMany(Point::class);
  }

  public function schoolsDegreesCourses()
  {
    return School::whereHas('degrees.courses.users',function($q){
          $q->where('id',$this->id);
      })->with(['degrees'=>function($q){
          $q->whereHas('courses.users',function($q){
              $q->where('id',$this->id);
          });
      }, 'degrees.courses'=>function($q){
          $q->whereHas('users',function($q){
              $q->where('id',$this->id);
          });
      }])->get();
  }
  public function coursesDegreesSchools()
  {
    return $this->courses()
      ->with('degree')
      ->with('degree.school');
  }
  
  public function coursesWithPoints()
  {
    // TODO: refactor
    return $this->courses()
                ->with([
                  'activities.points.category',
                  'activities.pointsSum', 
                  'activities.points'=>function($q){
                    $q->where('user_id','=',$this->id);
                  }])
                ->whereHas('activities');
  }
}
