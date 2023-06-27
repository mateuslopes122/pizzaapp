<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Enderecos extends Model
{
    use HasFactory;

    protected $table = 'enderecos';
    protected $primaryKey = 'id_endereco';
    protected $date = [
                'created_at',
                'updated_at',
                'deleted_at'
    ];
    protected $fillable = [
        'id_endereco',
        'endereco',
        'numero',
        'complemento',
        'bairro',
        'cidade',
        'uf',
        'cep',
        'observacoes',
    ];

    /*
    * ----------------------------------------------------
        RELACIONAMENTOS
    * ----------------------------------------------------
    */


}
