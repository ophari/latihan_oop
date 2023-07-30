<?php
require_once "koneksi.php";
    class Crud extends Database{
     
        
        public function __construct()
        {
            $db = new Database;
            $this->conn = $db->conn;
        }

        // public function tambah(){
        //     $kode = $_POST['kode'];
        //     $nama = $_POST['nama'];
        //     $sql = "INSERT INTO tbl_pegawai VALUES('$kode', '$nama')";
        //     $result = $this->conn->query($sql);
        //     if(!$result){
        //         echo"<script>alert('gagal')</script>";
        //     }else{
        //         echo"<script>alert('berhasil')</script>";
        //     }
        // }

        public function tampil_data(){
            $query ="SELECT * FROM tbl_pegawai";
            $result = $this->conn->query($query);
            return $result;
        }

        function DeleteRow($id) {
            $sql = "DELETE FROM tbl_pegawai WHERE id =$id";
            $result = $this->conn->query($sql);
            return $result;
        }
        
        
        public function tambah()
        {
            $kode = $_POST['kode'];
            $nama = $_POST['nama'];

            $check_sql = "SELECT * FROM tbl_pegawai WHERE kode_pegawai = '$kode'";
            $check_result = $this->conn->query($check_sql);
            $row = $check_result->fetch_assoc();

            if ($row > 0) {
                echo "<script>alert('kode pegawai sudah ada')</script>";
            } else {
                $sql = "INSERT INTO tbl_pegawai VALUES('','$kode', '$nama')";
                $result = $this->conn->query($sql);
                if (!$result) {
                    echo "<script>alert('gagal masukin data')</script>";
                } else {
                    echo "<script>alert('berhasil masukin data')</script>";
                }
            }
        }

        // public function edit(){
        //     $kode =$_POST['kode'];
        //     $nama = $_POST['nama'];
        //     $sql = "UPDATE tbl_pegawai SET ($kode, $nama)";
        //     $result = $this->conn->query($sql);
        //     if(!$result){
        //         echo"<script>alert('gagal')<script>";
        //     }else{
        //         return $result;
        //     }
            
        // }

        
    }
?>