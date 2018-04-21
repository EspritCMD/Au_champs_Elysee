<?php
/**
 * Created by PhpStorm.
 * User: abderrahimgdah
 * Date: 4/13/18
 * Time: 20:33
 */
 include "../core/interactionC.php" ;
 $interaction = new interactionC() ;
$jaime = $interaction->checkjaime(10,$_GET['id']) ;
if ($jaime == false) {
	echo "0" ;
}else{
	echo "1" ;
}
