<?php
/**
 * Created by PhpStorm.
 * User: abderrahimgdah
 * Date: 3/24/18
 * Time: 4:38 PM
 */
include "../entities /postclass.php" ;
include "../core/postclassC.php" ;
$post = new post($_POST["title"] , $_POST["title2"] , $_POST["post"] , 12 ,1 , "") ;
var_dump($post) ; echo "<br>" ;
echo "helloo" ;
echo "<br>" ;
$PostC = new postclassC() ;
$PostC->modifier($post , $_GET['id']) ;
echo "<br>" ;
if (!empty($PostC)) {
	var_dump($PostC) ;
	$PostC->affichage() ;
}


?>