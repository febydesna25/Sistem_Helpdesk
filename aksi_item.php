<?php 
    include 'koneksi.php';
    $query = mysqli_query($db, "INSERT INTO item_masalah VALUES('".$_POST['kode_item']."','".$_POST['kode_kategori']."','".$_POST['permasalahan']."','".$_POST['nama']."','".$_POST['email']."','".$_POST['alamat']."','".$_POST['notelp']."' )");
        
        if($query){
            echo "<script>alert('data berhasil di input')</script>";
            echo "<script>location = 'index2.php?p=data_item'</script>";
        }else{
            echo "<script>alert('Input Gagal')</script>";

        }
?>