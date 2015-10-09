<?php

function createCommande($db){
                      
    $sql = "INSERT INTO tb_commande (id_statut) VALUES (1)";
    $result = $db->query($sql);
}   
    
function recupMaxIdCommande($db){
        
    $sql = "SELECT MAX(id_commande) FROM tb_commande";
    $result = $db->query($sql);

    $idCmd = $result->fetch();

    return $idCmd[0];
}

function totalCommande($db, $idCmd){
    
            $sql ="SELECT SUM((a_pht*t_taux)*qte_cmde) as 'Montant total TTC'
                    FROM tb_ligne_commande as lc
                    JOIN tb_article as a ON lc.id_article = a.id_article
                    JOIN tb_tva as t ON a.id_tva = t.id_tva
                    WHERE lc.id_commande=".$idCmd;
            $result = $db->query($sql);

            return $totalTTC_panier = $result;
        }

function totalArticleCommande($db, $idCmd){
    
    $sql ="SELECT SUM(qte_cmde) as 'Quantité commande'
            FROM tb_ligne_commande as lc                 
            WHERE lc.id_commande=".$idCmd;
    $result = $db->query($sql);

    return $qteTotalArticles = $result;
}


