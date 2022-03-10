<?php
class Point {
    private $abcisse;
    private $ordonne;
    public function __construct($abs, $ord){
        $this->abcisse = $abs;
        $this->ordonne = $ord;
    }
public function Norme($abcisse,$ordonne){
return sqrt($abcisse*$abcisse + $ordonne*$ordonne);
}
}
?>