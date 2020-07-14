<?php

namespace Webkul\Takul\Models;

use Illuminate\Database\Eloquent\Model;
use Webkul\Takul\Contracts\Category as CategoryContract;

class Category extends Model implements CategoryContract
{
    
    protected $table = 'velocity_category';

    protected $fillable = [
        'category_id',
        'icon',
        'tooltip',
        'status',
    ];
}