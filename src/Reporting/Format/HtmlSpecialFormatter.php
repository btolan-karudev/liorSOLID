<?php


namespace App\Reporting\Format;


use App\Reporting\Report;

class HtmlSpecialFormatter extends HtmlFormatter
{
    public function format(Report $report): string
    {
        $html = parent::formatToHtml($report);

        return '
        <div style="background-color: chartreuse">' . $html . '</div>
        ';
    }
}