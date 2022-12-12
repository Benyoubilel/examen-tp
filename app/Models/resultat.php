<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class resultat extends Model
{
    use HasFactory;
    protected $tabel = 'resultats';
    protected $fillable=[
        'moyenne',
        'annee',
        'user_id',
    ];


    public function users()
    {
        return $this->belongsTo(User::class,'user_id');
    }
}
