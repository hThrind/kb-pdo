<?php

namespace karteblanche\pdo;

/* ________________________________________________CLASS */
/* \karteblanche\pdo\db::_______________________________ */
/* _____________________________________________________ */

use PDO;

class db {

	public static function connexion($host, $dbname, $charset, $login, $password) {

		$fst = 'mysql:host='.$host.';dbname='.$dbname.';charset='.$charset;

		try {
			$cnx = new PDO($fst, $login, $password);
			$cnx->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}
		catch (PDOException $error) {
			//print "ERROR : " . $error->getMessage() . "<br/>";
			die();
		}
		return $cnx;
	}
}
?>
