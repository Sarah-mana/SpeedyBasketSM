<?php

function get_articles($idCat){
    
    $db = Connect::getInstance();
    $sql = 'SELECT * FROM tb_article WHERE id_categorie ='.$idCat.' LIMIT 0,10';
    $result=$db->query($sql);
  	$listeArticles = "";
        while ($ligne = $result->fetch()){
            
            $idArticle = $ligne["id_article"];
            $nomArt = $ligne["a_designation"];
            $prix = $ligne["a_pht"];
            
             
            $listeArticles .=   '<div class="article-wrapper">
				<div class="featured-image">
						<a href="#"><img width="218" height="145" src="images/melon.png"></a>  	
				</div>	
				<div id ="infarticle">
					<h3>'.$nomArt.'</h3>
					
					<h2>'.$prix.'</h2>
					<div id="caddi"><a href="../Controller/index.php?id='.$idArticle.'"><img src="images/caddi.jpg"/></div>					
				</div>
                               </div>';
  	
        }
        
        echo $listeArticles;
}
