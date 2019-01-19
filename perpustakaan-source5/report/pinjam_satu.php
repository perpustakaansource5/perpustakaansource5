<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Peminjaman</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>  
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        $sql = "SELECT * FROM peminjaman WHERE no_buku='" . $_GET ['no_buku'] . "'";
        //proses query ke database
        $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
        //Merubaha data hasil query kedalam bentuk array
        $data = mysqli_fetch_array($query);
        ?>   

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel--->
                    <div class="text-center">
                        <h2>Sistem Informasi Perpustakaan SMA N 1 Tanjung Balai </h2>
                        <h4>Jalan Jendral Sudirman No. 12, Sei Dua <br> Kota Tanjungbalai, Sumatera Utara, 21211</h4>
                        <hr>
                        <h3>DATA PEMINJAM</h3>
                        <table class="table table-bordered table-striped table-hover"> 
                            <tbody>
								<tr>
                                    <td>Nomor Buku</td> <td><?= $data['no_buku'] ?></td>
                                </tr>
                                <tr>
                                    <td width="200">Nama Peminjam</td> <td><?= $data['nama'] ?></td>
                                </tr>
                                <tr>
                                    <td>Judul Buku</td> <td><?= $data['judul'] ?></td>
                                </tr>
								<tr>
                                    <td>Tanggal pinjam</td> <td><?= $data['tgl_pinjam'] ?></td>
                                </tr>
								<tr>
                                    <td>Tanggal Kembali</td> <td><?= $data['tgl_kembali'] ?></td>
                                </tr>
                            </tbody>
                            <tfoot> 
                                <tr>
                                    <td colspan="2" class="text-right">
                                        Tanjungbalai  <?= date("d-m-Y") ?>
                                        <br><br><br><br>
                                        <u>Kepala Sekolah SMAN 1<strong></u><br>
                                        NIP.102871448800005
									</td>
								</tr>
							</tfoot> 
                        </table>
                    </div>
                </div>
            </div>
    </body>
</html>