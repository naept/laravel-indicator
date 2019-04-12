<?php

namespace Naept\LaravelIndicator\Test\Models;

use Illuminate\Database\Eloquent\Model;
use Naept\LaravelIndicator\Traits\HasIndicator;

class ModelB extends Model
{
    use HasIndicator;
    
    protected $table = 'models_B';

}
