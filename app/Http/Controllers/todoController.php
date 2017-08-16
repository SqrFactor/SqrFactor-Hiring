<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tasks;

class todoController extends Controller
{
    
    public function index(){
        
        
        $tasks = tasks::all();
        
        return view('/tasks', compact('tasks'));
    }
    
    public function create(Request $request){
        
        $task =  new tasks;
        $task->body = $request->taskCreate;
        $task->completed = 0;
        $task->save();
        
        return redirect()->back();
    }
    
    public function delete($id){
        
        //dd($id);
        $task =  tasks::find($id)->delete();
        //$task->body = $request->taskCreate;
        //$task->completed = 0;
        //$task->save();
        
        return redirect()->back();
    }
    
    public function update($id){
        
        //dd($id);
        $task =  tasks::find($id);
        //$task->body = $request->taskCreate;
        //$task->completed = 0;
        //$task->save();
        
        return view('/task-update', compact('task')) ;
    }
    
      public function save(Request $request, $id){
        
        //dd($id);
        $task =  tasks::find($id);
        $task->body = $request->taskCreate;
        //$task->completed = 0;
        $task->save();
        
        return redirect()->route('tasks.index') ;
    }
}
