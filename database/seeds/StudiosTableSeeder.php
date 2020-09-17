<?php

use Illuminate\Database\Seeder;

class StudiosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\StudiosModel::class, 7)->create();
    }
}
