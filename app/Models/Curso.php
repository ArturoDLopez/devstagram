<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    //protected $fillable = ['name', 'description', 'category']; //colocar los campos que se qiueren proteger
    
    //colocar los campos que se qiueren proteger
    protected $guarded = []; //ningun campo esta protegido
}
