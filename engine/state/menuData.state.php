<?php 

class menuData{
   
    private $st;

    public function __construct()
    {
        $this -> st = new state;
    }

    public function getMenu()
    {
        $this -> st -> query("SELECT * FROM tbl_menu;");
        return $this -> st -> queryAll();
    }

    public function getKategori()
    {
        $this -> st -> query("SELECT * FROM tbl_kategori;");
        return $this -> st -> queryAll();
    }

    public function prosesTambahMenu($kdMenu, $nama, $deks, $kategori, $satuan, $harga, $picName)
    {
        $query = "INSERT INTO tbl_menu VALUES(null, '$kdMenu', '$nama', '$deks','$kategori','$satuan','$harga','$picName','0','1');";
        $this -> st -> query($query);
        $this -> st -> queryRun();
    }

}