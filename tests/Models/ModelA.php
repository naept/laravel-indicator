<?php

namespace Naept\LaravelIndicator\Test\Models;

use Illuminate\Database\Eloquent\Model;
use Naept\LaravelIndicator\Traits\HasIndicator;

class ModelA extends Model
{
    use HasIndicator;
    
    protected $table = 'models_A';

}
