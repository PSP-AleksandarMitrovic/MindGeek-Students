<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(SchoolBoardSeeder::class);
        $this->call(StudentSeeder::class);
        $this->call(GradeSeeder::class);
        $this->call(GradeStudentSeeder::class);

    }
}
