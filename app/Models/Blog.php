<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
class Blog extends Model
{
    use HasFactory;
    use HasTranslations;

    public $translatable = ['title','content'];

    protected $fillable = [
        'title',
        'content',
        'image'
    ];

    protected $hidden = ['created_at', 'updated_at','image'];

    protected $appends = ['image_url'];

    public function getImageUrlAttribute() {
        return url('storage/'.$this->image);

    }

    public function getDateAttribute()
    {
        $date = Carbon::parse($this->created_at);

        // Format the date in English
        $englishDate = $date->locale('en')->translatedFormat('j F'); // Example: 10 May

        // Format the date in Arabic
        $arabicDate = $date->locale('ar')->translatedFormat('j F'); // Example: 10 مايو

        return [
            'en' => $englishDate,
            'ar' => $arabicDate,
        ];
    }
}
