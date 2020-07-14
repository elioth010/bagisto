<?php

namespace Webkul\Takul\Providers;

use Konekt\Concord\BaseModuleServiceProvider;

class ModuleServiceProvider extends BaseModuleServiceProvider
{
    protected $models = [
        \Webkul\Takul\Models\Category::class,
        \Webkul\Takul\Models\Content::class,
        \Webkul\Takul\Models\ContentTranslation::class,
        \Webkul\Takul\Models\OrderBrand::class,
        \Webkul\Takul\Models\VelocityCustomerCompareProduct::class,
        \Webkul\Takul\Models\VelocityMetadata::class,
    ];
}