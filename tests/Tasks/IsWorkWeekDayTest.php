<?php

namespace Svc\Mikko\Tests\Tasks;

use Svc\Mikko\App\Tasks\IsWorkWeekDay;
use PHPUnit\Framework\TestCase;

class IsWorkWeekDayTest extends TestCase
{

    public function testTaskFalse()
    {
        $date = new \DateTime('2022-10-30');
        static::assertEquals(false, IsWorkWeekDay::task($date));
    }

    public function testTaskTrue()
    {
        $date = new \DateTime('2022-10-28');
        static::assertEquals(true, IsWorkWeekDay::task($date));
    }
}
