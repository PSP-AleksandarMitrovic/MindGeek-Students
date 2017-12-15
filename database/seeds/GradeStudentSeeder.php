<?php

use Illuminate\Database\Seeder;

class GradeStudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $grades = \App\Modules\Grade\Models\Grade::all()->pluck('id')->toArray();

        foreach(\App\Modules\Student\Models\Student::all() as $student){
            $counter = mt_rand(1,4);
            $count = 0;
            while($count < $counter){
                $student->grades()->attach(
                    [
                        $grades[array_rand($grades, 1)]
                    ]
                );
                $count++;
            }
        }
    }
}
