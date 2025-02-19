<?php 
ini_set('display_errors','On');
ini_set('error_reporting',E_ALL);
// Load the database configuration file 
$database_host = 'localhost'; 
$database_name = 'peta'; 
$database_table = 'jalan_kabupaten'; 
$database_username='root'; 
$database_password = 'Kamsi1Usman'; 

$conn = new mysqli($database_host, $database_username, $database_password, $database_name);
 $queryx="SELECT * FROM ".$database_table;
 //echo $queryx;
// Fetch records from database 
$query = $conn->query($queryx); 

$data = "No, Nm_Ruas, Kd_Inf, Panjang, STA_AWAL, STA_AKHIR, Fungsi, Kondisi, Tipe_Perke, Lebar_STA, Tahun_Reali, tahun, Tgl, Penanganan, Kondisi_Kini, Perke_Kini"."\n"; 

while($row = $query->fetch_assoc()){ 
    $STA_AKHIR = preg_replace('/\s+/', '', $row['STA_AKHIR']);
    $STA_AWAL = preg_replace('/\s+/', '', $row['STA_AWAL']);
  $data .= $row['No'].",".$row['Nm_Ruas'].",".$row['Kd_Inf'].",".$row['Panjang'].",".$STA_AWAL.",".$STA_AKHIR.",".$row['Fungsi'].",".$row['Kondisi'].",".$row['Tipe_Perke'].",".$row['Lebar_STA'].",".$row['Tahun_Reali'].",".$row['tahun'].",".$row['Tgl'].",".$row['Penanganan'].",".$row['Kondisi_Kini'].",".$row['Perke_Kini']."\n";
}
$file = '/var/www/html/peta/sites/default/files/import_data/new/filexxx.csv';
//chmod($file, 0777);
//file_put_contents($file, $fields);
file_put_contents($file, $data);
?>