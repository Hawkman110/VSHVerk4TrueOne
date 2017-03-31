<?php
try{

	# Hér þarf að breyta dbname, notendanafni og lykilorð
	$source = 'mysql:host=tsuts.tskoli.is;dbname=1801993229_mutant';
	$user = '1801993229';
	$password = 'Thehawk110';

	# tegund og nafn á server, nafn á  db og aðgangur
	$pdo = new PDO($source, $user, $password);

	# stillum hann afhvernig hann með höndal villur
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	# við getum notað exec fyrir INSERT; IPDATE og DELETE
	# notum utf-8 og gerum það með SQL fyrirspurn exec sendir sql fyrispurnir til database
	$pdo->exec('SET NAMES "utf8"');
}
catch (PDOException $e){

	#skemmtilegri skilaboð til notanda sjá kóða t.d. bls. 99
	echo "tenging tókst ekki". "<br>" .$e->getMessage();
}
?>