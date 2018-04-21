<?php
include "../core/postclassC.php" ;
$post = new postclassC() ;
if ($post->supprimer($_GET['id']) ){
    echo "donne "  ;
	header(" refresh:5 ; url = http://localhost:8888/Blog2/blog2_backend/web/affiche-supprimer.php?_ijt=2vrqdv4ehbs7k57vomd5g32n8n");

}else{
	echo "isn't sone " ;
}
?>

 