<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class CreatesController extends Controller
{
    //
    public function home()
    {
        $user=User::all();
        return view('home',['users'=>$user]);
    }

    public function add(Request $request)
    {
        $this->validate($request,[
            'title'=>'required',
            'descriptioin' =>'required'
        ]);
        $users=new User;
        $users->title=$request->input('title');
        $users->descriptioin=$request->input('descriptioin');
        $users->save();
        return redirect('/')->with('info','Article saved Successfull!');
    }

    public function update($id)
    {
        $user=User::find($id);
        return view('update',['users'=>$user]);
    }

    public function edit(Request $request,$id){
        $this->validate($request,[
            'title'=>'required',
            'descriptioin' =>'required'
        ]);
        $data=array(
            'title'=>$request->input('title'),
            'descriptioin'=>$request->input('descriptioin')
        );
        User::where('id',$id)->update($data);
        return redirect('/')->with('info','Article Updated Successfull!');
    }

    public function read($id)
    {
        $user=User::find($id);
        return view('read',['users'=>$user]);
    }

    public function delete($id)
    {
        User::where('id',$id)->delete();
        return redirect('/')->with('info','Article Deleted Successfull!');
    }
}
