<?php 

class Produk {
    private  $judul,
            $penulis,
            $penerbit,
            $harga;

            public function __construct($judul = 'judul', $penulis = 'penulis', $penerbit = 'penerbit',$harga = 0)
            {
                $this->judul = $judul;
                $this->penulis = $penulis;
                $this->penerbit = $penerbit;
                $this->harga = $harga;
            }

            public function getLabel()
            {
                return "$this->judul,$this->penulis,$this->penerbit, $this->harga";
            }

            public function getInfoProduk()
            {
                $str = "$this->judul | $this->penulis, $this->penerbit (Rp. $this->harga,-)";
                return $str;
            }


            public function getJudul()
            {
                return $this->judul;
            }

            public function setJudul($judul)
            {
                $this->judul = $judul;
            }
}


class Komik extends Produk {
    public $jmlHalaman;

    public function __construct($judul = 'judul',$penulis = 'penulis', $penerbit = 'penerbit', $harga = 0, $jmlHalaman = 0)
    {
        parent::__construct($judul,$penulis,$penerbit,$harga);
        $this->jmlHalaman = $jmlHalaman;
    }

    public function getInfoProduk()
    {
        $str = "Komik : " . parent::getInfoProduk() . " - $this->jmlHalaman Halaman";
        return $str;
    }
}

class Game extends Produk {
    public $waktumain;

    public function __construct($judul = 'judul',$penulis = 'penulis', $penerbit = 'penerbit', $harga = 0, $waktumain = 0)
    {
        parent::__construct($judul,$penulis,$penerbit,$harga);
        $this->waktumain = $waktumain;
    }

    public function getInfoProduk()
    {
        $str = "Game : " . parent::getInfoProduk() . " - $this->waktumain Jam";
        return $str;
    }
}


class CetakInfoProduk {
    public function cetak(Produk $produk)
    {
        $str = "$produk->judul | $produk->penulis, $produk->penerbit (Rp. $produk->harga ,-) - $produk->waktumain Jam";
        return $str;
    }
}




$produk1 = new Komik("Naruto","Masashi Kishimoto","Shonen Jump",30000,150);
$produk2 = new Game("Uncharted","Neil Druckman","Sony Computer",250000,50);
$produk3 = new Game("Stardew Valley","Goku","Steam",70000,20);
$produk4 = new Komik("One Piece","Luffy","erlangga",30000,120);

$produk1->setJudul("Dragon Ball");
$produk1->judul = "Shincen";

echo $produk1 -> getInfoProduk() ."<br>"; 
echo $produk2 -> getInfoProduk() ."<br>";
echo $produk3 -> getInfoProduk() ."<br>";
echo $produk4 -> getInfoProduk() ."<br>";


?>
