<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Task;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    public function createtask(){
        $users = User::all();
        $tasks = Task::all();
        
         $tasks= Task::where('assignedto',Auth::id())->get();
       
        return view('page-tasks',compact('users','tasks'));
       

       
    }
    public function taskstore(Request $request){
       $request->validate([
        'taskname'=>'required',
        'assignedto'=>'required',
       ]);

       $user = new Task();
       $user->taskname = $request->taskname;
       $user->assignedto = $request->assignedto;
       $user->description = $request->description;
       $user->category = $request->category;
       
       $user->save();
       
       return redirect()->back()->with('success', 'Task Successfully Asigned');

    }
    public function desk(){
       $projects = Task::all();
       $members = User ::all();
       $tasks= Task::where('assignedto',Auth::id())->get();
    //   dd($tasks);
        return view('page-desk',compact('projects','members'));

    }
   public function deskstore(Request $request){
    Task::create($request->all()); 
    return redirect()->back()->with('success','Project Successfully assigned');
}

   }

