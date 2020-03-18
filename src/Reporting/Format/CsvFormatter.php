<?php


namespace App\Reporting\Format;


use App\Reporting\Report;

class CsvFormatter
{
    public function formatToCsv(Report $report)
    {
        $contents = $report->getContents();

        $data = implode(";", $contents['data']);


        return implode(";", $contents);
    }

}