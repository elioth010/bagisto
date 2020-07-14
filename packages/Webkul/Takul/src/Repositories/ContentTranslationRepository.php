<?php

namespace Webkul\Takul\Repositories;

use Webkul\Core\Eloquent\Repository;

class ContentTranslationRepository extends Repository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    function model()
    {
        return 'Webkul\Takul\Contracts\ContentTranslation';
    }
}