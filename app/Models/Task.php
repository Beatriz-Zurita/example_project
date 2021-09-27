<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{

    protected $fillable = [
        'id', 'name'
    ];

    public function categories()
    {
        return $this->belongsToMany('App\Models\Category', 'categories_tasks', 'task_id', 'category_id');
    }
    
}
