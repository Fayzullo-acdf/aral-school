<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Menu extends Model
{

    use HasTranslations;

    protected $fillable = [
        'title',
        'url',
        'order',
        'visibility'
    ];

    public $translatable = ['title'];

    public function scopeVisibility(Builder $query): void
    {
        $query->where('visibility', true);
    }

    public function scopeOrder(Builder $query): void
    {
        $query->orderBy('order', 'asc');
    }
}
