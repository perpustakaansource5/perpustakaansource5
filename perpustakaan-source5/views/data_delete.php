<?php
//membuat query untuk hapus data
$sql="DELETE FROM peminjaman WHERE no_buku ='".$_GET['no_buku']."'";
$query=mysqli_query($koneksi, $sql) or die ("SQL Hapus Error");
if($query){
    echo"<script> window.location.assign('?page=data&actions=peminjam');</script>";
}else{
    echo"<script> alert ('Maaf !!! Data Tidak Berhasil Dihapus') window.location.assign('?page=data&actions=peminjam');</scripr>";
}