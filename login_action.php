<?php 

session_start();

include 'koneksi.php';

$username = $_POST['username'];
$password =md5($_POST['password']);

$query = mysqli_query($db, "SELECT * FROM user WHERE username = '$username' AND password='$password'");
$jumlah = mysqli_num_rows($query);

if($jumlah > 0){
    $row = mysqli_fetch_assoc($query);
    $_SESSION['username'] = $username;        

    echo "<script>alert('Login Berhasil')</script>";
    echo "<script>location = 'index2.php'</script>";
}else{
    echo"<script>alert('Password Salah')</script>";
    echo "<script>location = 'index.php'</script>";
}

?>