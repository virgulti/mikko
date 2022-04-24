<?php

namespace Svc\Mikko\Tests\Tasks;

use Svc\Mikko\App\Tasks\FormattedMonthName;
use PHPUnit\Framework\TestCase;

class FormattedMonthNameTest extends TestCase
{

    public function testTask()
    {
        static::assertEquals("October", FormattedMonthName::task(new \DateTime("2022-10-01")));
    }
}
