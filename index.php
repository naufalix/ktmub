<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>KTM UB SIMULATOR</title>
	<link rel="icon" href="img/ub.png">
	<link rel="stylesheet" href="css/style.css" >
</head>
<body>
	<div class="container c-anim">
		<div class="center form-box">
			<p class="title">KTM UB SIMULATOR (Versi Lama)</p>
			<div>
				<form action="ktm.php" method="post">
					<table>
						<tr>
						    <td>NIM</td><td>: </td>
						    <td><input class="kolom" type="text" name="nim" required></td>
						</tr>
						<tr>
						    <td>Nama</td><td>: </td>
						    <td><input class="kolom" type="text" name="nama" required></td>
						</tr>
						<tr>
						    <td>Fakultas</td><td>: </td>
						    <td><input class="kolom" type="text" name="fakultas" required></td>
						</tr>
						<tr>
						    <td>Jurusan</td><td>: </td>
						    <td>
						    	<table><tr>
						    		<td><select class="combobox" name="jenjang">
											<option value="S1">S1</option>
											<option value="S2">S2</option>
											<option value="S3">S3</option>
											<option value="D3">D3</option>
											<option value="D4">D4</option>
									</select></td>
					    			<td><input class="kolom2" type="text" name="jurusan" required></td>
						    	</tr></table>
						    </td>
						</tr>
					</table>
					<p style="text-align: right; margin-right:8px"><button class="btn btn-blue">Submit!</button></p>
				</form>
			</div>
		</div>

	</div>
</bod>
</html>