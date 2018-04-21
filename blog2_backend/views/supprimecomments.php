<?php
include "../core/comclassC.php" ;
$com = new commentaireclasseC() ;
if ($com->supprimercommentaire($_GET['id']) ){
    echo "donne "  ;
}else{
	echo "isn't sone " ;
}
?>

 