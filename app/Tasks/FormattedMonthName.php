<?php

namespace Svc\Mikko\App\Tasks;

class FormattedMonthName
{
    public static function task(\DateTime $date): string
    {
        return $date->format('F');
    }
}