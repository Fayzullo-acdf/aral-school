<?php

namespace App\Models;

use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class FAQ extends Model
{
    use HasTranslations;

    protected $fillable = [
        'position',
        'question',
        'answer',
        'order',
    ];

    public $translatable = ['question', 'answer'];

    public function scopeSorted(Builder $query): void
    {
        $query->orderBy('position', 'asc')->orderBy('order', 'asc');
    }

    public function scopePosSort(Builder $query): void
    {
        $query->orderBy('position', 'asc');
    }
}
