<?php
/**
 * Created by PhpStorm.
 * User: abderrahimgdah
 * Date: 4/18/18
 * Time: 21:04
 */
include "../core/comclassC.php";
$comments = new commentaireclasseC() ;
 $es = $comments->getnumberofcomments($_GET['idpost']) ;
	 echo $es[0]["count(*)"] ;



