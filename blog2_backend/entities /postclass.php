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

	/**
	 * post constructor.
	 * @param $title
	 * @param $id
	 * @param $title2
	 * @param $posttext
	 * @param $idposter
	 * @param $idinter
	 * @param $postdate
	 */
	public function __construct($title, $title2, $posttext, $idposter, $idinter, $postdate) {
		$this->title = $title;
		$this->title2 = $title2;
		$this->posttext = $posttext;
		$this->idposter = $idposter;
		$this->idinter = $idinter;
		$this->postdate = $postdate;
	}

	/**
	 * post constructor.
	 */

	/**
	 * @return mixed
	 */
	public function getTitle() {
		return $this->title;
	}

	/**
	 * @param mixed $title
	 * @return post
	 */
	public function setTitle($title) {
		$this->title = $title;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * @param mixed $id
	 * @return post
	 */
	public function setId($id) {
		$this->id = $id;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getTitle2() {
		return $this->title2;
	}

	/**
	 * @param mixed $title2
	 * @return post
	 */
	public function setTitle2($title2) {
		$this->title2 = $title2;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getPosttext() {
		return $this->posttext;
	}

	/**
	 * @param mixed $posttext
	 * @return post
	 */
	public function setPosttext($posttext) {
		$this->posttext = $posttext;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getIdposter() {
		return $this->idposter;
	}

	/**
	 * @param mixed $idposter
	 * @return post
	 */
	public function setIdposter($idposter) {
		$this->idposter = $idposter;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getIdinter() {
		return $this->idinter;
	}

	/**
	 * @param mixed $idinter
	 * @return post
	 */
	public function setIdinter($idinter) {
		$this->idinter = $idinter;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getPostdate() {
		return $this->postdate;
	}

	/**
	 * @param mixed $postdate
	 * @return post
	 */
	public function setPostdate($postdate) {
		$this->postdate = $postdate;
		return $this;
	}


}
 