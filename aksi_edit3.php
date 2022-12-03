<?php 
    include'koneksi.php';
    $query = mysqli_query($db, "UPDATE rating SET kode_rating='".$_POST['kode_rating']."',kode_penanganan='".$_POST['kode_penanganan']."',nama='".$_POST['nama']."',email='".$_POST['email']."',permasalahan='".$_POST['permasalahan']."',penanganan='".$_POST['penanganan']."',beri_rating='".$_POST['beri_rating']."' WHERE kode_rating='" . $_POST['kode_rating'] . "'");
        
        if($query){
            echo "<script>alert('Data berhasil di edit !')</script>";
            echo "<script>location = 'index2.php?p=rating_penanganan'</script>";
        }else{
            echo "<script>alert('Input Gagal')</script>";

        }
?>