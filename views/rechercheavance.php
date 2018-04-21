<?php
/**
 * Created by PhpStorm.
 * User: abderrahimgdah
 * Date: 4/14/18
 * Time: 20:37
 */


include "../core/postclassC.php" ;
$postc = new postclassC() ;
$a = $postc->afficherechercheavance($_GET['str']) ;
$myJSON = json_encode($a) ;
if ($_GET['str'] == ""){
	echo "null" ;
}else{
	"famma 7eja " ;
}
echo $myJSON ;

