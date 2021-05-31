<?php

use App\Models\Task;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\TaskController;


Route::group(['middleware' => ['web']], function () {
  /**
  * Show Task Dashboard
  */
  Route::get('/', function () {
    return view('tasks', [
      'tasks' => Task::orderBy('created_at', 'asc')->get()
    ]);
  });

  /**
  * Add New Task
  */
  Route::post('/task', function (Request $request) {
    $validator = Validator::make($request->all(), [
      'name' => 'required|max:255',
    ]);

    if ($validator->fails()) {
      return redirect('/')
      ->withInput()
      ->withErrors($validator);
    }

    $task = new Task;
    $task->name = $request->name;
    $task->save();

    return redirect('/');
  });

  Route::get('task/edit/{id}', function ($id) {
    $task = Task::find($id);
    return view('edit-task', ['task' => $task]);
  })->name('task.edit');

Route::put('task/{id}', 'TaskController@update')->name('task.update');

Route::get('task/editDone/{id}', function ($id) {
  $task = Task::find($id);
  $change=1;
  if($task->done) $change=0;
  Task::where('id', $id)
->update(['done' => $change]);
return redirect('/');
})->name('task.done');


  Route::delete('/task/{id}', function ($id) {
    Task::findOrFail($id)->delete();
    return redirect('/');
  });

});
