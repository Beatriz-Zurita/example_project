<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{

    protected $fillable = [
        'id', 'name'
    ];

    public function categories()
    {
        return $this->belongsToMany('App\Category', 'categories_tasks', 'task_id', 'category_id');
    }
    
}
