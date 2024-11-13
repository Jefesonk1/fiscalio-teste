<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $table = 'ITEM';
    protected $primaryKey = ['id_nota','id_item'];
    public $incrementing = false;
    public $timestamps = false;
    protected $fillable = [
        'id_nota',
        'id_item',
        'produto',
        'valor'
    ];
}
