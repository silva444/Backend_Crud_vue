<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListUser extends Model
{
    use HasFactory;
    protected $fillable = [ // preciso salvar esses campos no banco de dados; // se nao fizer iso nao gravaa;

        'name',
        'email'

    ];
}
