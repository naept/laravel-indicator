<?php

namespace Naept\LaravelIndicator\Services;

// use Psr\Log\InvalidArgumentException;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;

use Naept\LaravelIndicator\Models\Indicator;

class IndicatorService
{
    /**
     * Add indicator to Model.
     *
     * @param Model $obj
     * @return Model
     */
    public function addIndicator(Model $obj)
    {
        Indicator::create();
        // $obj->

        return $obj;
    }
}
