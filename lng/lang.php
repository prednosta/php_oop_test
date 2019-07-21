<?php // vyber lokalizace
$lng = "cz";

if ( !isset( $_SESSION['lng'] ) ) {
	$_SESSION['lng'] = "cz";
}

if ( $_SESSION['lng'] == "de" ) {
	include_once "./lng/lng.de.php";
} else if ( $_SESSION['lng'] == "eng" ) {
	include_once "./lng/lng.eng.php";
} else if ( $_SESSION['lng'] == "cz" ) {
	include_once "./lng/lng.cz.php";
} else {
	include_once "./lng/lng.cz.php";
}

?>