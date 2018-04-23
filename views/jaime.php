<?php
/**
 * Created by PhpStorm.
 * User: abderrahimgdah
 * Date: 4/12/18
 * Time: 19:40
 */
 include "../core/interactionC.php" ;
include "../entities /interaction.php";
$interactionc = new interactionC()  ;
$interaction = new interaction(0,$_GET['idclient'],1,$_GET['idpost'] , 0) ;
echo "abderrahim " ;
if ($interactionc->addinteraction($interaction) ){
    echo "1" ;
}else{
    echo "0" ;

}



