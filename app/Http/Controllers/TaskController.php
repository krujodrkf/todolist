<?php

namespace App\Http\Controllers;
use App\Models\Task;

use Illuminate\Http\Request;

class TaskController extends Controller
{
  public function update(Request $task)
  {
    Task::where('id', $task->id)
    ->update(['name' => $task->name]);
    return redirect('/');
  }
}
