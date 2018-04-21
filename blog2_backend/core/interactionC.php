<?php
/**
 * Created by PhpStorm.
 * User: abderrahimgdah
 * Date: 4/01/18
 * Time: 20:10
 */
 include "../config/config.php" ;
class interactionC {

	public function __construct() {

	}
	public function addinteraction($i) {
		$db = config::getConnexion() ;
		$sql = "insert into inetraction(idclient, jaime, idpost)VALUES (:idclient  , :jaime , :idpost )"  ;
		$q = $db->prepare($sql) ;
		$q->bindValue(":idclient"  ,$i->getIdclient()) ;
		$q->bindValue(":jaime" , $i->getJaime()) ;
		$q->bindValue(":idpost" , $i->getIdpost()) ;
		return $q->execute() ;

	}
	public function checkjaime($idclient , $idpost) {
		$db = config::getConnexion()	 ;
		$sql = "select jaime  from inetraction WHERE idpost = :idpost and idclient = :idclient " ;
		$q = $db->prepare($sql) ;
		$q->bindValue(":idpost" , $idpost) ;
		$q->bindValue(":idclient" , $idclient) ;
		$q->execute() ;
		return $q->fetch() ;
	}
	public function getnombredejaime($idpost) {
		$db = config::getConnexion() ;
		$sql = "select count(*) from inetraction WHERE idpost = :idpost";
		$q= $db->prepare($sql) ;
		$q->bindValue(":idpost" , $idpost) ;
		$q->execute() ;
		return $q->fetchAll() ;
	}
	public function calculerjaime($idpost) {
		$db = config::getConnexion()	 ;
		$sql = "select  count(jaime)  from inetraction WHERE idpost = :idpost " ;
		$q = $db->prepare($sql) ;
		$q->bindValue(":idpost" , $idpost)  ;
		$q->execute() ;
		return $q->fetch() ;
	}
	public function supprimerjaime($idpost , $idclient) {
		$db = config::getConnexion() ;
		$sql = "delete from inetraction WHERE idpost= :idpost  AND idclient = :idclient " ;
		$q = $db->prepare($sql) ;
		$q->bindValue(":idpost" , $idpost ) ;
		$q->bindValue(":idclient" , $idclient) ;
		return $q->execute() ;
	}
	public function updatelove($i) {
		$db = config::getConnexion() ;
		$sql = "update inetraction set jaime = :jaime   " ;
		$q = $db->prepare($sql) ;
		return $q->execute() ;
	}
}