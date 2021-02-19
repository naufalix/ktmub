<?php 
$nama = $_POST["nama"];
$nim = $_POST["nim"];
$jenjang = $_POST["jenjang"];
$fakultas = $_POST["fakultas"];
$jurusan = $_POST["jurusan"];

if ($nama==false||$nim==false||$jenjang==false||$fakultas==false||$jurusan==false){
	header("Location: index.php");
	exit;
}

 ?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>KTM UB SIMULATOR</title>
	<link rel="icon" href="img/ub.png">
	<link rel="stylesheet" href="css/style.css" >
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Arial:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
	
</head>
<body>
	<div class="container c-anim">
		<div class="center ktm-box">
			<div id="divRow" class="row">
				<div class="col-a"></div>
				<div id="foto" class="col-b foto" style="background-image:url(https://siakad.ub.ac.id/dirfoto/foto/foto_2020/<?php echo $nim; ?>.jpg);"></div>
				<div class="col-c"></div>
				<div class="data">
					<p id="font1" class="p1"><?php echo $nim; ?></p>
					<p id="font2" class="p2"><?php echo $nama; ?></p>
					<p id="font3" class="p3"><?php echo $fakultas; ?></p>
					<p id="font4" class="p4"><?php echo $jenjang; ?> <?php echo $jurusan; ?></p>
				</div>
			</div>
			<img id="img1" class="img1" src="img/ktm1.png">
			<img id="img2" class="img2" alt="Barcode" src="https://www.barcodesinc.com/generator/image.php?code=<?php echo $nim; ?>&style=68&type=C128B&width=558&height=67&xres=2&font=3">
		</div>
		<div class="note">
			<p>Jika Barcode tidak muncul, klik <a href="https://www.barcodesinc.com/generator/image.php?code=<?php echo $nim; ?>&style=68&type=C128B&width=558&height=67&xres=2&font=3"">disini</a> lalu kembali ke halaman ini dan refresh!</p>
			<br>
			<p>Jika NIM sudah benar tapi foto tidak muncul <a target="_blank" href="https://wa.me/6285234006051?text=Kak, nim saya sudah benar tapi fotonya tidak muncul!">hubungi saya,</a> bantu saya mengatasi masalah ini!</p>
		</div>
	</div>
</bod>
<script type="text/javascript">
    var divWidth = document.getElementById("foto").clientWidth;
    document.getElementById("foto").style.height = divWidth+"px";
	var ktmWidth = document.getElementById("divRow").clientWidth;
    document.getElementById("divRow").style.paddingTop = (ktmWidth/5)+"px";
    document.getElementById("img1").style.borderRadius = (ktmWidth/27)+"px "+(ktmWidth/27)+"px 0px 0px";
    document.getElementById("img2").style.borderRadius = "0px 0px "+(ktmWidth/27)+"px "+(ktmWidth/27)+"px";
    document.getElementById("font1").style.fontSize = (ktmWidth/28.4)+"px";
    document.getElementById("font2").style.fontSize = (ktmWidth/28.4)+"px";
    document.getElementById("font3").style.fontSize = (ktmWidth/33.78)+"px";
    document.getElementById("font4").style.fontSize = (ktmWidth/33.78)+"px";
</script>
</html>