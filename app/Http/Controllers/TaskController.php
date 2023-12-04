<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    // create task
    function createTask(Request $req){

        $task = Task::create([
            'taskName' => $req->taskName,
            'description' => $req->description,
            'status' => $req->status,
            'priority' => $req->priority,
        ]);

        if($task){
            return response()->json([
                'status' => 200,
                'tasks' => $task,
                'message' => "New Task Created Successfully"
            ], 200);
        }else{
            return response()->json([
                'status' => 500,
                'message' => "Something Went Wrong"
            ], 500);
        }

    }

    // fetch all tasks
    function getTask(){
        $task = Task::all();
        if($task->count() > 0){
            return response()->json([
                'status' => 200,
                'tasks' => $task
            ], 200);
        }
        else{
            return response()->json([
                'status' => 200,
                'tasks' => $task,
                'message' => "No Records Found"
            ], 200);
        }
    }

    // delete task
    function deleteTask($id){
        $task = Task::find($id);
        if($task){
            $task->delete();
            return response()->json([
                'status' => 200,
                'message' => "Task Deleted Successfully"
            ], 200);
        }
        else{
            return response()->json([
                'status' => 404,
                'message' => "No Such Records Found"
            ], 404);
        }
    }

    // update task
    function updateTask($id){
        $task = Task::find($id);
        return $task;
    }

    function updateNow(Request $req, int $id){
        $task = Task::find($id);

        if($task){
            $task->update([
                'taskName' => $req->taskName,
                'description' => $req->description,
                'status' => $req->status,
                'priority' => $req->priority,
            ]);

            return response()->json([
                'status' => 200,
                'message' => "Task updated successfully"
            ], 200);
        }else{
            return response()->json([
                'status' => 404,
                'message' => "No Such Task Found!"
            ], 404);
        }
    }


}
