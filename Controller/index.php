<?php

require '../Model/Commande.php';
require '../Model/Connect.php';
require '../Model/LigneCmd.php';
require '../Model/LigneCmdManager.php';
require '../Model/commandeManager.php';
require '../Model/get_articles.php';



// Connexion à la base de données
$db = Connect::getInstance();



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
               setcookie("SpeedyMarketCookie",$newCookie,time()+3600*24,null,null,false,true);

                
                var_dump($_COOKIE["SpeedyMarketCookie"]);
            }
            
        }
    
    }
   if (verifLigneCmdExist($db, $idArticles, $idCmd)==false){
                
                 var_dump($cmd);
                 $idCmd = $_COOKIE["SpeedyMarketCookie"];
                 createLigneCmd($db, $idArticle, $idCmd);
                 $ligneCmd = new LigneCmd($idArticle,$id_cmd,1,122);
                 var_dump($_COOKIE);
           
                
                
                $ligneCmd = new LigneCmd();
                createLigneCmd($db, $idArticle, $idCmd);
                
            }
            echo 'ok';    
//                            setcookie("SpeedyMarketCookie",$idCookie,time(),null,null,false,true);

        
    }
    
   
    






?>