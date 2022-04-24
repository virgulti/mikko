<?php

namespace Svc\Mikko\App\Tasks;

class RemainingMonthsInYear
{
    public static function task(\DateTime $date): array
    {
        $date = $date->modify('midnight');

        $endDate = clone $date;
        $endDate->modify('1st january next year');

        $monthlyInterval = new \DateInterval('P1M');

        $startDateSearch = clone $date;
        $startDateSearch->modify('first day of next month');

        $months = new \DatePeriod($startDateSearch, $monthlyInterval, $endDate);

        //manually add today as first element
        $dates[] = $date;

        // Add all remaining dates to array
        foreach ($months as $firstOfMonth) {
            $dates[] = $firstOfMonth;
        }


        return $dates;
    }
}