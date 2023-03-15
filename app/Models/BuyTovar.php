<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BuyTovar extends Model
{
    use HasFactory;

    protected $table = 'buy_tovars';


    protected $fillable = ['col', 'tel', 'email', 'tovarname'];


}
