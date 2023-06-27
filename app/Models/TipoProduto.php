<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TipoPedido extends Model
{
    use SoftDeletes;

    protected $table = 'tipos_produtos';
    protected $primaryKey = 'id_tipo_produto';
    protected $dates = [
                'created_at',
                'updated_at',
                'deleted_at'
    ];

    protected $fillable = [
        'tipo_produto'
    ];

}
