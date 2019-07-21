<?php

class DB {

	private $conn;

	public function __construct(){
		echo "<br />Databázové funkce<br />";
	}

	//pripojeni databaze
	public function conn($serverName, $userName, $password, $dbName){
		$this->conn = new mysqli($serverName, $userName, $password, $dbName);

		//kontrola
		if ($this->conn->connect_error) {
			die( $this->conn->connect_error );
		}

		//nastaveni charset
		if (!$this->conn->set_charset("UTF8")) {
			die("<br />utf8 nenacten: " . $this->conn->error);
		} else {
			$this->conn->character_set_name();
		}
	}

	//vyber dat
	public function vyber($zCeho){
		$dotaz = "SELECT * FROM $zCeho";
		$data = $this->conn->query($dotaz);

		if ( $data->num_rows > 0 ) {
			while ( $radek = $data->fetch_assoc()) {
				foreach ( $radek as $hodnota ) {
					echo $hodnota . "<br />";
				}
			}
		} else {
			echo "Nějaká chyba " . $this->conn->error;
		}
	}

	//zapis dat
	public function zapis(){
		
	}


	public function __destruct(){
		//echo "<br />Zazvonil zvonec a DB je konec<br />";
		$this->conn->close();
	}
}

?> 