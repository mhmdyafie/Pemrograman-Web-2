<?php
class Pelanggan{
    private $koneksi;
    
    public function __construct(){
        global $dbh; //panggil instance object di koneksi.php
        $this->koneksi = $dbh;
    }
    
    public function dataPelanggan(){
        $sql = "SELECT c.*, j.nama AS plg
        FROM pelanggan c
        INNER JOIN kartu j ON j.id = c.kartu_id
        ORDER BY c.id DESC";
    
        
    $ps = $this->koneksi->prepare($sql);
    $ps->execute();
    $rs = $ps->fetchAll();
    return $rs;
    }
}
?>