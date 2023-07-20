<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class Department extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $department = [
            [
                'name' => 'IT',

            ],
            [
                'name' => 'CS',

            ],
            [
                'name' => 'IS',

            ],
        ];

        \DB::table('departments')->insert($department);
    }
}
