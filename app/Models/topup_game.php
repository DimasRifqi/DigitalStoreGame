<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class topup_game extends Model
{
    use HasFactory;

    protected $table = 'topup_games';
    protected $guarded = ['id_topup'] ;
}
