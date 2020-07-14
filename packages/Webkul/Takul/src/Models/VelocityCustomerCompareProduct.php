<?php

namespace Webkul\Takul\Models;

use Illuminate\Database\Eloquent\Model;
use Webkul\Takul\Contracts\VelocityCustomerCompareProduct as VelocityCustomerCompareProductContract;

class VelocityCustomerCompareProduct extends Model implements VelocityCustomerCompareProductContract
{
    protected $guarded = [];
}