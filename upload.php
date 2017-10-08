<html>
<title>Form Upload</title>
<body>
<center>
<h3>UPLOAD FILE</h3>
<form enctype="multipart/form-data" method="POST" action="hasil_upload.php">
File yang di upload : <input type="file" name="fupload"><br><br>
Deskripsi File : <br><br>
<textarea name="deskripsi" rows="8" cols="40"></textarea><br><br>
<input type=submit value=Upload>
</form>