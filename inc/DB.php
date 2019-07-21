<?php

class DB {

	private $conn;

	public function __construct(){
		//echo "<br />Databázové funkce<br />";
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
	public function vyber($zCeho, $ordBy="id", $ascdesc="ASC"){
		$dotaz = "SELECT * FROM $zCeho ORDER BY $ordBy $ascdesc";
		$data = $this->conn->query($dotaz);

		if ( $data->num_rows > 0 ) {

			echo "<tr>";
			$i = 0;
			while ( $radek = $data->fetch_assoc()) {
				//echo var_dump($radek);
				$i = $i + 1;
				if ( $i % 2 ) {
					echo "<tr>";
				} else {
					echo "<tr class='sudy'>";
				}
				
				foreach ( $radek as $klic => $hodnota ) {

					echo "<td>" . $hodnota . "</td>";

				}
				echo "</tr>";
			}
			echo "</table>";
		} else {
			echo "<span class='error'>nic tu neni</span>" . $this->conn->error;
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