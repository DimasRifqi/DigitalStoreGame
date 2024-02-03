<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataTeamModels extends Model
{
    use HasFactory;

    protected $table = 'data_team';
    protected $guarded =['id_team'];
}
