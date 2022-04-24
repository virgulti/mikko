<?php

namespace Svc\Mikko\Tests\Tasks;

use Svc\Mikko\App\Tasks\OutputFilename;
use PHPUnit\Framework\TestCase;

class OutputFilenameTest extends TestCase
{

    /** @dataProvider dataProviderOutputFilename */
    public function testTask($args, $expected)
    {
        self::assertEquals($expected, OutputFilename::task($args));
    }

    public function dataProviderOutputFilename(): array
    {
        return [
            [[0, 'foo.csv'], 'foo.csv'],
            [[0, 'foo.ext'], 'foo.ext.csv'],
            [[], 'output.csv'],
        ];
    }
}
