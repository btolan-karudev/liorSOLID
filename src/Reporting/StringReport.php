<?php


namespace App\Reporting;


class StringReport extends Report
{
    public function getContents()
    {
        return "title:$this->title;date:$this->date" .implode(",", $this->data);
    }
}