<?php
/**
 * using mysqli_connect for database connection
 */
 

$databaseHost = 'localhost';
$databaseName = 'tiket_wisata';
$databaseUsername = 'root';
$databasePassword = '';
 
$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
 
if( !$mysqli ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}else{
    echo "bisa cuy";
}
?>