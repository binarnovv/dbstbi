<?php
//membuat koneksi ke database
$host = 'localhost';
  $user = 'root';      
  $password = '';      
  $database = 'dbstbi';  
    
  $konek_db = mysql_connect($host, $user, $password);    
  $find_db = mysql_select_db($database) ;
?>


<a href="index.php" style="background-color:yellow">Home</a><br>
<a>Kosongkan Tabel : </a> <a href="empty.php" style="background-color:green">> KOSONGKAN </a> 

<center> 
HASIL TOKENISASI DAN STEMMING
<br>
<br>

<!-- ///////////////////////////// Script untuk membuat tabel///////////////////////////////// -->

<table  border='1' Width='800'>  
<tr>
    <th> Nama File </th>
    <th> Tokenisasi </th>
    <th> Stemming</th>
    
</tr>

<?php  
// Perintah untuk menampilkan data
$queri="select * from dokumen" ;  //menampikan SEMUA

$hasil=MySQL_query ($queri);    //fungsi untuk SQL

// perintah untuk membaca dan mengambil data dalam bentuk array
while ($data = mysql_fetch_array ($hasil)){
$id = $data['dokid'];
 echo "    
        <tr>
        <td>".$data['nama_file']."</td>
        <td>".$data['token']."</td>
        <td>".$data['tokenstem']."</td>
        
        </tr> 
        ";
        
}

?>

</table>