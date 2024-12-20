<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
class Color extends Model
{
    use HasFactory;
    use HasTranslations;

    public $translatable = ['title'];

    protected $fillable = [
        'title',
        "sync_id"
    ];

    public function cars() {
        return $this->hasMany(Car::class);
    }
}
