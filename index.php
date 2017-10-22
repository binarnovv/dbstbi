<?php
require_once('Enhanced_CS.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>MESIN PENCARIAN</title>
</head>
<body>
<center>
<h3>PENCARIAN KATA DASAR</h3>
<form method="post" action="">
<input type="text" name="kata" id="kata" size="20" value="<?php if(isset($_POST['kata'])){ echo $_POST['kata']; }else{ echo '';}?>">
<input class="btnForm" type="submit" name="submit" value="Submit"/>
</form>
<?php
if(isset($_POST['kata'])){
	$teksAsli = $_POST['kata'];
	echo "Teks asli : ".$teksAsli.'<br/>';
	$stemming = Enhanced_CS($teksAsli);
	echo "Kata dasar : ".$stemming.'<br/>';
}
?>
<br>
<a href="upload.php" style="background-color:yellow">Upload File</a> - <a href="hasil_tokenisasi.php" style="background-color:yellow">Hasil Tokenisasi</a>
<br/>
<br/>
<a href="hitungvektor.php" style="background-color:yellow">Hitung Vektor</a> - <a href="hitungbobot.php" style="background-color:yellow">Hitung Bobot</a>
- <a href="query.php" style="background-color:yellow">Hitung Query</a>

</body>
</html>