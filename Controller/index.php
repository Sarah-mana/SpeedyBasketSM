<?php

require '../Model/Commande.php';
require '../Model/Connect.php';
require '../Model/LigneCmd.php';
require '../Model/LigneCmdManager.php';
require '../Model/commandeManager.php';
require '../Model/get_articles.php';



// Connexion à la base de données
$db = Connect::getInstance();

setcookie("SpeedyMarketCookie","",time(),null,null,false,true);


if (isset($_GET["id"])){
    
    $idArticle = $_GET["id"];
    $idCookie="";
    var_dump($idArticle);
    var_dump($_COOKIE['SpeedyMarketCookie']);
    
    if (!(isset($_COOKIE['SpeedyMarketCookie']))){
        $idCookie = "";
        setcookie("SpeedyMarketCookie",$idCookie,time()+3600*24,null,null,false,true);
        
        $cmd = new Commande();
        var_dump($cmd);
        
        if ($cmd instanceof Commande) {

            if ($cmd->getId_commande()==null){

                createCommande($db);

                $cmd->setId_commande(recupMaxIdCommande($db));
                $idCmd = $cmd->getId_commande();
               
                $newCookie = (string)$idCmd;
                var_dump($idCmd);
               setcookie("SpeedyMarketCookie",$newCookie,time()+3600*24,null,null,false,true);

                
                var_dump($_COOKIE["SpeedyMarketCookie"]);
                
                require_once '../View/panier.php';
            }
            
            
        }
    
    }
    $idCmd = $_COOKIE["SpeedyMarketCookie"];
    var_dump($idCmd);
   if (verifLigneCmdExist($db, $idArticle, $idCmd)==false){
                var_dump($idArticle);
                 var_dump($cmd);
                 
                 createLigneCmd($db, $idArticle, $idCmd);
                 
               
//                totalligne();
//                totalarticlecommande();
//                totalcommande();
                
                displayLignesCmd($db, $idCmd);
                
                require_once '../View/panier.php';
    }else{
//                updateLigneCmd();
//                totalligne();
//                totalarticlecommande();
//                totalcommande();
        
        require_once '../View/panier.php';
    }
              
//                            setcookie("SpeedyMarketCookie",$idCookie,time(),null,null,false,true);
    require_once '../View/panier.php';
        
    }
    
   
    






?>