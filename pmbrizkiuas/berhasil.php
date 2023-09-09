<?php 
	include 'config.php';

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PMB Online</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

	<!-- bagian box formulir -->
	<section class="box-formulir">

		<h2>Pendaftaran Berhasil</h2>

		<div class="box">
			<h4>Kode Pendaftaran Anda adalah <?php echo $_GET['id'] ?></h4>
			<a href="cetak-bukti.php?id=<?php echo $_GET['id'] ?>" target="_blank" class="btn-cetak">Cetak Bukti Daftar</a>
		</div>

	</section>

</body>
</html>