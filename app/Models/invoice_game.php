<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class invoice_game extends Model
{
    use HasFactory;

    protected $table = 'invoice_games';
    protected $guarded = ['id_invoice'] ;

    //protected $fillable = ['item_game', 'hargaitem_game'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
