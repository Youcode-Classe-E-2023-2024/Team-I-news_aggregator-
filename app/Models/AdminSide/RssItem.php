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
        'title',
        'link',
        'description'
    ];
}
