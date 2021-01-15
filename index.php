<?php
    // class movie
    class Movie {
        public $title;
        public $year;
        public $rating;
    }

    $ilSignoreDegliAnelli = new Movie();

    echo "Il signore degli anelli, vuoto";
    echo var_dump($ilSignoreDegliAnelli);

    $ilSignoreDegliAnelli -> title = "Il signore degli anelli";
    $ilSignoreDegliAnelli -> year = 2001;
    $ilSignoreDegliAnelli -> rating = 9.2;

    echo "Il signore degli anelli, riempito";
    echo var_dump($ilSignoreDegliAnelli);
?>
