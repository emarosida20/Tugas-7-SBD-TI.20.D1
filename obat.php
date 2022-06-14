<?php require('header.php'); ?>
<div id="container">
	<div id="hero">
	<h2 align="center">Tabel Obat</h2>
	<br>
    <table class="table">
        <thead>
            <tr>
                <td>No</td>
				        <td>Id Obat</td>
                <td>Nama Obat</td>               
            </tr>
        </thead>
        <?php
        include "koneksi.php";
        $no = 1;
        $query = mysqli_query($conn, 'SELECT * FROM obat');
        while ($data = mysqli_fetch_array($query)) {
        ?>
            <tr>
                <td><?php echo $no++ ?></td>
				        <td><?php echo $data['id_obat'] ?></td>
                <td><?php echo $data['nama_obat'] ?></td>
            </tr>
        <?php } ?>
        </table>
	</div>
</div>
<?php require('footer.php'); ?>