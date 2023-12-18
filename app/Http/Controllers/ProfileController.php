<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Task;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class ProfileController extends Controller
{
    public function logout(Request $request): RedirectResponse
         {
             Auth::guard('web')->logout();
    
            $request->session()->invalidate();
    
             $request->session()->regenerateToken();
    
             return redirect('/login');
  }


  public function project()
  {
    $projects = Task::all();
    $members = User ::all();
 $projects= Task::where('assignedto',Auth::id())->get();
     return view('page-project',compact('projects','members'));
    
}

  public function show()
  {
    return view('edit-profile');
  }
    
    public function edituser($id)
    {
        $user = DB::table('users')->find($id);
       return view('edit-profile',['user'=>$user]);
        
    }

    public function updateuser(Request $request,$id)
    { 
        DB::table('users')->where('id',$id)->update([
        'name'=> $request->name,
    ]);
    return redirect('user-list');

    }
     public function destroy($id)
     {
       DB::table('users')->where('id',$id)->delete();
       return redirect('user-list');
     }
     public function index(){


        return view('/dashboard');
     }
    
    public function list()
    {
        
        $users = User::all();
        return view('user-list',['users'=>$users]);   
        
    }
    public function registeruser()
    {
        return view('user-add');
    }
    public function storeuser(Request $request){
        {
            $request->validate([
                'firstname'=>'required',
                'lastname'=>'required',
                'email'=>'required|email|unique:users',
                'phoneno'=>'required',
                'password'=>'required',
                'repeatpassword'=>'required'
            ]);
    
    
            $user = new User;
            $user->name = $request->firstname;
            $user->lastname = $request->lastname;
            $user->username = $request->username;
            $user->email  = $request->email;
            $user->streetaddress1 = $request->streetaddress1;
            $user->streetaddress2 = $request->streetaddress2;
            $user->companyname = $request->companyname;
            $user->country = $request->country;
            $user->phoneno = $request->phoneno;
            $user->alternatecontact = $request->alternatecontact;
            $user->pincode = $request->pincode;
            $user->city = $request->city;
            $user->password = $request->password;
            $user->repeatpassword = $request->repeatpassword;
            
            $user->save();
           
    
            return back()->with('success', 'Registration successfully done');
        } 
            
            return back()->with('fail', 'Something went wrong');
        }

        public function editprofile(){
            return view('profile-update');
        }
        public function update(Request $request)
    {
        $user = $request->user();

        $user->name = $request->input('firstname');
        $user->lastname = $request->input('lastname');
        $user->phoneno = $request->input('phoneno');
        $user->email = $request->input('email');
        $user->password = $request->input('password');

        $user->save();

        return back()->with('status', 'Profile updated!');
    }
    public function profile(){
        $user = DB::table('users')->where('id',Auth::id())->get();
        return view('user-profile',compact('user'));

    }

    
       
    }
    
