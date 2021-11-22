<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fornecedor extends Model
{
    use HasFactory;

    /* o laravel adiciona s na tabela automaticamente para ficar no plural
    mas nem sempre isso funciona, no caso ficaria "fornecedors", então
    é necessário alterar o nome da tabela manualmente no plural para não dar erro */

    protected $table = 'fornecedores';
}
