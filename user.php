<?php require('header.php'); ?>
<div id="container">
	<div id="hero">
	<h2 align="center">Tabel User</h2>
	<br>
    <table class="table">
        <thead>
            <tr>
            <td>No</td>
                <td>Id</td>
				<td>Username</td>
                <td>Password</td>  
                <td>Nama</td>            
            </tr>
        </thead>
        <?php
        include "koneksi.php";
        $no = 1;
        $query = mysqli_query($conn, 'SELECT * FROM user');
        while ($data = mysqli_fetch_array($query)) {
        ?>
            <tr>
                <td><?php echo $no++ ?></td>
				<td><?php echo $data['id'] ?></td>
                <td><?php echo $data['username'] ?></td>
                <td><?php echo $data['password'] ?></td>
                <td><?php echo $data['nama_lengkap'] ?></td>
            </tr>
        <?php } ?>
        </table>
	</div>
</div>
<?php require('footer.php'); ?>