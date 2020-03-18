<?php

namespace App\Reporting;

use App\Reporting\Format\HtmlFormatter;
use App\Reporting\Format\HtmlSpecialFormatter;
use App\Reporting\Format\JsonFormatter;

class ReportExtractor
{

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
        $formatterHtml = new HtmlFormatter();
        $formatterJson = new JsonFormatter();
        $formatterHtmlSpecial = new HtmlSpecialFormatter();

        $results[] = $formatterHtml->formatToHTML($report);
        $results[] = $formatterJson->formatToJSON($report);
        $results[] = $formatterHtmlSpecial->formatToHtml($report);

        return $results;
    }
}
