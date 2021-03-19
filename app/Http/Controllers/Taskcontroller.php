<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class Taskcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks=Task::all();
        return view("pages.home")->with("tasks",$tasks);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        $task=new Task;
        $task->todo=$req->new_task;
        $task->done=false;
        $task->save();

        return redirect()->route('tasks.index');
    }

    public function show($id)
    {
        $task=Task::find($id);
        return view('pages.task')->with("task",$task);
    }


    public function edit($id)
    {
        $task=Task::find($id);
        return view('pages.edit')->with("task",$task);
    }


    public function update(Request $req, $id)
    {
        $task=Task::find($id);
        $task->todo=$req->new_task;
        $task->done=$req->done;
        if($task->todo == null){
            $task=Task::find($id);
            if($task->done==true){
                $task->done=false;
                $task->save();
                return redirect()->route('tasks.index');
            }else{
                $task->done=true;
                $task->save();
                return redirect()->route('tasks.index');
                
            }
        }else{
            $task=Task::find($id);
            $task->todo=$req->new_task;
            $task->save();
            return redirect()->route('tasks.index');
        }
    }


    public function destroy($id)
    {
        $task=Task::destroy($id);
        return redirect()->route('tasks.index');   
    }
}
