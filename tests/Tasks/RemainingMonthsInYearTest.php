<?php

namespace Svc\Mikko\Tests\Tasks;

use Svc\Mikko\App\Tasks\RemainingMonthsInYear;
use PHPUnit\Framework\TestCase;

class RemainingMonthsInYearTest extends TestCase
{

    public function testTask()
    {
        $date = new \DateTime('2022-10-30');
        //october,november,december
        static::assertCount(3, RemainingMonthsInYear::task($date));
    }
}
