<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Client;
use App\Models\City;
use App\Models\schoolClass;
use App\Models\StudentClasses;
use App\Models\Student;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        //$this->call([
           // ClientSeeder::class,
        //]);
        User::factory(50)->create();
        City::factory(50)->create();
        Client::factory(50)->create();
        $classes = SchoolClass::factory(50)->create();
        $students = Student::factory(50)->create();
        
       // if (!User::where('email', 'test@example.com')->exists()) {
            //User::factory()->create([
               // 'name' => 'Test User',
              //  'email' => 'test@example.com',
           // ]);
       // }


       // Attach students to classes
       $students->each(function ($student) use ($classes) {
         StudentClasses::factory()->create([
             'student_id' => $student->id,
             'class_id' => $classes->random()->id,
         ]);
     });
    }
}
