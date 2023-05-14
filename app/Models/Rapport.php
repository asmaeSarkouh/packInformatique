<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rapport extends Model
{
    use HasFactory;
    public function material(){
        return $this->belongsTo(Material::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function etablisement(){
        return $this->belongsTo(Etablisement::class);
    }
}
