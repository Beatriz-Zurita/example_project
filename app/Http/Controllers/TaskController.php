<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

use DB;

class TaskController extends Controller
{

    public function index()
    {
        return view('tasks.browse');
    }

    
}
