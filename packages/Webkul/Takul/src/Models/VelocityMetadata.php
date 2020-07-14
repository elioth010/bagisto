<?php

namespace Webkul\Takul\Models;

use Illuminate\Database\Eloquent\Model;
use Webkul\Takul\Contracts\VelocityMetadata as VelocityMetadataContract;

class VelocityMetadata extends Model implements VelocityMetadataContract
{
    protected $table = 'velocity_meta_data';

    protected $guarded = [];

}