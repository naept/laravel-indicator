<?php

namespace Naept\LaravelIndicator\Test\Unit;

use Naept\LaravelIndicator\Test\TestCase;
use Naept\LaravelIndicator\Test\Models\ModelA;
use Naept\LaravelIndicator\Test\Models\ModelB;

class AddIndicatorTest extends TestCase
{
    /**
     * Setup the test environment.
     */
    protected function setUp(): void
    {
        parent::setUp();
    }

    /**
     * Test add an indicator with default estimated and actual values to Model should show in database
     *
     * @return void
     */
    public function test_add_an_indicator_with_default_estimated_and_actual_values_to_model_should_show_in_database()
    {
        $model = ModelA::Create();
        $model->addIndicator(2);

        $this->assertDatabaseHas('indicators', [
            'indicatorable_id'      => $model->id,
            'indicatorable_type'    => 'Naept\LaravelIndicator\Test\Models\ModelA',
            'type'                  => 2,
            'estimated'             => 0.0,
            'actual'                => 0.0
        ]);
    }

    /**
     * Test add an indicator with default estimated and actual values to Model should show in database
     *
     * @return void
     */
    public function test_add_an_indicator_specifying_estimated_and_actual_values_to_model_should_show_in_database()
    {
        $model = ModelA::Create();
        $model->addIndicator(2, 15.3, 159.4);

        $this->assertDatabaseHas('indicators', [
            'indicatorable_id'      => $model->id,
            'indicatorable_type'    => 'Naept\LaravelIndicator\Test\Models\ModelA',
            'type'                  => 2,
            'estimated'             => 15.3,
            'actual'                => 159.4
        ]);
    }

    /**
     * Test add two indicators to Model should show in database
     *
     * @return void
     */
    public function test_add_two_indicators_to_model_should_show_in_database()
    {
        $model = ModelA::Create();
        $model->addIndicator(2);
        $model->addIndicator(2, 15.3, 159.4);

        $this->assertDatabaseHas('indicators', [
            'indicatorable_id'      => $model->id,
            'indicatorable_type'    => 'Naept\LaravelIndicator\Test\Models\ModelA',
            'type'                  => 2,
            'estimated'             => 0.0,
            'actual'                => 0.0
        ]);

        $this->assertDatabaseHas('indicators', [
            'indicatorable_id'      => $model->id,
            'indicatorable_type'    => 'Naept\LaravelIndicator\Test\Models\ModelA',
            'type'                  => 2,
            'estimated'             => 15.3,
            'actual'                => 159.4
        ]);
    }
}
