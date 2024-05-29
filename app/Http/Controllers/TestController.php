<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        return view('test.index', compact('tasks'));
    }
}
