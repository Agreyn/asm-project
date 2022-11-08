<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Aspirasi extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function user(){

        return $this->belongsTo(User::class);
        
    }

    public function image(){

        return $this->hasMany(Image::class);

    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
