<?php

namespace CodeAgenda\Entities;

use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    protected $table = "pessoas";

    # o $fillable diz que eu posso editar no put e update
    protected $fillable = [
      'nome',
      'apelido',
      'sexo'
   ];

   # cria o relacionamento
   public function telefones(){}
}
