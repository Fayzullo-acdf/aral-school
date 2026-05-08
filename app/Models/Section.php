<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    protected $fillable = [
        'category',
        'section_id',
        'status',
        'order',
    ];

    public static function getActiveIds(): array
    {
        return self::where('status', true)->pluck('category')->toArray();
    }
}
