<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    
    public function showData()
    {
        $name="Code";
        $city="Delhi";
//return view('page')
 return view('page',['name'=>$name,'city'=>$city]);
       //return view('page')->with('name',$name)->with('city',$city);
      // return view ('page')->withName($name)->withCity($city);


    }
    //
    public function showUsers()
    {
        $users=[1=>['name'=>'Code','city'=>'Delhi'],
                2=>['name'=>'Coding','city'=>'Mumbai']];

        
        return view('users.showusers',['users'=>$users]);

        
    }

    public function showUser(string $id)
    {

         $users=[1=>['name'=>'Code','city'=>'Delhi'],
                2=>['name'=>'Coding','city'=>'Mumbai']];

        $user=$users[$id];

        

        //return view('users.showuser',['id'=>$id]);
        return view('users.showuser',['user'=>$user]);



    }
}
