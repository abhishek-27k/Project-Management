<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //
      protected $fillable = [
    		'name',
    		'hours',
    		'days',
    		'project_id',
    		'company_id',
    		'user_id'
    ];

     public function user(){
        return $this->belongsTo('App\User');
    }

     public function company(){
        return $this->hasMany('App\Company');
    }

     public function project(){
        return $this->hasMany('App\Project');
    }
     public function users(){
        return $this->belongsToMany('App\User');

    }

      public function comments(){
      return $this->morphMany('App\comment', 'commentable');
    }


}

