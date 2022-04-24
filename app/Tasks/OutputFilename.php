<?php

namespace Svc\Mikko\App\Tasks;

class OutputFilename
{
    public static function task(array $argv): string
    {
        if (isset($argv[1]) && !empty($argv[1])) {
            if (str_ends_with($argv[1], 'csv')) {
                return $argv[1];
            }
            return $argv[1] . '.csv';
        }
        return 'output.csv';
    }
}