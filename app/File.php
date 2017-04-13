<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
  /**
   * one-to-many relationship with users
   * @return mixed The users related to the current File
   */
  public function user(){
    return $this->belongsTo(User::class);
  }
}