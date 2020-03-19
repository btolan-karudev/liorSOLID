<?php

namespace App\Reporting\Format;

use App\Reporting\Report;
use Exception;

class HtmlFormatter implements FormatterInterface
{
    /**
     * Retourne le rapport formatté en HTML
     *
     * @param Report $report
     * @return string
     */
    public function format(Report $report): string
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

    public function deserialize(string $str): Report
    {
        throw new Exception('Imposible de deserialize de HTML.');

        return new Report("", "", []);
    }
}