<?php

    use Webkul\Takul\Velocity;

    if (! function_exists('velocity')) {
        function velocity()
        {
            return app()->make(Velocity::class);
        }
    }
?>