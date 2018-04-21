<?php

include "../core/postclassC.php";

class commentaireclasseC {

	public function __construct() {
	}
	public function addcommentaire($c) {
		$db = config::getConnexion() ;
		$sql = "insert into commentaire (idcliet, commentaire , idpost) VALUES (:idclient , :commentaire , :idpost) " ;
		$q = $db->prepare($sql) ;
		$q->bindValue(":idclient" , $c->getIdclient()) ;
		$q->bindValue(":commentaire" , $c->getCommentaire()) ;
		$q->bindValue(":idpost" , $c->getIdpost() ) ;
		return $q->execute() ;
	}
	public function affichecommentaire($id) {
		$db = config::getConnexion() ;
		$sql = "select * from commentaire  WHERE idpost = :idpost AND approuve = 1 " ;
		$q = $db->prepare($sql) ;
		$q->bindValue(":idpost" , $id) ;
        $q->execute() ;
		return $q->fetchAll();
	}
	public function affichecommetaireall() {
		$db = config::getConnexion() ;
		$sql = "select * from commentaire " ;
		$q = $db->prepare($sql) ;
		$q->execute() ;
		return $q->fetchAll();
	}public function affichecommetaireforconfirm() {
	$db = config::getConnexion() ;
	$sql = "select * from commentaire WHERE approuve = 0" ;
	$q = $db->prepare($sql) ;
	$q->execute() ;
	return $q->fetchAll();
}
public function getnumberofcomments($id) {
		$db = config::getConnexion() ;
		$sql = "select count(*) from commentaire WHERE idpost = :idpost " ;
		$q = $db->prepare($sql) ;
		$q->bindValue(":idpost",  $id) ;
		$q->execute() ;
		return $q->fetchAll() ;
}
	public function approuvecommentaire($id) {
		$db = config::getConnexion() ;
		$sql = "update commentaire set approuve= 1 WHERE id =:id" ;
		$q = $db->prepare($sql) ;
		$q->bindValue(":id" , $id) ;
		return $q->execute() ;
	}
	public function supprimercommentaire($id) {
		$db = config::getConnexion() ;
		$sql = "delete from commentaire WHERE id = :id" ;
		$q = $db->prepare($sql) ;
		$q->bindValue(":id" , $id) ;
		return $q->execute() ;
	}
	public function modifiercomentaire($id , $messagetext) {
		$db = config::getConnexion() ;
		$sql = "update commentaire set commentaire=:messagetext WHERE id = :id "  ;
		$q= $db->prepare($sql) ;
		$q->bindValue(":messagetext" , $messagetext) ;
		$q->bindValue(":id" , $id) ;
		return $q->execute() ;
	}

}
 