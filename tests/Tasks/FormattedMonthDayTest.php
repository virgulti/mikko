<?php

namespace Svc\Mikko\Tests\Tasks;

use Svc\Mikko\App\Tasks\FormattedMonthDay;
use PHPUnit\Framework\TestCase;

class FormattedMonthDayTest extends TestCase
{

    public function testTask()
    {
        static::assertEquals("Saturday 1st", FormattedMonthDay::task(new \DateTime("2022-10-01")));
    }
}
