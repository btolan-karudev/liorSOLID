<?php


namespace App\Reporting\Format;


use App\Reporting\Report;

class JsonFormatter implements FormatterInterface, DeserializerInterface
{
    /**
     * Retourne le rapport formatté en JSON
     *
     * @param Report $report
     * @return string
     */
    public function format(Report $report): string
    {
        return json_encode($report->getContents());
    }


    public function deserialize(string $str): Report
    {
        // {"title":"Mon Titre", "date":"2020/02/02", "data":[5, 6]} // $str
        $contents = json_decode($str);

        return new Report($contents['date'], $contents['title'], $contents['data']);
    }
}