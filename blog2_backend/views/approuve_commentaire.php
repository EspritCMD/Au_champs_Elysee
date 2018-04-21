<?php
/**
 * Created by PhpStorm.
 * User: abderrahimgdah
 * Date: 4/21/18
 * Time: 16:58
 */
 include "../core/comclassC.php" ;
 $comm = new commentaireclasseC() ;
 if ($comm->approuvecommentaire($_GET['id']) ){
 	echo "done" ;
 } else{
 	echo "not" ;
 }
