
<?php require('header.php'); ?>

<div id="container">
	<div id="hero">
	<h2 align="center">Tabel Resep Obat</h2>
	<br>
    <table class="table">
        <thead>
            <tr>
                <td>No</td>
				<td>Id Resep</td>
				<td>Id Berobat</td>
				<td>Id Obat</td>               
            </tr>
        </thead>
        <?php
        include "koneksi.php";
        $no = 1;
        $query = mysqli_query($conn, 'SELECT * FROM resep_obat');
        while ($data = mysqli_fetch_array($query)) {
        ?>
           <tr>
                <td><?php echo $no++ ?></td>
				<td><?php echo $data['id_resep'] ?></td>
                <td><?php echo $data['id_berobat'] ?></td>
				<td><?php echo $data['id_obat'] ?></td>
            </tr>
        <?php } ?>
    </table>
	</div>
</div>
<?php require('footer.php'); ?>