<?php

use Illuminate\Database\Seeder;

class GradeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach(range(1,10) as $grade){
            \App\Modules\Grade\Models\Grade::create(
                [
                    "grade" => $grade
                ]
            );
        }
    }
}
