<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tovar extends Model
{
    use HasFactory;

    protected $table = 'tovars';


    protected $fillable = ['image', 'name', 'description', 'price'];
}
