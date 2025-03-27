<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comuna extends Model
{
    use HasFactory;

    protected $table = 'tb_pais'; 
    protected $primaryKey = 'pais_nomb'; 
    public $timestamps = false;
    protected $keyType='string';
}
