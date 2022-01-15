<?php
    class sql{
        public $conn;
        public $pesan;
        ///////////////////////////////////////////////////////////////////////////////////
        public function __construct($host = "localhost", $user = "root", $pw = "", $db = "sekolah"){
            $this->conn = mysqli_connect($host, $user, $pw, $db);
            if(mysqli_connect_error()){
                echo "Koneksi Gagal";
            }else{
                echo "Koneksi Berhasil";
            }
        }
        ///////////////////////////////////////////////////////////////////////////////////
        public function insert($table, $column, $value){
            $sql = mysqli_query($this->conn, "insert into $table ($column) value ($value)");
            if ($sql){
                $this->pesan = "Berhasil ditambahkan";
            }else{
                $this->pesan = "Gagal ditambahkan";
            } 
        }
        ////////////////////////////////////////////////////////////////////////////////////
        
    }
    $sql = new sql();
    
    echo $sql->insert("kelas","nama_kelas,jurusan,angkatan","'11','TKJ','29'");
    echo "<br>";
    echo $sql->pesan;
?>
    
    
