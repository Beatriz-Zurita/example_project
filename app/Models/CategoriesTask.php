<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class CategoriesTask extends Model
{

    protected $fillable = [
        'id', 'task_id', 'category_id'
    ];
    
}
