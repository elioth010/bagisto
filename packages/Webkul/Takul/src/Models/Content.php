<?php

namespace Webkul\Takul\Models;

use Webkul\Core\Eloquent\TranslatableModel;
use Webkul\Takul\Contracts\Content as ContentContract;

class Content extends TranslatableModel implements ContentContract
{
    
    protected $table = 'velocity_contents';

    public $translatedAttributes = [
        'title',
        'custom_title',
        'custom_heading',
        'page_link',
        'link_target',
        'catalog_type',
        'products',
        'description',
    ];

    protected $fillable = [
        'content_type',
        'position',
        'status',
    ];

    protected $with = ['translations'];
}