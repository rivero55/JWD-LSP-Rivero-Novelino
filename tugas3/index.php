<?php
include 'koneksi.php';
$tgl=date('Y-m-d');
?>
<!doctype html>
<html>

<head>
    <title>Sistem Informasi Perpustakaan</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid">
        <div class="p-5 mb-4 bg-dark text-white rounded-3">
            <div class="container-fluid py-5">
                <!-- <div class="nama-alamat-perpustakaan"> -->
					<div class="text-center">
                    <h1> PERPUSTAKAAN UMUM </h1>
					
                    <h4>Jl. Lembah Abang No 11, Telp: (021)55555555</h4>
					</div>
                </div>
                <!-- <div class="nama-alamat-perpustakaan"> -->
                </div>
                <!-- <button class="btn btn-primary btn-lg" type="button">Example button</button> -->
            </div>
        </div>
    </div>
    <div class="d-flex" id="wrapper">
        <div class="border-end" id="sidebar-wrapper">
            <div class="list-group list-group-flush">
                <a class="list-group-item list-group-item-action list-group-item-light p-3"
                    href="index.php?p=beranda">Beranda</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3"
                    href="index.php?p=anggota">Data Anggota</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="index.php?p=buku">Data
                    Buku</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3"
                    href="index.php?p=transaksi-peminjaman">Transaksi Peminjaman</a>
            </div>
        </div>
        <div class="container-fluid">
       
                <div class="container">
                    <!-- <div class="row"><br /><br /><br /> -->
                        <div class="col-md-10 col-md-offset-1"
                            style="background-image:url('../asanoer-background.jpg')">
                            <div class="col-md-4 col-md-offset-4">
                                <div class="panel panel-warning login-panel"
                                    style="background-color:rgba(255, 255, 255, 0.6);position:relative;">

                                    <div class="panel-footer">

                                    </div>
                                </div>
                            </div>
                        </div>
                    <!-- </div> -->
                </div>
                <?php
			$pages_dir='pages';
			if(!empty($_GET['p'])){
				$pages=scandir($pages_dir,0);
				unset($pages[0],$pages[1]);
				$p=$_GET['p'];
				if(in_array($p.'.php',$pages)){
					include($pages_dir.'/'.$p.'.php');
				}else{
					echo'Halaman Tidak Ditemukan';
				}
			}else{
				include($pages_dir.'/beranda.php');
			}
		?>
            </div>
        

    </div>
			<footer>
    <div class="bg-dark text-white text-center py-3">
        <h3>Sistem Informasi Perpustakaan (sipus) | Praktikum </h3>
    </div>
	</footer>
</body>


</html>