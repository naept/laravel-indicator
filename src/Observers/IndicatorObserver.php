<?php

namespace Naept\LaravelIndicator\Observers;

use Illuminate\Database\Eloquent\Model;
use Naept\LaravelIndicator\Services\IndicatorService;

class IndicatorObserver
{
    /**
     * @var \Naept\LaravelIndicator\Services\IndicatorService
     */
    protected $service;

    /**
     * IndicatorObserver constructor.
     *
     * @param \Naept\LaravelIndicator\Services\IndicatorService $service
     */
    public function __construct(IndicatorService $service)
    {
        $this->service = $service;
    }

    /**
     * Listen to the Indicator creating event.
     *
     * @param Illuminate\Database\Eloquent\Model $obj
     * @return void
     */
    public function creating(Model $obj)
    {
        
    }

    /**
     * Listen to the Indicator updating event.
     *
     * @param Illuminate\Database\Eloquent\Model $obj
     * @return void
     */
    public function updating(Model $obj)
    {
        
    }

    /**
     * Listen to the Indicator deleting event.
     *
     * @param Illuminate\Database\Eloquent\Model $obj
     * @return void
     */
    public function deleting(Model $obj)
    {
        
    }
}
