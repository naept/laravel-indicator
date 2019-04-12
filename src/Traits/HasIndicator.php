<?php

namespace Naept\LaravelIndicator\Traits;

use Naept\LaravelIndicator\Observers\IndicatorObserver;
// use Naept\LaravelIndicator\Services\IndicatorService;
use Naept\LaravelIndicator\Models\Indicator;

trait HasIndicator
{
    /**
     * Boot Indicator Observer for event handling.
     *
     * @return void
     */
    public static function bootHasIndicator()
    {
        self::observe(IndicatorObserver::class);
    }

    /**
     * Get all of the models's indicators.
     */
    private function indicators()
    {
        return $this->morphMany('Naept\LaravelIndicator\Models\Indicator', 'indicatorable');
    }

    /**
     * Add indicator to Model.
     *
     * @param Number $type
     * @param Float $estimated
     * @param Float $actual
     * @return Model
     * @throws ModelNotFoundException
     */
    public function addIndicator(int $type, Float $estimated = 0.0, Float $actual = 0.0)
    {
        return $this->indicators()->create([
            'type'      => $type,
            'estimated' => $estimated,
            'actual'    => $actual
        ]);
    }
}
