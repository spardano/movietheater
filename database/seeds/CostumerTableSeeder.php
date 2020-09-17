<?php

use Illuminate\Database\Seeder;

class CostumerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\CostumerModel::class, 100)->create();
    }
}
