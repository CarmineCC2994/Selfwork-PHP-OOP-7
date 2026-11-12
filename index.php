
<?php


trait Calculator {

    public function sum($a, $b) {
        return $a + $b;
    }

    public function sub($a, $b) {
        return $a - $b;
    }

    public function mul($a, $b) {
        return $a * $b;
    }

    public function div($a, $b) {
        return $a / $b;
    }

    public function sqr($a) {
        return sqrt($a);
    }
}

class Rettangolo {

    use Calculator;

    public $b;
    public $h;

    public function __construct($b, $h) {
        $this->b = $b;
        $this->h = $h;
    }

  
    public function getArea() {
        return $this->mul($this->b, $this->h);
    }

  
    public function getPerimetro() {
        return $this->sum(
            $this->mul(2, $this->b),
            $this->mul(2, $this->h)
        );
    }

 
    public function getDiagonale() {

        $baseQuadrata = $this->mul($this->b, $this->b);
        $altezzaQuadrata = $this->mul($this->h, $this->h);

        $somma = $this->sum($baseQuadrata, $altezzaQuadrata);

        return $this->sqr($somma);
    }
}


$rettangolo = new Rettangolo(5, 10);


echo "Base: " . $rettangolo->b . "\n";
echo "Altezza: " . $rettangolo->h . "\n";

echo "Area: " . $rettangolo->getArea() . "\n";

echo "Perimetro: " . $rettangolo->getPerimetro() . "\n";

echo "Diagonale: " . $rettangolo->getDiagonale() . "\n";

?>
