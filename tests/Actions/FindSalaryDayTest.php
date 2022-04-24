<?php

namespace Svc\Mikko\Tests\Actions;

use Svc\Mikko\App\Actions\FindSalaryDay;
use PHPUnit\Framework\TestCase;

class FindSalaryDayTest extends TestCase
{

    public function testAction()
    {
        static::assertEquals(new \DateTime('2022-10-31'), FindSalaryDay::action(new \DateTime("2022-10-20")));
    }
}
