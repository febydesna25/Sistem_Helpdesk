<?php 
	include 'koneksi.php';
?>
<div class="center_col" role="main">
    <div class="col-md-12 col-sm-12  ">
        <div class="x_panel">
            <div class="x_content">
            <h2>Kategori Masalah</h2>
                <div class="table-responsive">
                    <table class="table table-striped jambo_table bulk_action">
                        <thead>
                            <tr class="headings">
                                <th class="column-title">No</th>
                                <th class="column-title">Kode Kategori</th>
                                <th class="column-title">Nama Kategori</th>
                                <th class="column-title">Action</th>
                            </tr>
                        </thead>
                        <?php
                            include 'koneksi.php';
                            if (isset($_GET['kategori_masalah'])) {
                                $data=trim($_GET['kategori_masalah']);
                                $sql="SELECT * FROM kategori_masalah JOIN data_bagian USING(kode_bagian)";
                            }else {
                                $sql="SELECT * FROM kategori_masalah JOIN data_bagian USING(kode_bagian) WHERE kode_bagian ='$_GET[kode_bagian]'";
                            }
                            $hasil=mysqli_query($db,$sql);
                            $no=0;
                            while ($data = mysqli_fetch_array($hasil)) {
                            $no++;
                            ?>
                        <tbody>
                            <tr class="even pointer">
                                <td><?php echo $no;?></td>
                                <td><?php echo $data["kode_kategori"]; ?></td>
                                <td><?php echo $data["nama_kategori"]; ?></td>
                                <td>
                                    <a href="index2.php?p=item_masalah&kode_kategori=<?php echo $data['kode_kategori']?>" class="btn btn-sm btn-primary">Inputkan</a>
                                </td>
                            </tr>
                        </tbody>
                        <?php
    }
    ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>