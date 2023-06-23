<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

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
		text-decoration: none;
	}

	a:hover {
		color: #97310e;
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
		min-height: 96px;
	}

	p {
		margin: 0 0 10px;
		padding:0;
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
	
<div id="header"> 
		<ul>
			<li><a href="<?php echo site_url ('C_Beranda/index'); ?>">Home</a></li>
			<li><a href="<?php echo site_url ('C_Beranda/linkproduk'); ?>">About Us</a></li>
			<li><a href="<?php echo site_url ('C_Beranda/linkFAQ'); ?>">FAQ</a></li>
		</ul>
	</div>
<div>
<?php echo "<h1>" . $title . "</h1>";?>
	<table id="customers">
		<tr>
			<th>Nama</th>
			<th>Email</th>
			<th>Nomor Telpon</th>
			<th></th>
		</tr>
		<?php
$cacah=1;
		echo "<a href='createForm'><button>Create</button></a>";
		foreach ($data as $data){
		?>
		<tr>
			<td><?= $cacah ?> </td>
			<td><?= $data->nama ?> </td>
			<td><?= $data->email?> </td> 
			<td><?= $data->nohp ?> </td> 
			<td>
			<a href="<?php echo base_url('/index.php/C_Pesan/updateForm/'). $data->user_id ?>"><button>Update</button></a>
			<a href="<?php echo site_url('C_Pesan/delete/'). $data->user_id ?>"><button>Delete</button></a>
			</td>
		</tr>
		<?php
			$cacah++;
		}	
		?>
	</table>
</div>
</div>

</body>
</html>