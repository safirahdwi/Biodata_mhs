<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<link href="<?php echo base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet"></link>
	<script src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>
	<script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
	<meta charset="utf-8">
	<title>Biodata</title>

	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
</head>
<body>

<div id="container">
	<nav class="navbar navbar-dark" style="background-color: #66CDAA;">
		<span class="navbar-brand mb-0 h1">Form Edit</span>
	</nav>
	<div id="body">
		<br>
		<a class="btn btn-primary btn-sm" href="<?php echo site_url('welcome/index') ?>" role="button">Kembali</a>
		<?php if($dataEdit){
			$id = $dataEdit->no;
			$nama = $dataEdit->nama;
			$jenis_kelamin = $dataEdit->jenis_kelamin;
			$alamat = $dataEdit->alamat;
			$tanggal_lahir = $dataEdit->tanggal_lahir;
		} else{
			$nama = "";
			$jenis_kelamin = "";
			$alamat = "";
			$tanggal_lahir = "";
			}?>
		<form action="<?php echo site_url('welcome/update/' .$id) ?>" method="POST">
			<br>
			<div class="form-group">
    		<label for="exampleFormControlInput1">nama</label>
    		<input type="text" class="form-control" name="nama" value="<?php echo $nama?>"/>
    		<br>
    		<label for="exampleFormControlInput1">jenis_kelamin</label>
    		<input type="text" class="form-control" name="jenis_kelamin" value="<?php echo $jenis_kelamin?>">
    		<br>
  			<label for="exampleFormControlTextarea1">alamat</label>
    		<input type="text" class="form-control" name="alamat" value="<?php echo $alamat?>" rows="3"></input>
    		<br>
    		<label for="exampleFormControlInput1">tanggal_lahir</label>
    		<input type="date" class="form-control" name="tanggal_lahir" value="<?php echo $tanggal_lahir?>"/ >
    		</div>
			<input class="btn btn-primary" type="submit" value="Simpan">
		</form>
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>

</body>
</html>