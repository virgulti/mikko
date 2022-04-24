<?php

namespace Svc\Mikko\App\Views;

class WriteToCsv
{
    public static function view(string $completeFilename, array $headers, array $data): bool
    {
        $csv = fopen($completeFilename, 'w');
        if (!$csv) {
            echo 'Error opening csv: ' . $completeFilename;
            return false;
        };

        $output = array_merge([$headers], $data);

        foreach ($output as $item) {
            $operation = fputcsv($csv, $item);
            if (!$operation) {
                echo 'Error writing csv: ' . $completeFilename;
                return false;
            };
        }

        fclose($csv);

        return true;
    }
}