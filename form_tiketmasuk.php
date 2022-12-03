<?php
    function generateRandomString($length = 4) {
        return substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)) )),1,$length);
    }
    
    $kode_tiket= generateRandomString(); 
?>
<?php
    include "koneksi.php";
    $ambil = mysqli_query($db, "SELECT * FROM item_masalah WHERE kode_item ='$_GET[kode_item]'");
    $data = mysqli_fetch_array($ambil);
	?>
<form method="POST" action="">
<div class="container-fluid">
	<div class="row">
		<div class="col">
			<h2>Permohonanan Tiket masuk</h2>
		</div>
	</div>
    <div class="form-group">
        <label>Kode Tiket</label>
        <input type="text" name="kode_tiket" value="<?php echo $kode_tiket ?>"
        class="form-control">
    </div>
	<div class="form-group">
        <label>Kode Item</label>
        <input type="text" name="kode_item" value="<?= $data['kode_item']?>"
        class="form-control">
    </div>
    <div class="form-group">
        <label>Keluhan</label>
        <input type="text" name="permasalahan" value="<?= $data['permasalahan']?>"
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
        <label>Alamat</label>
        <input type="text" name="alamat" value="<?= $data['alamat']?>"
        class="form-control">
    </div>
    <div class="form-group">
        <label>No Telepon</label>
        <input type="text" name="notelp" value="<?= $data['notelp']?>"
        class="form-control">
    </div>
	<button type="submit" class="btn btn-primary btn-sm " name="submit">Ajukan</button>
    <button type="reset" class="btn btn-warning btn-sm">Batal</button><br>
</form>
<?php
    if (isset($_POST['submit'])) {
    include 'koneksi.php';
    $kode_tiket = $_POST["kode_tiket"];
    $kode_item = $_POST["kode_item"];
    $keluhan = $_POST["permasalahan"];
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $no_telepon = $_POST["notelp"];
    $alamat = $_POST["alamat"];

    $q ="INSERT INTO tiket_masuk (kode_tiket,kode_item,permasalahan,nama,email,alamat,notelp) VALUES ('$kode_tiket','$kode_item','$keluhan','$nama','$email','$alamat','$no_telepon')";

    $hasil=mysqli_query($db,$q);

    if ($q) {
        echo "<script>alert('Data berhasil di input!')</script>";
        echo "<script>window.location='index2.php?p=data_tiketmasuk'</script>";
        }
    }
?>
