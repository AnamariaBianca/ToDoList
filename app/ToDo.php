<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Mvdnbrk\EloquentExpirable\Expirable;

class ToDo extends Model
{
    protected $fillable=['title','completed'];

    // public function getRouteKeyName()
    // {
    // 	return 'title';
    // }

    use Expirable;
    const EXPIRES_AT = 'due_date';
}
