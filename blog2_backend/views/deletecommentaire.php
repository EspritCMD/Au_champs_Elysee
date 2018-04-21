<?php
/**
 * Created by PhpStorm.
 * User: abderrahimgdah
 * Date: 4/16/18
 * Time: 20:25
 */
include "../core/comclassC.php";
$commm = new commentaireclasseC() ;
echo  $commm->supprimercommentaire($_GET['id']) ;
echo "+++++".$_GET['id'] ;
 