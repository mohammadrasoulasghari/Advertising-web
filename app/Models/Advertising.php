<?php

namespace App\Models;



use Hekmatinasser\Verta\Verta;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Advertising extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'slug', 'phone_number', 'picture_url', 'category_id', 'user_id'];

    public function getCreatedAtAttribute($value)
    {
        return (new Verta($value))->formatDifference(\verta());
    }
    public function scopeFilterr($query, array $params)
    {
        if (isset($params['search'])) {
            $query->where('name', 'like', $params['search']);
        }

        return $query;
    }
}
