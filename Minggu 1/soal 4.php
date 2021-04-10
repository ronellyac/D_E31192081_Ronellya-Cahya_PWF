<?php
class Mobil
{
    public $pemilik;
    public $warna;
    public $merk;
    public $tahun_keluar;
    public $bahan_bakar;
 
    public function Warna()
    {
        $this->warna = 'hitam';
        return $this->warna;
    }
    public function pemilik()
    {
        $this->pemilik = 'Ronellya';
        return $this->owner;
    }
    public function Merk()
    {
        $this->merk = 'ayla';
        return $this->merk;
    }
    public function Tahun_keluar()
    {
        $this->tahun_keluar = '2016';
        return $this->tahun_keluar;
    }
}
 
$mobil1 = new Mobil();
 
 
echo "Pemilik :" .  $mobil1-> pemilik() . "<br>Warna :" .
    $motor1-> Warna() . "<br>Merk :" .
    $motor1-> Merk()  .  "<br>Tahun Keluar :" .
    $motor1-> Tahun_keluar(); 