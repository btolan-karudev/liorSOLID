<?php

namespace App\Reporting;

use App\Reporting\Format\FormatterInterface;
use App\Reporting\Format\HtmlFormatter;
use App\Reporting\Format\HtmlSpecialFormatter;
use App\Reporting\Format\JsonFormatter;

class ReportExtractor
{
    protected $formatters = [];

    public function addFormatter(FormatterInterface $formatter)
    {
        $this->formatters[] = $formatter;
    }


    /**
     * Doit afficher l'ensemble des formats possibles pour un rapport en se servant
     * des formatters ajoutés dans le tableau
     *
     * @param Report $report
     *
     * @return array
     */
    public function process(Report $report): array
    {
        $results = [];

        foreach ($this->formatters as $formatter) {
            $results[] = $formatter->format($report);
        }

        return $results;
    }
}
