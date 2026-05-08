<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Builder;

class Team extends Model
{

    use HasTranslations;

    protected $fillable = [
        'category',
        'col_type',
        'name',
        'profession',
        'img',
        'member_info',
        'additional_column',
        'status',
        'order',
    ];

    public $translatable = ['member_info', 'additional_column', 'profession', 'name'];

    public function scopeSorted(Builder $query): void
    {
        $query->orderBy('order', 'asc');
    }
    public function scopeActive(Builder $query): void
    {
        $query->where('status', true);
    }
    public function scopeTeam(Builder $query): void
    {
        $query->where('category', 'team');
    }
    public function scopeMentor(Builder $query): void
    {
        $query->where('category', 'mentor');
    }
}
