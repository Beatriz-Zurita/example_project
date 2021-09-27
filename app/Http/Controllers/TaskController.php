<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

use DB;
use App\Models\Task;
use App\Models\Category;

class TaskController extends Controller
{

    public function index()
    {

        $tasks = Task::all();
        $categories = Category::all();

        return view('tasks.browse', compact([
            'tasks',
            'categories'
        ]));
    } 

    
}
