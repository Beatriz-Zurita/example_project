<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use Illuminate\Http\Request;

use DB;
use App\Models\Task;
use App\Models\Category;
use App\Models\CategoriesTask;

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

    public function add(Request $request)
    {
        $task = new Task();
        $task->name = $request->name;
        $task->save();

        $task->categories()->attach($request->categories);
        $category = Category::find($request->categories);

        $data['task'] = $task;
        $data['category'] = $category;

        return $data;
    } 

    public function delete(Request $request)
    {
        return Task::find($request->id)->delete();
    } 



    
}
