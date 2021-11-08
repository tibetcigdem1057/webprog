<?php


class HesapMakinesi
{
    public $sayi1;
    public $sayi2;


    function __construct()
    {
        $this->sayi1=$sayi1;
        $this->sayi2=$sayi2;

    }
    

    function toplama($sayi1, $sayi2)
    {
        return "Toplama İşlemi : " . $sayi1+$sayi2 . "<br>";

    }

    function cikarma($sayi1, $sayi2)
    {
        return "Çıkarma İşlemi : " . $sayi1-$sayi2 . "<br>";
    }

    function bolme($sayi1, $sayi2)
    {
        return "Bölme İşlemi : " . $sayi1 / $sayi2 . "<br>";
    }

    function carpma($sayi1, $sayi2)
    {
        return "Çarpma İşlemi : " . $sayi1 * $sayi2 . "<br>";
    }
}

$calculator= new HesapMakinesi;
echo $calculator->cikarma(15,7);


?>
