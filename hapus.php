<?php
include 'koneksi';
$id=$_GET['id'];
$delete="Delete from id where id_karyawan='$id'";
mysqli-QUERY($koneksi,$delete) or die ("Error");
echo "<<center><h3>Data Berhasil di Hapus</h3></center> \n
<h2><a href="index.php">back</a></h2>;
?>