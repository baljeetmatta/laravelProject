<?php

namespace Database\Seeders;

use App\Models\student;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $data=  File::get(path:'database/students.json');
        $students=collect(json_decode($data));


        // $students=collect([
        //     [
        //         'name'=>fake()->name(),
        //         'city'=>fake()->city(),

        //     ],
        //     [
        //         'name'=>fake()->name(),
        //         'city'=>fake()->city(),

        //     ],
        //     [
        //         'name'=>fake()->name(),
        //         'city'=>fake()->city(),

        //     ],
            
        // ]);

        $students->each((function($student){
            student::insert($student);
        }));
        


    }

    
}
