<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Toast extends Model
{
    use HasFactory;

    public function isPrivate(){
        return $this->privacy == 'private';
    }
    public function isPublic(){
        return $this->privacy == 'public';
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
