<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    /**
     * one-to-many relationship with users
     * @return mixed The users related to the current Group
     */
    public function owner(){
      return $this->belongsTo(User::class);
    }
    
    /**
     * many-to-many relationship with users
     * @return mixed The users related to the current Group
     */
    public function users(){
      return $this->belongsToMany(User::class, 'groups_users');
    }    
}
