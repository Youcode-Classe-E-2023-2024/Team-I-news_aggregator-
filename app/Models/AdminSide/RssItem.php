<?php

namespace App\Models\AdminSide;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RssItem extends Model
{
    protected $table = 'rss_items';
    use HasFactory;

    protected $fillable = [
        'rss_id',
        'name',
        'link',
        'description',
        'category',
        'trend'
    ];

    public function scopeSearch($query, $value) {
        $query->where('name', 'like', "%{$value}%");
    }
}
