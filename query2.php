<?php
	try {
		$sql = "select * FROM signupfights";
		// PDO->query(); er notað fyrir SELECT statements ONLY, skilar object af POOStatement class
		$result = $pdo ->query($sql);

	} catch (Exception $e) {
		echo "Ekki tókst að ná í gögnin". "<br>" .$e->getMessage();
	}
	// fetch() sækir eina röð í einu frá database.
	while ($row = $result -> fetch()) {
		$mynd[] = array($row['firstName'], $row['lastName'], $row['email']);
	}
?>