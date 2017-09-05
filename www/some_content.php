<?php
require_once "dblogin.php" ;
$connection = @new mysqli($host, $user, $password, $dbase) ;
$hea = "Error?" ;
$con = "Error?" ;
if ($connection -> errno ==0 ){
		if($data = @$connection -> query("SELECT h AS he, c AS co FROM test WHERE klucz = $number ;") ){
		if ($data -> num_rows() == 0){
			$data = $connection -> query("SELECT h AS he, c AS co FROM test WHERE klucz = 0 ;") ;
		}
		$array_row = $data -> fetch_assoc() ;
		$hea = $array_row['he'] ;
		$con = $array_row['co'];
		} ;
};
$connection -> close();
echo <<<END
$hea <br/> $con
END;
?>