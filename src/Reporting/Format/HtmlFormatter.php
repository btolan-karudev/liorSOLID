<?php

namespace App\Reporting\Format;

use App\Reporting\Report;

class HtmlFormatter
{
    /**
     * Retourne le rapport formatté en HTML
     *
     * @param Report $report
     * @return string
     */
    public function formatToHtml(Report $report)
    {
        $contents = $report->getContents();

        $data = "";

        foreach ($contents['data'] as $value) {
            $data .= "<li>$value</li>";
        }

        return "
            <h2>{$contents['title']}</h2>
            <em>Date : {$contents['date']}</em>
            <h4>Données : </h4>
            <ul>
                $data
            </ul>
        ";
    }
}