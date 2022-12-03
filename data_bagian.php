<?php 
	include 'koneksi.php';
?>
<div class="center_col" role="main">
    <div class="col-md-12 col-sm-12  ">
        <div class="x_panel">
            <div class="x_content">
                <h1> Data Bagian</h1>
                <div class="table-responsive">
                    <table class="table table-striped jambo_table bulk_action">
                        <thead>
                            <tr class="headings">
                                <th class="column-title">No</th>
                                <th class="column-title">Kode Bagian</th>
                                <th class="column-title">Nama Bagian</th>
                                <th class="column-title">Action</th>
                            </tr>
                        </thead>
                        <?php
                            include 'koneksi.php';
                            if (isset($_GET['data_bagian'])) {
                                $databagian=trim($_GET['data_bagian']);
                                $sql="SELECT * FROM data_bagian";
                            }else {
                                $sql="SELECT * FROM data_bagian";
                            }
                            $hasil=mysqli_query($db,$sql);
                            $no=0;
                            while ($data = mysqli_fetch_array($hasil)) {
                            $no++;
                            ?>
                        <tbody>
                            <tr class="even pointer">
                                <td><?php echo $no;?></td>
                                <td><?php echo $data["kode_bagian"]; ?></td>
                                <td><?php echo $data["nama_bagian"]; ?></td>
                                <td>
                                    <a href="index2.php?p=data_kategori&kode_bagian=<?php echo $data['kode_bagian']?>" class="btn btn-sm btn-primary">Pilih Kategori</a>
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