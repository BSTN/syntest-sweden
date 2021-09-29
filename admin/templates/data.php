<?php
	
	include("../../config.php");

	try {
		$dbc = new PDO('mysql:host='.$db['host'].';dbname='.$db['dbname'], $db['username'], $db['password']);
		$dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch (PDOException $e) {
		echo $e;
	}

	$query = "SELECT * FROM profile INNER JOIN bokstaverochsiffror ON profile.PROFILEID = bokstaverochsiffror.PROFILEID";

	$error = false;
	try {
		// error_log($query);
		$stmt = $dbc->prepare($query);
		$stmt->execute();
		$rows = $stmt->fetchAll();
		foreach($rows as $k => $row){
			$time = date( 'd M Y — H:i:s', strtotime( $row['TIMESTAMP'] ) );
			$all = array();
			$matches = 0;
			echo "<div id='kind'>";
				echo "<div><label>Code:</label>".$row['CODE']."</div>";
				foreach(range(1,72) as $k){
					$k = str_pad($k,2,"0",STR_PAD_LEFT);
					$all[$row["symbol".$k]][] = $row["color".$k];
					// echo "symbol".$k."= ".$row["color".$k]."<br>";
				}
				foreach($all as $k => $v){
					// echo $v[0]."==".$v[1]."<br>";
					if($v[0]==$v[1]) $matches += 1;
				}
				echo "<div><label>Exact Matches:</label>$matches/36</div>";
				echo "<div><label>Time:</label>".$time . "</div>";
				echo "<div><label>IP adres:</label>".$row['IP'] . "</div>";
				echo "<div><label>Setname:</label>".$row['setname'] . "</div>";
			echo "</div>";
		}
	} catch (\PDOException $e) {
		error_log("error: ".$e->getMessage());
		exit();
	}
?>