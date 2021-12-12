<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class FilmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mytime = Carbon::now();
        $categoryAccion = DB::table('categories')->select('id_category')->where('name_category','=','Accion')->first();
        $categoryComedia = DB::table('categories')->select('id_category')->where('name_category','=','Comedia')->first();
        $categoryDocumental = DB::table('categories')->select('id_category')->where('name_category','=','Documental')->first();
        $categoryDrama = DB::table('categories')->select('id_category')->where('name_category','=','Drama')->first();
        $categoryFamiliar = DB::table('categories')->select('id_category')->where('name_category','=','Familiar')->first();
        $categoryCienciaFiccion = DB::table('categories')->select('id_category')->where('name_category','=','Ciencia Ficcion')->first();
        $categoryTerror = DB::table('categories')->select('id_category')->where('name_category','=','Terror')->first();
        $categoryFantasia = DB::table('categories')->select('id_category')->where('name_category','=','Fantasia')->first();
        $categorySuspenso = DB::table('categories')->select('id_category')->where('name_category','=','Suspenso')->first();
        $categoryRomance = DB::table('categories')->select('id_category')->where('name_category','=','Romance')->first();
        $typeNormal = DB::table('types')->select('id_type')->where('name_type','=','Normales')->first();
        $typeAntigua = DB::table('types')->select('id_type')->where('name_type','=','Antiguas')->first();
        $typeNuevos = DB::table('types')->select('id_type')->where('name_type','=','Nuevos Lanzamientos')->first();
        DB::table('films')->insert([
            'name_film' => 'El Caballero Oscuro',
            'year_film' => '2008',
            'id_category' => $categoryAccion->id_category,
            'id_type' => $typeNormal->id_type,
            'created_at' => $mytime,
        ]);
        DB::table('films')->insert([
            'name_film' => 'Avengers: La Era de Ultron',
            'year_film' => '2015',
            'id_category' => $categoryAccion->id_category,
            'id_type' => $typeNormal->id_type,
            'created_at' => $mytime,
        ]);
        DB::table('films')->insert([
            'name_film' => 'Shang-Chi',
            'year_film' => '2021',
            'id_category' => $categoryAccion->id_category,
            'id_type' => $typeNuevos->id_type,
            'created_at' => $mytime,
        ]);
        DB::table('films')->insert([
            'name_film' => 'Aves de Presa (Y la Hermosa Emancipacion de Harley Quinn)',
            'year_film' => '2020',
            'id_category' => $categoryAccion->id_category,
            'id_type' => $typeNuevos->id_type,
            'created_at' => $mytime,
        ]);
        DB::table('films')->insert([
            'name_film' => 'Matrix',
            'year_film' => '1999',
            'id_category' => $categoryAccion->id_category,
            'id_type' => $typeAntigua->id_type,
            'created_at' => $mytime,
        ]);
        DB::table('films')->insert([
            'name_film' => 'Avatar',
            'year_film' => '2009',
            'id_category' => $categoryCienciaFiccion->id_category,
            'id_type' => $typeNormal->id_type,
            'created_at' => $mytime,
        ]);
        DB::table('films')->insert([
            'name_film' => 'El Planeta de Los Simios',
            'year_film' => '1968',
            'id_category' => $categoryCienciaFiccion->id_category,
            'id_type' => $typeAntigua->id_type,
            'created_at' => $mytime,
        ]);
        DB::table('films')->insert([
            'name_film' => 'StarWars:El Imperio Contraataca',
            'year_film' => '1980',
            'id_category' => $categoryCienciaFiccion->id_category,
            'id_type' => $typeAntigua->id_type,
            'created_at' => $mytime,
        ]);
        DB::table('films')->insert([
            'name_film' => 'Regreso al Futuro III',
            'year_film' => '1990',
            'id_category' => $categoryCienciaFiccion->id_category,
            'id_type' => $typeAntigua->id_type,
            'created_at' => $mytime,
        ]);
        DB::table('films')->insert([
            'name_film' => 'Interstellar',
            'year_film' => '2014',
            'id_category' => $categoryCienciaFiccion->id_category,
            'id_type' => $typeNormal->id_type,
            'created_at' => $mytime,
        ]);
        DB::table('films')->insert([
            'name_film' => 'Paul',
            'year_film' => '2011',
            'id_category' => $categoryComedia->id_category,
            'id_type' => $typeNormal->id_type,
            'created_at' => $mytime,
        ]);
        DB::table('films')->insert([
            'name_film' => 'Red Notice',
            'year_film' => '2021',
            'id_category' => $categoryComedia->id_category,
            'id_type' => $typeNuevos->id_type,
            'created_at' => $mytime,
        ]);
        DB::table('films')->insert([
            'name_film' => 'Mi Pobre Angelito 1',
            'year_film' => '1990',
            'id_category' => $categoryComedia->id_category,
            'id_type' => $typeAntigua->id_type,
            'created_at' => $mytime,
        ]);
        DB::table('films')->insert([
            'name_film' => 'Bad Boys Para Siempre',
            'year_film' => '2020',
            'id_category' => $categoryComedia->id_category,
            'id_type' => $typeNuevos->id_type,
            'created_at' => $mytime,
        ]);
        DB::table('films')->insert([
            'name_film' => 'Deadpool',
            'year_film' => '2016',
            'id_category' => $categoryComedia->id_category,
            'id_type' => $typeNormal->id_type,
            'created_at' => $mytime,
        ]);
        DB::table('films')->insert([
            'name_film' => 'Deadpool',
            'year_film' => '2016',
            'id_category' => $categoryComedia->id_category,
            'id_type' => $typeNormal->id_type,
            'created_at' => $mytime,
        ]);
        DB::table('films')->insert([
            'name_film' => 'Parasitos',
            'year_film' => '2019',
            'id_category' => $categoryDrama->id_category,
            'id_type' => $typeNuevos->id_type,
            'created_at' => $mytime,
        ]);
        DB::table('films')->insert([
            'name_film' => '1917',
            'year_film' => '2019',
            'id_category' => $categoryDrama->id_category,
            'id_type' => $typeNuevos->id_type,
            'created_at' => $mytime,
        ]);
        DB::table('films')->insert([
            'name_film' => 'Parasitos',
            'year_film' => '2019',
            'id_category' => $categoryDrama->id_category,
            'id_type' => $typeNuevos->id_type,
            'created_at' => $mytime,
        ]);
        DB::table('films')->insert([
            'name_film' => 'Un Sueño Posible',
            'year_film' => '2009',
            'id_category' => $categoryDrama->id_category,
            'id_type' => $typeNormal->id_type,
            'created_at' => $mytime,
        ]);
        DB::table('films')->insert([
            'name_film' => 'El Pianista',
            'year_film' => '2002',
            'id_category' => $categoryDrama->id_category,
            'id_type' => $typeAntigua->id_type,
            'created_at' => $mytime,
        ]);
        DB::table('films')->insert([
            'name_film' => 'Las Cronicas de Navidad 2',
            'year_film' => '2019',
            'id_category' => $categoryFamiliar->id_category,
            'id_type' => $typeNuevos->id_type,
            'created_at' => $mytime,
        ]);
        DB::table('films')->insert([
            'name_film' => 'Monster University',
            'year_film' => '2013',
            'id_category' => $categoryFamiliar->id_category,
            'id_type' => $typeNormal->id_type,
            'created_at' => $mytime,
        ]);
        DB::table('films')->insert([
            'name_film' => 'Coco',
            'year_film' => '2017',
            'id_category' => $categoryFamiliar->id_category,
            'id_type' => $typeNuevos->id_type,
            'created_at' => $mytime,
        ]);
        DB::table('films')->insert([
            'name_film' => 'La vida secreta de tus mascotas',
            'year_film' => '2016',
            'id_category' => $categoryFamiliar->id_category,
            'id_type' => $typeNormal->id_type,
            'created_at' => $mytime,
        ]);
        DB::table('films')->insert([
            'name_film' => 'El Grinch',
            'year_film' => '2018',
            'id_category' => $categoryFamiliar->id_category,
            'id_type' => $typeNormal->id_type,
            'created_at' => $mytime,
        ]);
        DB::table('films')->insert([
            'name_film' => 'Eterno Resplandor',
            'year_film' => '2004',
            'id_category' => $categoryRomance->id_category,
            'id_type' => $typeNormal->id_type,
            'created_at' => $mytime,
        ]);
        DB::table('films')->insert([
            'name_film' => 'Cuestion de Tiempo',
            'year_film' => '2013',
            'id_category' => $categoryRomance->id_category,
            'id_type' => $typeNormal->id_type,
            'created_at' => $mytime,
        ]);
        DB::table('films')->insert([
            'name_film' => 'Tres Metros Sobre el Cielo',
            'year_film' => '2010',
            'id_category' => $categoryRomance->id_category,
            'id_type' => $typeNormal->id_type,
            'created_at' => $mytime,
        ]);
        DB::table('films')->insert([
            'name_film' => 'A dos Metros de Ti',
            'year_film' => '2019',
            'id_category' => $categoryRomance->id_category,
            'id_type' => $typeNuevos->id_type,
            'created_at' => $mytime,
        ]);
        DB::table('films')->insert([
            'name_film' => 'Mas alla de los sueños',
            'year_film' => '1988',
            'id_category' => $categoryRomance->id_category,
            'id_type' => $typeAntigua->id_type,
            'created_at' => $mytime,
        ]);
        DB::table('films')->insert([
            'name_film' => 'HellRaiser',
            'year_film' => '1987',
            'id_category' => $categoryTerror->id_category,
            'id_type' => $typeAntigua->id_type,
            'created_at' => $mytime,
        ]);
        DB::table('films')->insert([
            'name_film' => 'El Aro',
            'year_film' => '2002',
            'id_category' => $categoryTerror->id_category,
            'id_type' => $typeAntigua->id_type,
            'created_at' => $mytime,
        ]);
        DB::table('films')->insert([
            'name_film' => 'El Conjuro 3: El diablo me obligo a hacerlo',
            'year_film' => '2021',
            'id_category' => $categoryTerror->id_category,
            'id_type' => $typeNuevos->id_type,
            'created_at' => $mytime,
        ]);
        DB::table('films')->insert([
            'name_film' => 'La Noche del Demonio: Capitulo 4',
            'year_film' => '2018',
            'id_category' => $categoryTerror->id_category,
            'id_type' => $typeNuevos->id_type,
            'created_at' => $mytime,
        ]);
        DB::table('films')->insert([
            'name_film' => 'El Exorcista',
            'year_film' => '1973',
            'id_category' => $categoryTerror->id_category,
            'id_type' => $typeAntigua->id_type,
            'created_at' => $mytime,
        ]);
    }
}
