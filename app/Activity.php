<?php

namespace App;

use App\Point;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
  protected $fillable = ['name', 'escription', 'course_id'];
  /**
   * One-to-many relationship with courses
   * @return mixed The courses related to the current Activity
   */
  public function course(){
    return $this->belongsTo(Course::class);
  }

  /**
   * One-to-many relationship with files
   * @return mixed The courses related to the current Activity
   */
  public function files(){
    return $this->belongsToMany(Course::class, 'activities_files');
  }

  public function points(){
    return $this->hasMany(Point::class);
  }
  public function pointsSum()
  {
    return $this->hasMany(Point::class)
      ->join('pointCategories','points.category_id','=','pointCategories.id')
      ->selectRaw('activity_id, category_id, pointCategories.name, sum(amount) as sum')
      ->groupBy(['activity_id','category_id']);
  }
   
  // public function getpointsCountAttribute()
  // {
  //   // if relation is not loaded already, let's do it first
  //   if ( ! array_key_exists('pointsCount', $this->relations)) 
  //     $this->load('pointsCount');
   
  //   $related = $this->getRelation('pointsCount');
   
  //   // then return the count directly
  //   return ($related) ? (int) $related->sum : 0;
  // }
}