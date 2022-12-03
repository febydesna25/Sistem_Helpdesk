<?php
    function generateRandomString($length = 4) {
        return substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)) )),1,$length);
    }
    
    $kode_penanganan= generateRandomString(); 
?>
<?php
    include "koneksi.php";
    $ambil = mysqli_query($db, "SELECT * FROM tiket_masuk WHERE kode_tiket ='$_GET[kode_tiket]'");
    $data = mysqli_fetch_array($ambil);
	?>
<form method="POST" action="">
<div class="container-fluid">
	<div class="row">
		<div class="col">
			<h2>Input Penanganan</h2>
		</div>
	</div>
    <div class="form-group">
        <label>Kode Penanganan</label>
        <input type="text" name="kode_penanganan" value="<?php echo $kode_penanganan ?>"
        class="form-control">
    </div>
	<div class="form-group">
        <label>Kode Tiket</label>
        <input type="text" name="kode_tiket" value="<?= $data['kode_tiket']?>"
        class="form-control">
    </div>
    <div class="form-group">
        <label>Nama</label>
        <input type="text" name="nama" value="<?= $data['nama']?>"
        class="form-control">
    </div>
    <div class="form-group">
        <label>Email</label>
        <input type="email" name="email" value="<?= $data['email']?>"
        class="form-control">
    </div>
    <div class="form-group">
        <label>Keluhan</label>
        <input type="text" name="permasalahan" value="<?= $data['permasalahan']?>"
        class="form-control">
    </div>
    <div class="form-group">
        <label>Penanganan</label>
        <input type="text" name="penanganan" placeholder="Masukkan Penanganan"
        class="form-control">
    </div>
	<button type="submit" class="btn btn-primary btn-sm " name="submit">SIMPAN</button>
    <button type="reset" class="btn btn-warning btn-sm ">HAPUS</button><br>
</form>
<?php
    if (isset($_POST['submit'])) {
    include 'koneksi.php';
    $kode_penanganan = $_POST["kode_penanganan"];
    $kode_tiket = $_POST["kode_tiket"];
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $keluhan = $_POST["permasalahan"];
    $penanganan = $_POST["penanganan"];

    $q ="INSERT INTO data_penanganan (kode_penanganan,kode_tiket,nama,email,permasalahan,penanganan) VALUES ('$kode_penanganan','$kode_tiket','$nama','$email','$keluhan','$penanganan')";

    $hasil=mysqli_query($db,$q);

    if ($q) {
        echo "<script>alert('Data berhasil di input!')</script>";
        echo "<script>window.location='index2.php?p=data_penanganan'</script>";
        }
    }
?>
