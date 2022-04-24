<?php

namespace Svc\Mikko\App\Controllers;

use Svc\Mikko\App\Enums\PaymentFields;
use Svc\Mikko\App\Tasks\OutputFilename;
use Svc\Mikko\App\Tasks\RemainingMonthsInYear;
use Svc\Mikko\App\Tasks\FormattedMonthName;
use Svc\Mikko\App\Actions\FindSalaryDay;
use Svc\Mikko\App\Actions\FindBonusDay;
use Svc\Mikko\App\Tasks\FormattedMonthDay;
use Svc\Mikko\App\Views\WriteToCsv;

class MainController
{
    public function run(array $argv): bool
    {
        $filename = OutputFilename::task($argv);
        $remainingMonths = RemainingMonthsInYear::task(new \DateTime());

        $processedMonths = [];
        foreach ($remainingMonths as $month) {
            $thisMonth[PaymentFields::MONTH] = FormattedMonthName::task($month);
            $thisMonth[PaymentFields::SALARY] = FormattedMonthDay::task(FindSalaryDay::action($month));
            $thisMonth[PaymentFields::BONUS] = FormattedMonthDay::task(FindBonusDay::action($month));
            $processedMonths[] = $thisMonth;
        }

        $headers = [PaymentFields::MONTH, PaymentFields::SALARY, PaymentFields::BONUS];

        return WriteToCsv::view($filename, $headers, $processedMonths);
    }
}