<?php
/**
 * Created by PhpStorm.
 * User: abderrahimgdah
 * Date: 4/16/18
 * Time: 21:47
 */
include "../core/postclassC.php" ;
$postc = new postclassC() ;
$a = $postc->affichagetirecroissant() ;
$myJSON = json_encode($a) ;
echo $myJSON ;