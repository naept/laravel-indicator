<?php

namespace Naept\LaravelIndicator\Models;

use Illuminate\Database\Eloquent\Model;

class Indicator extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable =[
        'category_id',
        'type',
        'estimated',
        'actual'
    ];

    /**
     * Get all of the owning indicatorable models.
     */
    public function indicatorable()
    {
        return $this->morphTo();
    }
}
