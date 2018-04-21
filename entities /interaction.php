<?php
/**
 * Created by PhpStorm.
 * User: abderrahimgdah
 * Date: 4/01/18
 * Time: 20:08
 */
class interaction {
	private $id ;
	private $idclient ;
	private $jaime ;
	private $idpost ;
	private $jaimepas ;

	public function __construct($id, $idclient, $jaime, $idpost, $jaimepas) {
		$this->id = $id;
		$this->idclient = $idclient;
		$this->jaime = $jaime;
		$this->idpost = $idpost;
		$this->jaimepas = $jaimepas;
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


	public function getJaime() {
		return $this->jaime;
	}


	public function setJaime($jaime) {
		$this->jaime = $jaime;
	}

	public function getIdpost() {
		return $this->idpost;
	}


	public function setIdpost($idpost) {
		$this->idpost = $idpost;
	}
	public function getJaimepas() {
		return $this->jaimepas;
	}

	public function setJaimepas($jaimepas) {
		$this->jaimepas = $jaimepas;
	}


}

 