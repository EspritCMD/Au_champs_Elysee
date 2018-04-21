
 <?php

 include "../core/comclassC.php";
 include "../entities /comclass.php";

 $commentaire = new commentaire(1 , 10 , $_GET["posttext"] , $_GET['id'] , 0) ;
 $commentaireC = new commentaireclasseC() ;
$q=  $commentaireC->addcommentaire($commentaire) ;
echo $q;







