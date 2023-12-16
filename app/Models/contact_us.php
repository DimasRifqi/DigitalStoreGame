<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contact_us extends Model
{
    use HasFactory;

    protected $table = 'contact_uses';
    protected $guarded = ['id_contact_us'] ;
    protected $primaryKey = ['id_contact_us'] ;
    public $incrementing = false;
}
