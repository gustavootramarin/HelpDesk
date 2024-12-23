<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends RModel
{
    protected $table = "usuarios";

    protected $fillable = ['nome', 'email', 'telefone', 'password'];
}
