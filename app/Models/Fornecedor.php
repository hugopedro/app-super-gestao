<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Fornecedor extends Model
{
    use HasFactory;
    use SoftDeletes;

    /* o laravel adiciona s na tabela automaticamente para ficar no plural
    mas nem sempre isso funciona, no caso ficaria "fornecedors", então
    é necessário alterar o nome da tabela manualmente no plural para não dar erro */

    /* Trata-se de um trait (Herança horizontal) - A classe Fornecedor herda coisas 
    da classe Model, mas agora tambem da classe SoftDeletes */

    protected $table = 'fornecedores';
    protected $fillable =['nome', 'site', 'uf', 'email'];
    
    public function produtos()
    {
        return $this->hasMany('App\Models\Item', 'fornecedor_id', 'id');
        // return $this->hasMany('App\Models\Item'); mesma coisa do de cima só que é mais
        // interessante mostrar os parametros, só usa-se isso quando já estiver bem familiarizado
    }
}
