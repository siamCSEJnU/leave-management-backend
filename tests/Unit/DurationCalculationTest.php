<?php

namespace Tests\Unit;

use Carbon\Carbon;
use PHPUnit\Framework\TestCase;

class DurationCalculationTest extends TestCase
{
  
    public function it_calculates_duration_days_correctly_inclusive()
    {
        $start = Carbon::parse('2025-12-25');
        $end   = Carbon::parse('2025-12-27');

        $duration = $start->diffInDays($end) + 1;

        $this->assertEquals(3, $duration); 
    }

   
    public function single_day_leave_returns_1_day()
    {
        $start = Carbon::parse('2025-12-25');
        $end   = Carbon::parse('2025-12-25');

        $duration = $start->diffInDays($end) + 1;

        $this->assertEquals(1, $duration);
    }

    

}