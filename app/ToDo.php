<?php

namespace App;
use Carbon\Carbon;

use Illuminate\Database\Eloquent\Model;
//use Mvdnbrk\EloquentExpirable\Expirable;

class ToDo extends Model
{
    protected $fillable=['title','completed','due_date'];
    


    public function setDueDateAttribute($date){
    	$this->attributes['due_date']=Carbon::parse($date);
    }
}
