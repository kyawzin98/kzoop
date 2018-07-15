<?php
class CdProduct {
    public $playLength;
    public $title;
    public $producerMainName;
    public $producerFirstName;
    public $price;

    public function __construct($playLength, $title, $producerMainName, $producerFirstName, $price)
    {
        $this->playLength = $playLength;
        $this->title = $title;
        $this->producerMainName = $producerMainName;
        $this->producerFirstName = $producerFirstName;
        $this->price = $price;
    }


    function getPlayLength() {
        return $this->playLength;
    }
    function getSummaryLine() {
        $base  = "{$this->title} ( {$this->producerMainName}, ";
        $base .= "{$this->producerFirstName} )";
        $base .= ": playing time - {$this->playLength}";
        return $base;
    }
    function getProducer() {
        return "{$this->producerFirstName}".
            " {$this->producerMainName}";
    }
}

class BookProduct {
    public $numPages;
    public $title;
    public $producerMainName;
    public $producerFirstName;
    public $price;

    public function __construct($numPages, $title, $producerMainName, $producerFirstName, $price)
    {
        $this->numPages = $numPages;
        $this->title = $title;
        $this->producerMainName = $producerMainName;
        $this->producerFirstName = $producerFirstName;
        $this->price = $price;
    }

    function getNumberOfPages() {
        return $this->numPages;
    }
    function getSummaryLine() {
        $base  = "{$this->title} ( {$this->producerMainName}, ";
        $base .= "{$this->producerFirstName} )";
        $base .= ": page count - {$this->numPages}";
        return $base;
    }
    function getProducer() {
        return "{$this->producerFirstName}".
            " {$this->producerMainName}";
    }


}