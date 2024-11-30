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

    protected $appends = ['image_url','date'];

    public function getImageUrlAttribute() {
        return url('storage/'.$this->image);

    }

    public function getDateAttribute()
    {
        $date = Carbon::parse($this->created_at);

        // English Format
        $englishDay = $date->locale('en')->translatedFormat('j'); // Day (e.g., 10)
        $englishMonth = $date->locale('en')->translatedFormat('F'); // Month (e.g., May)

        // Arabic Format
        $arabicDay = $date->locale('ar')->translatedFormat('j'); // Day (e.g., 10)
        $arabicMonth = $date->locale('ar')->translatedFormat('F'); // Month (e.g., مايو)

        return [
            'en' => [
                'day' => $englishDay,
                'month' => $englishMonth,
            ],
            'ar' => [
                'day' => $arabicDay,
                'month' => $arabicMonth,
            ],
        ];
    }
}
