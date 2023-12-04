<?php

?>

<center>
<h3 style="margin-left: 1px;">
    <img src="/keuangan/img/unusa.png" alt="Logo Unusa" style="vertical-align: middle;" width="50">
    <span style="margin-left: 20px;">Data Pemasukan " Prodi S1 Sistem Informasi"</span>
	
</h3>
<table border="" cellpadding="5"> 
<tr>    
<th>ID Pemasukan</th>
<th>Tgl Pemasukan</th>
<th>Jumlah</th>    
<th> ID Sumber</th> 
</tr>  
<?php  
// Load file koneksi.php  
include "koneksi.php";    
// Buat query untuk menampilkan semua data siswa 
$query = mysqli_query($koneksi, "SELECT * FROM pemasukan");
// Untuk penomoran tabel, di awal set dengan 1 
while($data = mysqli_fetch_array($query)){ 
    // Ambil semua data dari hasil eksekusi $sql 
    echo "<tr>";    
    echo "<td>".$data['id_pemasukan']."</td>";   
    echo "<td>".$data['tgl_pemasukan']."</td>";    
    echo "<td>".$data['jumlah']."</td>";    
    echo "<td>".$data['id_sumber']."</td>";      
    echo "</tr>";        
}  
?></table>

</center>

<!-- Tombol Cetak -->


<script>
function cetak() {
    window.print();
}
</script>
