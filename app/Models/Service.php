<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
class Service extends Model
{
    use HasFactory;
    use HasTranslations;

    public $translatable = ['title','content','description'];

    protected $fillable = [
        'title',
        'description',
        'content',
        'image'
    ];

    protected $hidden = ['created_at', 'updated_at','image'];

    protected $appends = ['image_url'];

    public function getImageUrlAttribute() {
        return url('storage/'.$this->image);
    }
}
