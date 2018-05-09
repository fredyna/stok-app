<?php
    class Koneksi{
        private $server = "localhost";
        private $username = "id4994133_fredynur";
        private $password = "Bismillah";
        private $db = "id4994133_stok_barang";

        function getKoneksi(){
            return new mysqli($this->server, $this->username, $this->password, $this->db);
        }

    }
    
    
?>