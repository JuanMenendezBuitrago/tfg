<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
  /**
   * one-to-many relationship with users
   * @return mixed The users related to the current File
   */
  public function owner(){
    return $this->belongsTo(User::class);
  }

  /**
   * one-to-many relationship with activities
   * @return mixed The activities related to the current File
   */
  public function acivities(){
    return $this->belongsToMany(Activity::class, 'activities_files');
  }
}