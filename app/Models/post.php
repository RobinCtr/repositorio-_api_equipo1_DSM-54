<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    use HasFactory;
    
    public function user(){
        return $this -> belongTo(User::class);
    }

    // unpost tiene una ategoria
    public function categoria(){
        return $this -> belongTo(Category::class);
    }
}
