<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hasbi Alwi Kusmana</title>
    
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> -->
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"/>
<script href="jquery/jquery-3.4.1.js"></script>
<script href="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>

	<h2 class="text-center">Hasbi Alwi Kusmana</h2>
	<br/>
	<a href ="tambah.php" class="btn btn-success btn-sm">
	<i class="fa fa-plus"></i>Tambah Data</a>
	<br/>
	<br/>
	<table class ="text-center table table-bordered table-striped table-hover" border="1" style="border-collapse:collapse">
		<tr>
			<th>NO</th>
			<th>Nama produk</th>
			<th>Keterangan</th>
			<th>Harga</th>
			<th>Jumlah</th>
			<th>Aksi</th>
		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from produk");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['nama_produk']; ?></td>
				<td><?php echo $d['keterangan']; ?></td>
				<td>Rp. <?php echo number_format($d['harga'],'0',',','.');
				 ?></td>
				 <td><?php echo $d['jumlah'];
				 ?></td>
				<td>
					<a href ="edit.php?id=<?php echo $d ['id']; ?>" 
                    class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
                    <a href ="hapus.php?id=<?php echo $d ['id']; ?>" onclick="return confirm('Data akan hilang, Apakah yakin mau menghapus data ini?')" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
</body>
</html>