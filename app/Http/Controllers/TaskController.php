<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

use App\Models\Task;

class TaskController extends Controller
{
    public function index(){
        $tasks = Task::where("iscompleted", false)->orderBy("id", "desc")->get();
        $completed_tasks = Task::where("iscompleted", true)->get();
        return view("todo", compact("tasks", "completed_tasks"));
        //compact helps pass the variables to the welcome view
    }

    public function store(Request $request)
    {
        Task::create([
            'title'=>$request->title,
            'details'=>$request->details
        ]);
        return Redirect::back()->with("message", "Task has been added");
    }

    public function complete($id)
    {
        $task = Task::find($id);
        $task->iscompleted = true;
        $task->save();
        return Redirect::back()->with("message", "Task has been added to completed list");
    }

    public function update($id)
    {
        $task = Task::find($id);
        $task->details = request("details_u");
        $task->save();
        return Redirect::back()->with("message", "Task has been Updated");
    }

    public function destroy($id)
    {
        $task = Task::find($id);
        $task->delete();
        return Redirect::back()->with('message', "Task has been deleted");
    }
}
