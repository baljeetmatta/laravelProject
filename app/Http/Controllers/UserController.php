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
/*

1. CREATE A DATABASE
   create a database in mysql 

2. DATABASE MIGRATION
   creating database -> tables
   Database first approach -> my tables
   Code First Approach -> Tables->laravel->db update(create, changes)
   Table Changes->
    Table up/down
3. SEEDING
     <Tables->
        <empty-></empty->
     </Tables->
     Seeders ->Real/fake

     Factory ->Fake Data

4. MODEL
    Classes for each Table

*/
