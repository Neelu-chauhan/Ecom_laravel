<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryTypeModdel extends Model
{
    use HasFactory;
    protected $table ="category_type";
    protected $fillable = ['name'];
}
