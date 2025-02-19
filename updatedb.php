<?php

$jenis = (!empty($_GET['jenis'])) ? $_GET['jenis'] : 'jalan_kabupaten';
$url = (!empty($_GET['url'])) ? $_GET['urlx'] : 'importnew.csv';
$tahun = (!empty($_GET['tahun'])) ? $_GET['tahun'] : '2022';
$tipe = (!empty($_GET['tipe'])) ? $_GET['tipe'] : 'insert';


if ($Jenis ='Status Jalan Kabupaten'){
    $jenis = 'jalan_kabupaten';
}


$csv_file = '/var/www/html/peta/sites/default/files/import_data/'.$url;
$database_host = 'localhost'; 
$database_name = 'peta'; 
$database_table = $jenis; 
$database_username='root'; 
$database_password = 'Kamsi1Usman'; 


if ($tipe=='insert'){
    
 
//$csv_file = '/var/www/html/peta/sites/default/files/import_data/data_0.csv';

if (!file_exists($csv_file)) {
    die('File not found. Make sure you specified the correct path.');
}

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
$columns = implode(', ', fgetcsv($input2, 1024, ','));
$columx=$columns.', tahun';
$values = implode(', ', $values_array);
//print_r($columx);
//echo $values;
$count = 0;
while ($row = fgetcsv($input, 1024, ',')) {
    array_push($row,$tahun ); 
  	$sql = "INSERT INTO $database_table($columx) VALUES($values)";
  
	$query = $pdo->prepare($sql);
	for ($i=0; $i < count($row); $i++) {
    
		$query->bindParam($values_array[$i], $row[$i]);	
	}
	 $query->execute();
	 $count++;
}

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



//echo 'Loaded a total of ' . $count . ' records from your CSV file.';