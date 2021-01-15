<?php
    ini_set('display_errors', 1);

    // class movie
    class Movie {
        // public var
        public $title;
        public $year;
        public $rating;

        // construct
        function __construct($_title, $_rating, $_year = 2020) {
            $this -> title = $_title;
            $this -> rating = $_rating;
            $this -> year = $_year;

            echo "<br>";
            echo $this -> title;
            echo "<br>";
            $this -> stampAdvice();
            echo "<br>";
        }

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
    $ilSignoreDegliAnelli = new Movie("Il signore degli anelli", 9.3);

    echo var_dump($ilSignoreDegliAnelli);

    $ilSignoreDegliAnelli -> title = "Il signore degli anelli - La compagnia dell'anello";
    $ilSignoreDegliAnelli -> year = 2001;
    $ilSignoreDegliAnelli -> rating = 9.2;

    echo "Il signore degli anelli, riempito";
    echo var_dump($ilSignoreDegliAnelli);

    echo "Advice: ";
    $ilSignoreDegliAnelli -> stampAdvice();

    // movie: top gun
    $topGun = new Movie("Top Gun", 5.5, 1986);

    echo "<br>Top gun";
    echo var_dump($topGun);
?>
