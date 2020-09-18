<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(MoviesTableSeeder::class);
        $this->call(CostumerTableSeeder::class);
        $this->call(PaymentsTableSeeder::class);
        $this->call(SeatTableSeeder::class);
        $this->call(ShowsTableSeeder::class);
        $this->call(StaffTableSeeder::class);
        $this->call(StudiosTableSeeder::class);
        $this->call(TicketsTableSeeder::class);
    }
}
