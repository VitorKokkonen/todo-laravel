<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    // Definir os campos que podem ser preenchidos
    protected $fillable = ['name', 'email', 'phone'];
}
