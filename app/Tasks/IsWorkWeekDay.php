<?php

namespace Svc\Mikko\App\Tasks;

class IsWorkWeekDay
{
    public static function task(\DateTime $date): bool
    {
        return $date->format('N') < 6;
    }
}