<?php
//class
class mobil
{
    //methods
    function properti_mobil()
    {
        //object
        echo " Kaca , Spion , Ban , Merk";
    }
    function maju()
    {
        echo " Mobil Maju ";
    }
    function mundur()
    {
        echo " Mobil Mundur ";
    }
}

$jalan_mundur = new mobil();

echo $jalan_mundur->mundur();
