<?php
require_once "koneksi.php";
class Crud extends Database
{


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

    public function tampil_data()
    {
        $query = "SELECT * FROM tbl_pegawai";
        $result = $this->conn->query($query);
        return $result;
    }

    function DeleteRow($id)
    {
        $sql = "DELETE FROM tbl_pegawai WHERE id = $id";
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
            $sql = "INSERT INTO tbl_pegawai VALUES(NULL,'$kode', '$nama')";
            $result = $this->conn->query($sql);
            if (!$result) {
                echo "<script>alert('gagal masukin data')</script>";
            } else {
                echo "<script>alert('berhasil masukin data'); window.location.href = 'table.php'; </script>";
            }
        }
    }

    public function edit()
    {
        $id = $_POST['id'];
        $kode = $_POST['kode'];
        $nama = $_POST['nama'];

        $check_sql = "SELECT * FROM tbl_pegawai WHERE id = '$id'";
        $check_result = $this->conn->query($check_sql);
        $row = $check_result->fetch_assoc();

        if ($row) {
            $id = $row['id'];
            $sql = "UPDATE tbl_pegawai SET kode_pegawai = '$kode', nama = '$nama' WHERE id = $id";
            $result = $this->conn->query($sql);

            if ($result) {
                echo "<script>alert('Data berhasil diperbarui'); window.location.href = 'index.php';</script>";
            } else {
                echo "<script>alert('Gagal memperbarui data')</script>";
            }
        } else {
            echo "<script>alert('Kode pegawai tidak ditemukan')</script>";
        }
    }

    public function getUserById($id)
    {
        // Ambil data pegawai berdasarkan ID yang diberikan
        $sql = "SELECT * FROM tbl_pegawai WHERE id = $id";
        $result = $this->conn->query($sql);

        if ($result->num_rows > 0) {
            return $result->fetch_assoc();
        } else {
            return null;
        }
    }
}
