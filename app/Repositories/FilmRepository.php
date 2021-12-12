<?php

namespace App\Repositories;

use App\Models\Film;
use App\Models\Category;
use App\Models\Type;

/**
 * Class FilmRepository
 *
 * @package App\Repositories
 * @version December 11, 2021, 3:30 pm UTC
 * @method Product getFilms($request(*))
 */
class FilmRepository
{

    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id_category', 
        'id_type', 
        'name_film', 
        'year_film', 
        'created_at', 
        'updated_at', 
        'deleted_at'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Film::class;
    }

    /**
     * Consultar los productos modificados desde una fecha especifica
     *
     * @param Request $request Contiene los filtros a aplicar en la consulta
     * @return mixed Contiene una colección con los productos obtenidos de la base de datos
     * @author Jhon García
     */
    public function getFilms($request)
    {
        $films = Film::join('categories','categories.id_category', '=', 'films.id_category')
                ->join('types', 'types.id_type', '=', 'films.id_type')
                ->whereNull('films.deleted_at')
                ->select('id_film','name_film','year_film','categories.id_category','name_category','types.id_type','name_type');
        if($request->name_type){
            $films->where('name_type','=',$request->name_type);
        }
        if($request->id_type){
            $films->where('films.id_type','=',$request->id_type);
        }

        return $films->orderBy('name_film', 'ASC')->get();
    }

    public function rentFilms($request)
    {
        $films = Film::join('categories','categories.id_category', '=', 'films.id_category')
                ->join('types', 'types.id_type', '=', 'films.id_type')
                ->whereNull('films.deleted_at')
                ->select('id_film','name_film','year_film','categories.id_category','name_category','types.id_type','name_type');
        if($request->name_type){
            $films->where('name_type','=',$request->name_type);
        }
        if($request->id_type){
            $films->where('films.id_type','=',$request->id_type);
        }

        return $films->orderBy('name_film', 'ASC')->get();
    }

    public function filmById($id_film)
    {
        $film = Film::join('categories','categories.id_category', '=', 'films.id_category')
                ->join('types', 'types.id_type', '=', 'films.id_type')
                ->whereNull('films.deleted_at')
                ->select('id_film','name_film','year_film','categories.id_category','name_category','types.id_type','name_type')
                ->where('films.id_film','=',$id_film);
        return $film->first();
    }

    public function createFilm($request){

        if(!isset($request->id_category)){
            $id_category = Category::where('name_category','=',$request->name_category)->select('id_category')->first();
            $id_category = $id_category->id_category;
        }

        if(!isset($request->id_type)){
            $id_type = Type::where('name_type','=',$request->name_type)->select('id_type')->first();
            $id_type = $id_type->id_type;
        }

        $rentInsert = Film::insert([
            'name_film' => $request->name_film,
            'year_film' => $request->year_film,
            'id_category' => isset($request->id_category)?$request->id_category:$id_category,
            'id_type' => isset($request->id_type)?$request->id_type:$id_type,
        ]);

        return $rentInsert;

    }

   
}
