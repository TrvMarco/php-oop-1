<?php 

class Movie{
    public $title;
    public $genre;
    public $producer;
    public $length;
    public $relase_year; 
    public $price;

    public function __construct($_title, $_producer, $_genre, $_price,$_relase_year, $_length)
    {
        $this->title = $_title;
        $this->producer = $_producer;
        $this->genre = $_genre;
        $this->price = $_price;
        $this->relase_year = $_relase_year;
        $this->length = $_length;
    }

    public function movieDiscount(){
        if($this->genre == 'Azione' || $this->genre == 'Horror'){
            return $this->price * 0.8;
        }
    }
}