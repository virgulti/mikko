<?php

namespace Svc\Mikko\App\Tasks;

class FormattedMonthDay
{
    public static function task(?\DateTime $date): ?string
    {
        return $date?->format('l jS');
    }
}