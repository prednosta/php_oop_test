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

echo "<table><caption>uzivatele</caption><tr><th>id</th><th>jméno</th><th>příjmení</th>
		<th>telefon</th><th>email</th><th>heslo</th></tr>";


if ( isset($_GET['serad'])) {
	if ( $_GET['serad'] == "DESC" ) {
		$db->vyber("uzivatel", "id", "DESC");
	} else {
		$db->vyber("uzivatel", "id", "ASC");
	}
} else {
	$db->vyber("uzivatel", "id", "ASC");
}

?>

<a href="index.php?serad=ASC">serad ASC</a><br><a href="index.php?serad=DESC">serad desc</a>

<?php
include "./inc/foot.php" ; 

?>
