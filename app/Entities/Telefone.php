<?php

namespace CodeAgenda\Entities;

use Illuminate\Database\Eloquent\Model;

class Telefone extends Model
{
    protected $table = "telefones";

    # o $fillable diz que eu posso editar no put e update
    protected $fillable = [
      # deve ser o mesmo nome que está na tabela
      'descricao',
      'codpais',
      'ddd',
      'prefixo',
      'sufixo'
   ];
}
