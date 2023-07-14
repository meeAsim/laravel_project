<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index()
    {
        $users = user::all()->sortByDesc('id');
        return view('welcome',['users'=>$users]);
    }

    public function addData(Request $request)
    {
        $userdata = $request->validate([
            'first_name' =>['required'],
            'middle_name' =>['required'],
            'last_name' =>['required'],
            'gender'=>['required'],
            'age' =>['required','numeric'],
            'address' =>['nullable'],
            'city' =>['nullable'],
            'state' =>['nullable'],
            'country' =>['nullable'],
            'zip' =>['nullable','numeric']



        ]);
        user::create($userdata);
        return redirect('index')->with('success','User added Successfully');;
    }


    public function destroy(string $id)
    {
        user::where('id','=',$id)->delete();
        return redirect()->back()->with('success','User deleted Successfully');
        // return redirect('index');
    }

}
