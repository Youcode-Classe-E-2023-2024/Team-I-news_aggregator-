<?php

namespace App\Models\AdminSide;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public function items()
    {
        // Adjust the 'rss_id' and 'App\Models\AdminSide\RssItem' path if necessary
        return $this->hasMany(RssItem::class, 'category_id', 'id');
    }
}
