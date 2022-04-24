<?php

namespace Svc\Mikko\Tests\Actions;

use Svc\Mikko\App\Actions\FindBonusDay;
use PHPUnit\Framework\TestCase;

class FindBonusDayTest extends TestCase
{

    public function testAction()
    {
        static::assertEquals(new \DateTime('2022-11-15'), FindBonusDay::action(new \DateTime("2022-10-20")));

    }
}
