<?php
/**
 * Created by PhpStorm.
 * User: abderrahimgdah
 * Date: 4/21/18
 * Time: 17:30
 */
 include "../core/postclassC.php" ;
 $post = new postclassC() ;
 if ($post->supprimer($_GET['id'])){
 	echo "done" ;
 } else{
 	echo "undone" ;
 }