<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mytime = Carbon::now();
        DB::table('categories')->insert([
            'name_category' => 'Accion',
            'created_at' => $mytime,
        ]);
        DB::table('categories')->insert([
            'name_category' => 'Animacion',
            'created_at' => $mytime,
        ]);
        DB::table('categories')->insert([
            'name_category' => 'Comedia',
            'created_at' => $mytime,
        ]);
        DB::table('categories')->insert([
            'name_category' => 'Documental',
            'created_at' => $mytime,
        ]);
        DB::table('categories')->insert([
            'name_category' => 'Drama',
            'created_at' => $mytime,
        ]);
        DB::table('categories')->insert([
            'name_category' => 'Familiar',
            'created_at' => $mytime,
        ]);
        DB::table('categories')->insert([
            'name_category' => 'Ciencia Ficcion',
            'created_at' => $mytime,
        ]);
        DB::table('categories')->insert([
            'name_category' => 'Terror',
            'created_at' => $mytime,
        ]);
        DB::table('categories')->insert([
            'name_category' => 'Fantasia',
            'created_at' => $mytime,
        ]);DB::table('categories')->insert([
            'name_category' => 'Suspenso',
            'created_at' => $mytime,
        ]);
        DB::table('categories')->insert([
            'name_category' => 'Romance',
            'created_at' => $mytime,
        ]);
    }
}
