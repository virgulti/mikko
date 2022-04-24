<?php

namespace Svc\Mikko\App\Actions;

use Svc\Mikko\App\Tasks\IsWorkWeekDay;

class FindSalaryDay
{
    public static function action(\DateTime $date): ?\DateTime
    {
        $lastDay = $date->modify('last day of this month');

        if (IsWorkWeekDay::task($lastDay)) {
            return $lastDay;
        }

        //lastday is weekend, so we need the previous friday
        $lastDay = $lastDay->modify('previous friday');

        //payday is past, so we are skipping this
        if ($date > $lastDay) {
            return null;
        }

        return $lastDay;
    }
}