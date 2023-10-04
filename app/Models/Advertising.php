<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Advertising extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'slug', 'phone_number', 'picture_url', 'category_id', 'user_id'];
}
