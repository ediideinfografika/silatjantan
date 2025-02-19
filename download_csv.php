<?php 
 $jenis = (!empty($_GET['jenis'])) ? $_GET['jenis'] : 'jalan_kabupaten';

// Load the database configuration file 
$database_host = 'localhost'; 
$database_name = 'peta'; 
$database_table = $jenis; 
$database_username='root'; 
$database_password = 'Kamsi1Usman'; 

$conn = new mysqli($database_host, $database_username, $database_password, $database_name);
 $queryx="SELECT * FROM ".$jenis;
 //echo $queryx;
// Fetch records from database 
$query = $conn->query($queryx); 

 
if($query->num_rows > 0){ 
    $delimiter = ","; 
    $filename = "jalan_kabupaten_" . date('Y-m-d') . ".csv"; 
     
    // Create a file pointer 
    $f = fopen('/var/www/html/peta/sites/default/files/import_data/new/'.$filename, 'w'); 
     
    // Set column headers 
    $fields = array('No', 'Nm_Ruas', 'Kd_Inf', 'Panjang', 'STA_AWAL', 'STA_AKHIR', 'Fungsi', 'Kondisi', 'Tipe_Perke', 'Lebar_STA', 'Tahun_Reali', 'tahun', 'Tgl', 'Penanganan', 'Kondisi_Kini', 'Perke_Kini'); 
    fputcsv($f, $fields, $delimiter); 
     
    // Output each row of the data, format line as csv and write to file pointer 
    while($row = $query->fetch_assoc()){ 
        $status = ($row['status'] == 1)?'Active':'Inactive'; 
        $STA_AKHIR = preg_replace('/\s+/', '', $row['STA_AKHIR']);
        $STA_AWAL = preg_replace('/\s+/', '', $row['STA_AWAL']);
        $lineData = array($row['No'],$row['Nm_Ruas'],$row['Kd_Inf'],$row['Panjang'],$STA_AWAL,$STA_AKHIR,$row['Fungsi'],$row['Kondisi'],$row['Tipe_Perke'],$row['Lebar_STA'],$row['Tahun_Reali'],$row['tahun'],$row['Tgl'],$row['Penanganan'],$row['Kondisi_Kini'],$row['Perke_Kini']
    ); 
        fputcsv($f, $lineData, $delimiter); 
    } 

     
    //Move back to beginning of file 
    fseek($f, 0); 
     
    // Set headers to download file rather than displayed 
    header('Content-Type: text/csv'); 
    header('Content-Disposition: attachment; filename="' . $filename . '";'); 
     
    //output all remaining data on a file pointer 
    fpassthru($f); 
    
    fclose($fp);
} 
exit; 
 
?>