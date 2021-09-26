<?php

// Jualan Pproduk
// Komik
// Game
class Produk{
    public $judul,
           $penulis,
           $penerbit,
           $harga,
           $jmlHalaman,
           $waktuMain;

    public function __construct($judul = "Judul", $penulis = "Pennulis", $penerbit = "Penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain = 0){
       $this->judul = "$judul";
       $this->penulis = "$penulis";
       $this->penerbit = "$penerbit";
       $this->harga = "$harga";
       $this->jmlHalaman = "$jmlHalaman";
       $this->waktuMain = "$waktuMain";
    }

    public function getLabel(){
        return "$this->penulis, $this->penerbit";
        }

    public function getInfoProduk(){
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
    

        return $str;
    }

}


class Komik extends Produk{
    public function getInfoKomik(){
        $str = "Komik : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->jmlHalaman} Halaman.";
        return $str;
    }
}

class game extends Produk{
    public function getInfoGame(){
        $str = "Game : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) ~ {$this->waktuMain} Jam.";
    return $str;
    }
}




class CetakInfoProduk{
    public function cetak( Produk $produk){
        $str = "{$produk->judul} | {$produk->getLabel()}, ({$produk->harga})";
        return $str;
    }

}

$produk1 = new Komik("Naruto", "Masasshi Kishimoto", "Shonen Jump", 30000, 100, 0);
$produk2 = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 250000,0,  50);


echo $produk1->getInfoKomik();
echo "<br>";
echo $produk2->getInfoGame();

// komik : Masasshi Kishimoto, Shonen Jump
// Game : Neil Druckmann, Sony Computer
// Naruto | Masasshi Kishimoto, Shonen Jump, (30000)

// komik ; Naruto | Masashi Kishimoot, Shonen Jump (Rp. 30000) .- 100 halaman.








