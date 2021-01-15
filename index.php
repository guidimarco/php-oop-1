<?php
    ini_set('display_errors', 1);

    // class movie
    class Movie {
        // public var
        public $title;
        public $year;
        public $rating;

        // public function
        public function stampAdvice() {
            // get this movie-rating
            $_rating = $this -> rating;

            if ($_rating < 6) {
                echo "film non consigliato";
            } elseif ($_rating < 8) {
                echo "film consigliato";
            } else {
                echo "film consigliatissimo";
            }
        } // stamp an advice from rating
    };

    // movie: il signore degli anelli
    $ilSignoreDegliAnelli = new Movie();

    echo "Il signore degli anelli, vuoto";
    echo var_dump($ilSignoreDegliAnelli);

    $ilSignoreDegliAnelli -> title = "Il signore degli anelli";
    $ilSignoreDegliAnelli -> year = 2001;
    $ilSignoreDegliAnelli -> rating = 9;

    echo "Il signore degli anelli, riempito";
    echo var_dump($ilSignoreDegliAnelli);

    $ilSignoreDegliAnelli -> stampAdvice();
?>
