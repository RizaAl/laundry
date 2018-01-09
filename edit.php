<?php
include ("koneksi.php");
if(isset($_POST["submit"])){
    $id = $_POST["id"];
    $nama = $_POST["nama_karyawan"];
    $kelas = $_POST["alamat_karyawan"];
    $update = mysql-query($koneksi,'update id set id="'.$id.'", nama_karyawan="'.$nama.'", alamat_karyawan="'.$alamat.'");
    if($update){
        echo "Data Berhasil Disimpan,<a href='edit.php?id=".$id."'>disini</a>";
    }
}
?>