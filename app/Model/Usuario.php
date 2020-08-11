<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Carbon\Carbon;
//use Illuminate\Support\Facades\DB;

class Usuario extends Model
{
    protected $connection = 'sqlite';
    protected $table = 'usuario';

    public static function listar(int $limite){
        $sql = self::select(
            [
                "id",
                "nome",
                "email",
                "senha",
                "data_cadastro"
            ]
        )
        ->limit($limite);

        return $sql->get();

        //dd($sql->toSql());

    }

    public static function cadastrar(Request $request){
     //  DB::enableQueryLog();
        $sql = self::insert(
            [
                "nome" => $request->input('nome'),
                "email" => $request->input('email'),
                "senha" => $request->input('senha'),
                "data_cadastro" => new Carbon()
            ]
            );

     // dd(DB::getQueryLog());



    }





}
