<?php
    include 'koneksi.php';
    $query = mysqli_query($db, "DELETE FROM rating WHERE kode_rating = '".$_GET['kode_rating']."'");
    
    if($query){
        echo "<script>alert('Data Berhasil Di Hapus')</script>";
        echo "<script>location = 'index2.php?p=rating_penanganan'</script>";
    }else{
        echo "<script>alert('Data Gagal Di Hapus')</script>";
    }

?>