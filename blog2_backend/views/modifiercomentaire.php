<?php
/**
 * Created by PhpStorm.
 * User: abderrahimgdah
 * Date: 4/16/18
 * Time: 20:00
 */
 include "../core/comclassC.php" ;
 $comentaire = new commentaireclasseC() ;
echo $comentaire->modifiercomentaire($_GET['id'] , $_GET['message']) ;
