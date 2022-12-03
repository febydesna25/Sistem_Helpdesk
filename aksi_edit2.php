<?php 
    include'koneksi.php';
    $query = mysqli_query($db, "UPDATE data_penanganan SET kode_penanganan='".$_POST['kode_penanganan']."',kode_tiket='".$_POST['kode_tiket']."',nama='".$_POST['nama']."',email='".$_POST['email']."',permasalahan='".$_POST['permasalahan']."',penanganan='".$_POST['penanganan']."' WHERE kode_penanganan='" . $_POST['kode_penanganan'] . "'");
        
        if($query){
            echo "<script>alert('Data berhasil di edit !')</script>";
            echo "<script>location = 'index2.php?p=data_penanganan'</script>";
        }else{
            echo "<script>alert('Input Gagal')</script>";

        }
?>