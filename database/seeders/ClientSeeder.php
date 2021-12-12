<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mytime = Carbon::now();
        DB::table('clients')->insert([
            'name_client' => 'Pedro Perez',
            'identification_client' => '123456',
            'created_at' => $mytime,
        ]);
        DB::table('clients')->insert([
            'name_client' => 'Pedro Perez',
            'identification_client' => '123456',
            'created_at' => $mytime,
        ]);
        DB::table('clients')->insert([
            'name_client' => 'Juan Rodiguez',
            'identification_client' => '1234567',
            'created_at' => $mytime,
        ]);
        DB::table('clients')->insert([
            'name_client' => 'Carla Giraldo',
            'identification_client' => '12345678',
            'created_at' => $mytime,
        ]);
        DB::table('clients')->insert([
            'name_client' => 'Stefany Figueroa',
            'identification_client' => '12345699',
            'created_at' => $mytime,
        ]);
    }
}
