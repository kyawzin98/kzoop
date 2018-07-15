<?php

class ShopProduct
{
    public $numPages;
    public $playLength;
    public $title;
    public $producerMainName;
    public $producerFirstName;
    public $price;

    public function __construct($numPages, $playLength, $title, $producerMainName, $producerFirstName, $price)
    {
        $this->numPages = $numPages;
        $this->playLength = $playLength;
        $this->title = $title;
        $this->producerMainName = $producerMainName;
        $this->producerFirstName = $producerFirstName;
        $this->price = $price;
    }

    function getNumberOfPages() {
        return $this->numPages;
    }
    function getPlayLength() {
        return $this->playLength;
    }
    

    public function getProducer()
    {
        return "{$this->producerFirstName}" .
            " {$this->producerMainName}";
    }
}
