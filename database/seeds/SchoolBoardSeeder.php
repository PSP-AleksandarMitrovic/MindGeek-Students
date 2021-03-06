<?php

use Illuminate\Database\Seeder;

class SchoolBoardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Modules\SchoolBoard\Models\SchoolBoard::create(
            [
                "name" => "CSM",
                "output" => "JSON"
            ]
        );
        \App\Modules\SchoolBoard\Models\SchoolBoard::create(
            [
                "name" => "CSMB",
                "output" => "XML"
            ]
        );
    }
}
