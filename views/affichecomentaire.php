<?php
/**
 * Created by PhpStorm.
 * User: abderrahimgdah
 * Date: 4/15/18
 * Time: 14:53
 */
include "../core/comclassC.php" ;
$commentaireC = new  commentaireclasseC() ;
$list2 = $commentaireC->affichecommentaire($_GET['id']) ;
$comments = json_encode($list2) ;
echo $comments ;
 