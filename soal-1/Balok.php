<?php
class Balok
{
    private $p;
    private $l;
    private $t;

    // deklarasikan atribut-atribut kelas Balok


    // definisikan metode konstruktor, setter ,dan getter
    public function __construct($p, $l, $t)
    {
        $this->p = $p;
        $this->l = $l;
        $this->t = $t;
    }

    public function setP($p)
    {
        $this->p = $p;
    }
    public function setL($l)
    {
        $this->l = $l;
    }
    public function setT($t)
    {
        $this->t = $t;
    }

    public function getP()
    {
        return $this->p;
    }
    public function getL()
    {
        return $this->l;
    }
    public function getT()
    {
        return $this->t;
    }
    // definisikan metode menghitung volume, luas permukaan, 
    public function hitungVolume()
    {
        return $this->p * $this->l * $this->t;
    }

    public function hitungLuas()
    {
        return 2 * ($this->p * $this->l + $this->p * $this->t + $this->l * $this->t);
    }
}

$balok_1 = new Balok(4, 8, 5);
$balok_2 = new Balok(3, 10, 12);
echo "Volume: " . $balok_1->hitungVolume() . "<br>";
echo "Luas Permukaan: " . $balok_1->hitungLuas() . "<br>";

echo "Volume: " . $balok_2->hitungVolume() . "<br>";
echo "Luas Permukaan: " . $balok_2->hitungLuas() . "<br>";
?>