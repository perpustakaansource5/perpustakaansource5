<?php
$no_buku=$_GET['no_buku'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM peminjaman WHERE no_buku ='$no_buku'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Update Data Peminjam</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="no_buku" class="col-sm-3 control-label">No Buku</label>
                            <div class="col-sm-9 col-xs-9">
							<input type="text" name="no_buku" value="<?=$data['no_buku']?>"class="form-control" id="inputEmail3" placeholder="No Buku">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nama" class="col-sm-3 control-label">Nama</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama" value="<?=$data['nama']?>"class="form-control" id="inputEmail3" placeholder="Nama">
                            </div>
                        </div>
						<div class="form-group">
                            <label for="judul" class="col-sm-3 control-label">Judul</label>
                            <div class="col-sm-9">
                                <input type="text" name="judul" value="<?=$data['judul']?>"class="form-control" id="inputEmail3" placeholder="Judul">
                            </div>
                        </div>
						<div class="form-group">
                            <label for="tgl_pinjam" class="col-sm-3 control-label">Tanggal Pinjam</label>
                            <div class="col-sm-9">
                                <input type="text" name="tgl_pinjam" value="<?=$data['tgl_pinjam']?>"class="form-control" id="inputEmail3" placeholder="Tanggal Kembali">
                            </div>
                        </div>
						<div class="form-group">
                            <label for="tgl_kembali" class="col-sm-3 control-label">Tanggal Kembali</label>
                            <div class="col-sm-9">
                                <input type="text" name="tgl_kembali" value="<?=$data['tgl_kembali']?>"class="form-control" id="inputEmail3" placeholder="Tanggal Pinjam">
                            </div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-edit"></span> Update Data</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=data&actions=peminjam" class="btn btn-danger btn-sm">
                        Kembali Ke Data Peminjam
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php 
if($_POST){
    //Ambil data dari form
    $no_buku=$_POST['no_buku'];
    $nama=$_POST['nama'];
	$judul=$_POST['judul'];
    $tgl_pinjam=$_POST['tgl_pinjam'];
	$tgl_kembali=$_POST['tgl_kembali'];
    
    //buat sql
    $sql="UPDATE peminjaman SET nama='$nama',judul='$judul',tgl_pinjam='$tgl_pinjam',tgl_kembali='$tgl_kembali' WHERE no_buku ='$no_buku'";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit MHS Error");
    if ($query){
        echo "<script>window.location.assign('?page=data&actions=peminjam');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>



