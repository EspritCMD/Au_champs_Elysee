<?php
/**
 * Created by PhpStorm.
 * User: abderrahimgdah
 * Date: 4/14/18
 * Time: 15:58
 */
include "../core/interactionC.php" ;
$interactionc = new interactionC()  ;
if ($interactionc->supprimerjaime($_GET['idpost'] , $_GET['idclient']) ){
	echo "1" ;
}else{
	echo "0" ;
}
