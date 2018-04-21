<?php
/**
 * Created by PhpStorm.
 * User: abderrahim gdah
 * Date: 3/18/18
 * Time: 11:22 PM
 */
class post {
	private $title ;
	private $id ;
	private $title2 ;
	private $posttext ;
	private $idposter ;
	private $idinter ;
	private $postdate ;

	public function __construct($title, $title2, $posttext, $idposter, $idinter, $postdate) {
		$this->title = $title;
		$this->title2 = $title2;
		$this->posttext = $posttext;
		$this->idposter = $idposter;
		$this->idinter = $idinter;
		$this->postdate = $postdate;
	}

	public function getTitle() {
		return $this->title;
	}

	public function setTitle($title) {
		$this->title = $title;
		return $this;
	}

	public function getId() {
		return $this->id;
	}

	public function setId($id) {
		$this->id = $id;
		return $this;
	}

	public function getTitle2() {
		return $this->title2;
	}

	public function setTitle2($title2) {
		$this->title2 = $title2;
		return $this;
	}


	public function getPosttext() {
		return $this->posttext;
	}

	public function setPosttext($posttext) {
		$this->posttext = $posttext;
		return $this;
	}


	public function getIdposter() {
		return $this->idposter;
	}

	public function setIdposter($idposter) {
		$this->idposter = $idposter;
		return $this;
	}


	public function getIdinter() {
		return $this->idinter;
	}

	public function setIdinter($idinter) {
		$this->idinter = $idinter;
		return $this;
	}

	public function getPostdate() {
		return $this->postdate;
	}


	public function setPostdate($postdate) {
		$this->postdate = $postdate;
		return $this;
	}


}
 