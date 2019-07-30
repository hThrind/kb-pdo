<?php

namespace kb-pdo;

/* ________________________________________________CLASS */
/* \kb-pdo\db::_________________________________________ */
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