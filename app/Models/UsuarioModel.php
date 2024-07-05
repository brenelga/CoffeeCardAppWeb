<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class UsuarioModel extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'Usuario';

    protected $fillable = ['_id', 'nombre', 'ApPat', 'ApMat', 'Usuario', 'Tipo', 'Contrasena'];
}
