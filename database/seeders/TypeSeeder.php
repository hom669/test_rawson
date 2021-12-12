<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mytime = Carbon::now();
        DB::table('types')->insert([
            'name_type' => 'Nuevo Lanzamiento',
            'created_at' => $mytime,
        ]);
        DB::table('types')->insert([
            'name_type' => 'Vieja',
            'created_at' => $mytime,
        ]);
        DB::table('types')->insert([
            'name_type' => 'Normal',
            'created_at' => $mytime,
        ]);
    }
}
