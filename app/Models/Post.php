<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Post extends Model
{
    use HasFactory, HasTranslations, Sluggable;

    protected $guarded = [];
    public $translatable = ['title', 'slug', 'body'];

    public function sluggable()
    {
        return [
            'slug->en' => [
                'source' => 'titleen',
            ],
            'slug->ar' => [
                'source' => 'titlear',
            ],
            'slug->ca' => [
                'source' => 'titleca',
            ]
        ];
    }

    protected function asJson($value)
    {
        return json_encode($value, JSON_UNESCAPED_UNICODE);
    }


    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function getTitleenAttribute()
    {
        return $this->getTranslation('title', 'en');
    }

    public function getTitlearAttribute()
    {
        return $this->getTranslation('title', 'ar');
    }

    public function getTitlecaAttribute()
    {
        return $this->getTranslation('title', 'ca');
    }

}
