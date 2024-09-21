<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Support\Str;

class Memo extends Model
{
    use HasFactory;

    protected $fillable = ['memo'];
    
    /**
     * ユーザーの名前の取得
     */
    protected function displayTitle(): Attribute
    {
        return Attribute::make(
            get: function (mixed $value, array $attributes) {
                return Str::limit($attributes['memo'], 20);
            }
        );
    }
}
