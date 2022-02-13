<?php

namespace Tests\Unit;

use App\Models\Car;
use Carbon\Carbon;
use Illuminate\Foundation\Testing\RefreshDatabase;
// use PHPUnit\Framework\TestCase;
// change to:
use Tests\TestCase;

class ExampleTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_that_true_is_true()
    {
        $this->assertTrue(true);
    }

    public function test_test(){
        $data =  [
            'make' => 'ford',
            'model' => 'Test Model',
            'year' => Carbon::now()->year,
        ];
        $car = Car::create($data);
        $this->assertInstanceOf(Car::class, $car);
    }
}
