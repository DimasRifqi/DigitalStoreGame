<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class item_game extends Model
{
    use HasFactory;

    protected $table = 'item_games';
    protected $guarded = ['id_item'] ;
}
