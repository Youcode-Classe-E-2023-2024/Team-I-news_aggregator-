<?php

namespace App\Models\AdminSide;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rsslist extends Model
{
    use HasFactory;
    protected $table = 'rsslist';

    protected $fillable = [
        'title',
        'link',
        'description',
        'pubDate',
        'image',
        'creator',
        'category'
    ];
}
