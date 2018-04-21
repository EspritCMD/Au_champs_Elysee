<?php
/**
 * Created by PhpStorm.
 * User: abderrahimgdah
 * Date: 4/18/18
 * Time: 21:13
 */
include "../core/interactionC.php" ;
$post= new interactionC() ;
$res = $post->getnombredejaime($_GET["idpost"]) ;
echo $res[0]["count(*)"] ;

 