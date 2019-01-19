<div class="container">
    <div class="row">
        <div class ="col-xs-12">

            <div class="alert alert-info">
                <strong>Selamat Datang di SI Perpustakaan SMA N 1 Tanjung Balai</strong>
            </div>
        </div>
    </div>
    <div class="row">
        <!--colomn kedua-->
        <div class="col-sm-9 col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><center>Form Peminjaman Buku</center></h3>
                    <br>        
		<div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="no_buku" class="col-sm-3 control-label">Nomor Buku</label>
                               <div class="col-sm-9">
                               <input type="text" name="no_buku" class="form-control" id="inputEmail3" placeholder="Inputkan Nomor Buku" required> 
							</div>
						</div>
						 <div class="form-group">
                            <label for="nama" class="col-sm-3 control-label">Nama Peminjam</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama" class="form-control" id="inputEmail3" placeholder="Inputkan Nama Peminjam" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="judul" class="col-sm-3 control-label">Judul Buku</label>
                            <div class="col-sm-9">
                                <input type="text" name="judul"class="form-control" id="inputEmail3" placeholder="Inputkan Judul Buku" required>
                            </div>
                        </div>

                         <div class="form-group">
                            <label for="tgl_pinjam" class="col-sm-3 control-label">Tanggal Peminjaman</label>
                            <div class="col-sm-9">
                                <input type="text" name="tgl_pinjam" class="form-control" id="inputEmail3" placeholder="Inputkan Tanggal Peminjaman" required>
                            </div>
                        </div>
						<div class="form-group">
                            <label for="tgl_kembali" class="col-sm-3 control-label">Tanggal Pengembalian</label>
                            <div class="col-sm-9">
                                <input type="text" name="tgl_kembali" class="form-control" id="inputEmail3" placeholder="Inputkan Tanggal Pengembalian" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-save"></span> Simpan</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=data&actions=peminjam" class="btn btn-danger btn-sm">
                        Kembali ke Data Peminjam
                    </a>
                </div>
            </div>
        
		</table>
		</tbody>

                    </table>
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
    $sql="INSERT INTO peminjaman VALUES ('$no_buku','$nama','$judul','$tgl_pinjam','$tgl_kembali')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Error");
    if ($query){
        echo "<script>window.location.assign('?page=data&actions=peminjam');</script>";
    }else{
        echo "<script>alert('Simpan Gagal');<script>";
    }
    }

?>
