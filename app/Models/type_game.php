<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class type_game extends Model
{
    use HasFactory;

    protected $table = 'type_games';
    protected $guarded = ['id_typegame'] ;
}
