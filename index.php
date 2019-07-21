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

echo "<table><tr><th>id</th><th>jméno</th><th>příjmení</th>
		<th>telefon</th><th>email</th><th>heslo</th></tr>";
$db->vyber("uzivatel");

echo "<table><tr><th>id</th><th>nazev firmy</th><th>ico</th>
		<th>telefon</th><th>adresa</th><th>jednatel</th>
		<th>datum registrace</th></tr>";
$db->vyber("zakaznik");

echo "<table><tr><th>id</th><th>datum vytvoreni</th><th>max cena</th>
		<th>popis</th></tr>";
$db->vyber("zakazky");


$db->vyber("firma");


include "./inc/foot.php" ; 

?>
