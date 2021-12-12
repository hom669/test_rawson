<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class RentalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mytime = Carbon::now();
        DB::table('rentals')->insert([
            'value_rental' => '3',
            'created_at' => $mytime,
        ]);
    }
}
