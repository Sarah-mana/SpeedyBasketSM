<?php

function createLigneCmd($db, $idArticle, $idCmd){
    
    $sql = 'INSERT INTO tb_ligne_commande (id_article, id_commande, qte_cmde) VALUES ('.$idArticle.','.$idCmd.', 1)';
    $result = $db->query($sql);
    
    
    $ligneCmd = new LigneCmd($idArticle,$idCmd,1);
}

function updateLigneCmd($db, $idArticle, $idCmd, $qteCmd){
    
    $sql = "UPDATE tb_ligne_commande SET qte_cmde=(".$qteCmd."+1) WHERE id_commande=".$idCmd." AND id_article=".$idArticle;
    $result = $db->query($sql);
}

function deleteLigneCmd($db, $idArticle, $idCmd){
    
    $sql = "DELETE FROM tb_ligne_commande WHERE id_article=".$idArticle." AND id_commande=".$idCmd;
    $result = $db->query($sql);
}

function verifLigneCmdExist($db, $idArticles, $idCmd){
    
    $sql = "SELECT * FROM tb_ligne_commande WHERE id_article = ".$idArticles." AND id_commande = ".$idCmd;
    $result = $db->query($sql);
    if ($result == null){
        return false;
    }else{
        return true;
    }
}

function selectLigneCmd($db, $idArticle, $idCmd){
    
    $sql  = "SELECT * FROM tb_ligne_commande WHERE id_commande=".$idCmd." AND id_article=".$idArticle;
    $result = $db->query($sql);
    
    
}

function displayLignesCmd ($db, $idCmd){
    
    $sql  = 'SELECT a.url_image, a.a_designation, a.pht, lc.qte_cmde,a_pht*t_taux as "Total TTC", (a_pht*t_taux)*lc.qte_cmde as "Montant total TTC"
            FROM tb_ligne_commande as lc
            JOIN tb_article as a ON lc.id_article = a.id_article
            JOIN tb_tva as t ON a.id_tva = t.id_tva
            WHERE lc.id_commande='.$idCmd;
    
    $result = $db->query($sql);
    
    $displayLignes ="";
    
    while ($ligne = $result->fetch()){
        
        $nomArticle = $ligne[1];
        $prixTTC = $ligne[5];
        $qteCmd = $ligne[3];
        $totalLigne = $ligne[6];
        
        
        $displayLignes .= "<tr>          
                <td><img src='images/melon.png'></td>
                <td>".$nomArticle."</td>
                <td>".$prixTTC."</td>
                <td>".$qteCmd."</td>
                <td>".$totalLigne."</td>";
                    

    }            
}        
   

function totalLigne($db, $idArticle, $idCmd, $prixligneCmd){
    
    $sql ="SELECT qte_cmde, (a_pht*t_taux)*qte_cmde as 'Montant total TTC'
            FROM tb_ligne_commande as lc
            JOIN tb_article as a ON lc.id_article = a.id_article
            JOIN tb_tva as t ON a.id_tva = t.id_tva
            WHERE lc.id_commande=".$idCmd."
            AND lc.id_article=".$idArticle;
    $result = $db->query($sql);

    $prixligneCmd = $result;
}

