<?php
/**
 * Created by PhpStorm.
 * User: abderrahimgdah
 * Date: 3/18/18
 * Time: 11:38 PM
 */

include "../core/interactionC.php" ;

class postclassC {
	/**
	 * postclassC constructor.
	 */
	public function __construct() {
	}

	public function add($P){
		$db = config::getConnexion() ;
    $check =  $this->chekcimage() ;
	if ($check!= "error404gdah") {
		$sql = "insert into BlogPost.Post(title, title2, posttext , idposter, idinter , image) VALUES (:title
  , :title2 , :posttext  , :idposter , :idinter, :image)" ;
		$q = $db->prepare($sql);
		$q->bindValue(":title", $P->getTitle());
		$q->bindValue(":title2", $P->getTitle2());
		$q->bindValue(":posttext", $P->getPosttext());
		$q->bindValue(":idposter", $P->getIdposter());
		$q->bindValue(":idinter", $P->getIdinter());
		$q->bindValue(":image",$check) ;
		$q->execute();
		return $q ;
	}else{
		echo '<div class="alert alert-danger alert-dismissable">
                <button aria-hidden="true" data-dismiss="alert" class="close" type="button"> × </button>
              cant add your post because of file  </div> ' ;
		return null ;
	}

	}
	public function chekcimage() {
 		$target_dir = "/Applications/MAMP/htdocs/git/Au_champs_Elysee/web/images/imageserveur/";
		$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
		$filneNAme = basename($_FILES["fileToUpload"]["name"]);  ;
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		// Check if image file is a actual image or fake image
		if(isset($_POST["submit"])) {
			$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
			if($check !== false) {
				echo "File is an image - " . $check["mime"] . ".";
				$uploadOk = 1;
			} else {
				echo "File is not an image.";
				$uploadOk = 0;
				$filneNAme= "error404gdah" ;
			}
		}
		if (file_exists($target_file)) {
			echo '<div class="alert alert-danger alert-dismissable">
                <button aria-hidden="true" data-dismiss="alert" class="close" type="button"> × </button>
                sorry  , file already exist </div> ' ;
			$uploadOk = 0;
			$filneNAme= "error404gdah1" ;
		}
		if ($uploadOk == 0) {
			echo '<div class="alert alert-danger alert-dismissable">
                <button aria-hidden="true" data-dismiss="alert" class="close" type="button"> × </button>
               file was not uploaded for unkown reason  </div> ' ;
			$filneNAme = "error404gdah2" ;
			// if everything is ok, try to upload file
		} else {
			if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
				echo '<div class="alert alert-danger alert-dismissable">
                <button aria-hidden="true" data-dismiss="alert" class="close" type="button"> × </button>
              the file has been uploaded'. basename( $_FILES["fileToUpload"]["name"]). ' </div> ' ;
				//echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
			} else {
				echo '<div class="alert alert-danger alert-dismissable">
                <button aria-hidden="true" data-dismiss="alert" class="close" type="button"> × </button>
               file was not uploaded for unkown reason  </div> ' ;
				$filneNAme= "error404gdah3" ;
			}
		}
		return $filneNAme;
	}
	public function affichage() {
		$db= config::getConnexion() ;
		$sql = "select * from Post" ;
		$list = $db->query($sql) ;
		return $list ;
	}
	public function affichagetirecroissant() {
		$db= config::getConnexion() ;
		$sql = "select * from Post ORDER BY postdate ASC " ;
		$q = $db->prepare($sql) ;
		$q->execute() ;
		return $q->fetchAll() ;
	}
	public function affichagetirdecroisant() {
		$db= config::getConnexion() ;
		$sql = "select * from Post ORDER BY postdate DESC " ;
		$q = $db->prepare($sql) ;
		$q->execute() ;
		return $q->fetchAll() ;

	}
    public function affichePost($id) {
		$db = config::getConnexion();
		$sql = "select * from Post WHERE id=:id" ;
		$q = $db->prepare($sql) ;
		$q->bindValue(":id" , $id) ;
		$q->execute() ;

		return $q->fetch(PDO::FETCH_OBJ) ;
	}
	public function afficherecherche($id) {
		$db = config::getConnexion();
		$sql = "select * from Post WHERE title=:id" ;
		$q = $db->prepare($sql) ;
		$q->bindValue(":id" , $id) ;
		$q->execute() ;

		return $q->fetchAll() ;
	}
	public function afficherechercheavance($str) {
		$db = config::getConnexion();
		$sql = "select * from Post WHERE title LIKE :str " ;
		$q = $db->prepare($sql) ;
		$q->bindValue(":str" , $str."%") ;
		$q->execute() ;
		return $q->fetchAll() ;
	}
	public function supprimer($id) {
		$db = config::getConnexion()  ;
		$sql = "delete from Post WHERE id=:id" ;
		$q = $db->prepare($sql) ;
		$q->bindValue(":id" , $id) ;
		return $q->execute() ;
	}
	public function modifier($p , $id ) {

		$check = $this->chekcimage();
		if ($check != "error404gdah") {
			$filename = "/Applications/MAMP/htdocs/git/Au_champs_Elysee/web/images/imageserveur/".$image ;
			if (file_exists($filename)){
				unlink($filename);
			}
			$db = config::getConnexion();
			$sql = "UPDATE post SET  posttext =:posttext , title=:title , title2=:title2 , image=:image  , postdate = current_timestamp WHERE id =:id";
			$q = $db->prepare($sql);
			$q->bindValue(":posttext", $p->getPosttext());
			$q->bindValue(":title", $p->getTitle());
			$q->bindValue(":title2", $p->getTitle());
			$q->bindValue(":image" , $check);
			$q->bindValue(":id", $id);
			return $q->execute();
		}
		return null ;
	}
}
