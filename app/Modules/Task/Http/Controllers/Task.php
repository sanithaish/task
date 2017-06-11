<?php

namespace App\Modules\Task\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class Task extends Controller
{
    public function index(){
        return view('task::task_list');
    }
    
    public function addTask(){
        return view('task::add_task');
    }
}
