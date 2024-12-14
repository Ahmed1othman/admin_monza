<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
class RequiredDocument extends Model
{
    use HasFactory;
    use HasTranslations;

    public $translatable = ['content'];

    protected $fillable = [
        'for',
        'content',
    ];

    protected $hidden = ['created_at', 'updated_at'];

}
