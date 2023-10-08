<?php

namespace App\Models;



use App\Models\User;
use Hekmatinasser\Verta\Verta;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Storage;

/**
 * @method static create(array $all)
 */
class Advertising extends Model
{
    use HasFactory;
    public function user()
    {
        return $this->belongsTo(User::class);
    }
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
//     public function getPictureUrlAttribute()
//     {
//         return  '/storage' . $this->picture_url;
//     }
}
