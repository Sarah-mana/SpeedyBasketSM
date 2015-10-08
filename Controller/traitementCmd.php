<?php
require '../Model/get_articles.php';
require '../Model/commandeManager.php';
require '../Model/Connect.php';
require '../Model/Commande.php';
require '../Model/LigneCmd.php';
require '../Model/LigneCmdManager.php';

// Connexion à la base de données
$db = Connect::getInstance();



if (isset($_GET["id"])){
    
    $idArticle = $_GET["id"];
    $cmd = Commande::getInstanceCmd();
    
    
    if ($cmd instanceof Commande) {
        
        if ($cmd->getId_commande()==null){
            createCommande($db);
            
            $cmd->setId_commande(recupMaxIdCommande($db));
            $idCmd = $cmd->getId_commande();
            var_dump($idCmd);
            $ligneCmd = new LigneCmd();
            var_dump($idArticle);
            
            $sql = 'INSERT INTO tb_ligne_commande (id_article, id_commande, qte_cmde) VALUES ('.$idArticle.','.$idCmd.', 1)';
            $result = $db->query($sql);
            var_dump($sql);
            var_dump($ligneCmd);
            $idCookie = (string)$idCmd;
            var_dump($idCookie);
            setcookie("SpeedyMarketCookie",$idCookie,time()+3600*24,null,null,false,true);
          
        }
        else{
            $idCmd = $cmd->getId_commande();
            
            if (verifLigneCmdExist($db, $idArticles, $idCmd)==false){
                
                $ligneCmd = new LigneCmd();
                createLigneCmd($db, $idArticle, $idCmd);
                
            }
        }
        
        
    }
    
    
}




?>



