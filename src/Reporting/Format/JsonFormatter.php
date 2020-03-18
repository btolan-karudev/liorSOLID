<?php


namespace App\Reporting\Format;


use App\Reporting\Report;

class JsonFormatter
{
    /**
     * Retourne le rapport formatté en JSON
     *
     * @return string
     */
    public function formatToJSON(Report $report)
    {
        return json_encode($report->getContents());
    }

}