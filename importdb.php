<?php
ini_set('display_errors','On');
ini_set('error_reporting',E_ALL);

$jenis = (!empty($_GET['jenis'])) ? $_GET['jenis'] : 'jalan_kabupaten';
$url = (!empty($_GET['urlx'])) ? $_GET['urlx'] : 'importnew.csv';
$tahun = (!empty($_GET['tahun'])) ? $_GET['tahun'] : '2022';
$tipe = (!empty($_GET['tipe'])) ? $_GET['tipe'] : 'insert';
$tanggal = (!empty($_GET['tanggal'])) ? $_GET['tanggal'] : 'insert';
$filexparent = (!empty($_GET['filexparent'])) ? $_GET['filexparent'] : 'coba';
$nid = (!empty($_GET['nid'])) ? $_GET['nid'] : '22';


// if ($jenis =='Status Jalan Kabupaten'){
//     $jenis = 'jalan_kabupaten';
// }


$csv_file = './sites/default/files/import_data/'.$url;
$database_host = 'localhost'; 
$database_name = 'peta'; 
$database_table = $jenis; 
$database_username='root'; 
$database_password = 'Kamsi1Usman'; 


if ($tipe=='insert'){
   // log_import_file($url, $tahun, $jenis);
//$csv_file = '/var/www/html/peta/sites/default/files/import_data/data_0.csv';

if (!file_exists($csv_file)) {
    die('File not found. Make sure you specified the correct path.');
}
$conn = new mysqli($database_host, $database_username, $database_password, $database_name);
$newquery = "insert into import_file (id_file, nama, tahun, jenis) values (DEFAULT, '".$url."','".$tahun."','".$jenis."')";
//echo $newquery;
if ($conn->query($newquery) === TRUE) {
    echo "Record insert successfully";
  } else {
    echo "Error insert record: " . $conn->error;
  }
  $conn->close();



try {	
    $pdo = new PDO("mysql:host=$database_host;dbname=$database_name", 
        $database_username, $database_password,
        array(
            PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        )
    );
} catch (PDOException $e) {
    die('database connection failed: ' . $e->getMessage());
}

$input = fopen($csv_file, 'a+');
$input2 = fopen($csv_file, 'a+');
$first_row = fgetcsv($input, 1024, ',');

foreach ($first_row as $name) {
    //echo $name;
        $values_array[] = ':' . trim($name);   
}
array_push($values_array, ':tahun');
array_push($values_array, ':nid');
$columns = implode(', ', fgetcsv($input2, 1024, ','));
$columx=$columns.', tahun';
$columx=$columx.', nid';
$values = implode(', ', $values_array);
//print_r($columx);
//echo $values;
$count = 0;
while ($row = fgetcsv($input, 1024, ',')) {
    array_push($row,$tahun ); 
    array_push($row,0 ); 
  	$sql = "INSERT INTO $database_table($columx) VALUES($values)";
  
	$query = $pdo->prepare($sql);
	for ($i=0; $i < count($row); $i++) {
    
		$query->bindParam($values_array[$i],$row[$i]);	
	}
	 $query->execute();
	 $count++;
}



} 
elseif ($tipe == 'update') {
    $conn = new mysqli($database_host, $database_username, $database_password, $database_name);
  //  echo $csv_file;
        if (!file_exists($csv_file)) {
            die('File not found. Make sure you specified the correct path.');
        }
        if (($open = fopen($csv_file, "r")) !== FALSE) 
        {

          $temptanggal = strtotime($tanggal);
          $year = date("Y", $temptanggal) ;
        $ind = 0;
          while (($data = fgetcsv($open, 1000, ",")) !== FALSE) 
          {
            if ($ind > 0) {
                $array[] = $data;
              if( $data[10]!=''){
                $query = "update ". $jenis." set 
                Perke_Kini='". $data[10]."',
                Kondisi_Kini='". $data[9]."',
                Penanganan='". $data[8]."',
                Tgl='". $tanggal."',
                Tahun_Reali='". $year."',
                nid=".$nid."
                where No= '".$data[5]."'";
                    if ($conn->query($query) === TRUE) {
                        echo "Record update successfully";
                    } else {
                        echo "Error update record: " . $conn->error."<br>";
                    }
                 

              }
               
                    
               
            }
             $ind++;  
        }
        
          fclose($open);
          $conn->close();
        }



    createupdatedfile($filexparent, $jenis);


} elseif ($tipe == 'deletebulanan') {
  $conn = new mysqli($database_host, $database_username, $database_password, $database_name);
  $query = "update ". $jenis." set 
  Perke_Kini=null,
  Kondisi_Kini=null,
  Tgl=null,
  Tahun_Reali=null,
  nid=0
  where nid= ".$nid;
  if ($conn->query($query) === TRUE) {
    echo "Record deleted successfully";
  } else {
    echo "Error deleting record: " . $conn->error;
  }
  $conn->close();


  createupdatedfile($filexparent, $jenis);

}
else {
    $conn = new mysqli($database_host, $database_username, $database_password, $database_name);
    $query = "delete from ". $jenis." where tahun= '".$tahun."'";
   // echo $query; 

    if ($conn->query($query) === TRUE) {
        echo "Record deleted successfully";
      } else {
        echo "Error deleting record: " . $conn->error;
      }
      $conn->close();
}

function log_import_file($nama, $tahun, $jenis){
    $conn = new mysqli($database_host, $database_username, $database_password, $database_name);
    $query = "insert into import_file (id_file, nama, tahun, jenis) values (DEFAULT, '".$nama."','".$tahun."','".$jenis."')";

    echo $query;
    if ($conn->query($query) === TRUE) {
        echo "Record insert successfully";
      } else {
        echo "Error insert record: " . $conn->error;
      }
      $conn->close();
    

}



function createupdatedfile($nama, $jenis)
{


// Load the database configuration file 
$database_host = 'localhost'; 
$database_name = 'peta'; 
$database_table = $jenis; 
$database_username='root'; 
$database_password = 'Kamsi1Usman'; 

$conn = new mysqli($database_host, $database_username, $database_password, $database_name);
 $queryx="SELECT * FROM ".$database_table;
 //echo $queryx;
// Fetch records from database 
$query = $conn->query($queryx); 

$data = "No,Nm_Ruas,Kd_Inf,Panjang,STA_AWAL,STA_AKHIR,Fungsi,Kondisi,Tipe_Perke,Lebar_STA,Tahun_Reali,tahun,Tgl,Penanganan,Kondisi_Kini,Perke_Kini"."\n"; 

while($row = $query->fetch_assoc()){ 
    $STA_AKHIR = preg_replace('/\s+/', '', $row['STA_AKHIR']);
    $STA_AWAL = preg_replace('/\s+/', '', $row['STA_AWAL']);
  $data .= $row['No'].",".$row['Nm_Ruas'].",".$row['Kd_Inf'].",".$row['Panjang'].",".$STA_AWAL.",".$STA_AKHIR.",".$row['Fungsi'].",".$row['Kondisi'].",".$row['Tipe_Perke'].",".$row['Lebar_STA'].",".$row['Tahun_Reali'].",".$row['tahun'].",".$row['Tgl'].",".$row['Penanganan'].",".$row['Kondisi_Kini'].",".$row['Perke_Kini']."\n";
}
$file = '/var/www/html/peta/sites/default/files/import_data/'.$nama;
//chmod($file, 0777);
//file_put_contents($file, $fields);
file_put_contents($file, $data);
    echo "berhasil";
}







//echo 'Loaded a total of ' . $count . ' records from your CSV file.';