<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    protected $fillable=['NombreArticulo','Seccion','Precio','Fecha','PaisOrigen','id','created_at','updated_at'];
}
