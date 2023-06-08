<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ToCart extends Model
{
    use HasFactory;
    protected $table = 'towishlist';
    protected $primaryKey = 'id';
    protected $fillable = ['name','price','quantity','image'];
}
