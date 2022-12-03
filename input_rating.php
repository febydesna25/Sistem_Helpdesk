<?php
    function generateRandomString($length = 4) {
        return substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)) )),1,$length);
    }
    
    $kode_rating= generateRandomString(); 
?>
<?php
    include "koneksi.php";
    $ambil = mysqli_query($db, "SELECT * FROM data_penanganan WHERE kode_penanganan ='$_GET[kode_penanganan]'");
    $data = mysqli_fetch_array($ambil);
	?>
<form method="POST" action="">
<div class="container-fluid">
	<div class="row">
		<div class="col">
			<h1>Input Rating</h1>
		</div>
	</div>
    <div class="form-group">
        <label>Kode Rating</label>
        <input type="text" name="kode_rating" value="<?php echo $kode_rating ?>"
        class="form-control">
    </div>
	<div class="form-group">
        <label>Kode Penanganan</label>
        <input type="text" name="kode_penanganan" value="<?= $data['kode_penanganan']?>"
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
        <input type="text" name="penanganan" value="<?= $data['penanganan']?>"
        class="form-control">
    </div>
    <div class="form-group">
        <label>Rating</label>
        <input type="text" name="beri_rating" placeholder="Masukkan Rating Penanganan"
        class="form-control">
    </div>
	<button type="submit" class="btn btn-primary btn-sm " name="submit">SIMPAN</button>
    <button type="reset" class="btn btn-warning btn-sm ">HAPUS</button><br>
</form>
<?php
    if (isset($_POST['submit'])) {
    include 'koneksi.php';
    $kode_rating = $_POST["kode_rating"];
    $kode_penanganan = $_POST["kode_penanganan"];
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $keluhan = $_POST["permasalahan"];
    $penanganan = $_POST["penanganan"];
    $rating = $_POST["beri_rating"];

    $q ="INSERT INTO rating (kode_rating,kode_penanganan,nama,email,permasalahan,penanganan,beri_rating) VALUES ('$kode_rating','$kode_penanganan','$nama','$email','$keluhan','$penanganan','$rating')";

    $hasil=mysqli_query($db,$q);

    if ($q) {
        echo "<script>alert('Data berhasil di input!')</script>";
        echo "<script>window.location='index2.php?p=rating_penanganan'</script>";
        }
    }
?>
