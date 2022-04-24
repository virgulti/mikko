<?php

namespace Svc\Mikko\App\Actions;

use Svc\Mikko\App\Tasks\IsWorkWeekDay;

class FindBonusDay
{
    public static function action(\DateTime $date): ?\DateTime
    {
        $bonusDay = $date->modify('first day of next month')->modify('+14 days');

        if (IsWorkWeekDay::task($bonusDay)) {
            return $bonusDay;
        }

        //bonusday is weekend, so we need to find next wednesday
        $bonusDay = $bonusDay->modify('next wednesday');

        //bonus is past, so we are skipping this
        if ($date > $bonusDay) {
            return null;
        }

        return $bonusDay;
    }
}