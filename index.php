<?php 
include "./inc/head.php" ;

if ( isset($_GET['lang']) ) {
	if ($_GET['lang'] == "de") {
		$_SESSION['lng'] = "de";
	} elseif ($_GET['lang'] == "eng") {
		$_SESSION['lng'] = "eng";
	} elseif ($_GET['lang'] == "cz") {
		$_SESSION['lng'] = "cz";
	}
} else {
	$_SESSION['lng'] = "cz";
}
include "./lng/lang.php";
include "./inc/DB.php";
?>

<H1><?php echo $APP_NAME ?></H1>

<?php

$db = new DB;
$db->conn("localhost", "root", "", "coolmoney");

$db->vyber("uzivatel");


include "./inc/foot.php" ; 

?>
