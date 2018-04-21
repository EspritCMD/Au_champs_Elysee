<?php
/**
 * Created by PhpStorm.
 * User: abderrahimgdah
 * Date: 3/25/18
 * Time: 10:46 AM
 */
class commentaire {
	private $id ;
	private $idclient ;
	private $commentaire ;
	private $idpost ;
	private $approuve ;

	public function getApprouve() {
		return $this->approuve;
	}

	public function setApprouve($approuve) {
		$this->approuve = $approuve;
	}


	public function getIdpost() {
		return $this->idpost;
	}
	public function setIdpost($idpost) {
		$this->idpost = $idpost;
	}

	public function __construct($id, $idclient, $commentaire , $idpost , $approuve) {
		$this->id = $id;
		$this->idclient = $idclient;
		$this->commentaire = $commentaire;
		$this->idpost = $idpost ;
		$this->approuve = $approuve ;
	}
	public function getId() {
		return $this->id;
	}
	public function setId($id) {
		$this->id = $id;
	}

	public function getIdclient() {
		return $this->idclient;
	}
	public function setIdclient($idclient) {
		$this->idclient = $idclient;
	}
	public function getCommentaire() {
		return $this->commentaire;
	}
	public function setCommentaire($commentaire) {
		$this->commentaire = $commentaire;
	}


}
