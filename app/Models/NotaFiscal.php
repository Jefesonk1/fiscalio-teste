<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NotaFiscal extends Model
{
    protected $table = 'NOTA_FISCAL';
    protected $primaryKey = 'id_nota';
    public $incrementing = false;
    public $timestamps = false;
    protected $fillable = [
        'id_nota',
        'emissor',
        'data',
    ];
}
