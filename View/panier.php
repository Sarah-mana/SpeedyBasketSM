<?php
require_once '../Controller/index.php';
// Connexion à la base de données
$db = Connect::getInstance();
include_once 'header.php';
?>
<div id="container">		
		  <div id="bannier">
		  	<a href="valider.php"><button>Valider Panier</button></a>
		  <h1>récapitulatif panier</h1>
                  <h2>Total : <?php totalCommande($db, $idCmd) ?> € </h2>
                  <h4>nombre d'article dans votre panier : <?php totalArticleCommande($db, $idCmd) ?></h4>
		  </div>
  

		    <table>
                    
						<tr>
						  <th>photo</th>
						  <th>nom</th>
						  <th>quantité</th>
						  <th>prix TTC</th>
                                                  <th>total TTC</th>
						</tr>
						<?php 
                                                var_dump($_COOKIE["SpeedyMarketCookie"]);
                                                $idcmd = (int)$_COOKIE["SpeedyMarketCookie"];
                                                var_dump($idCmd);
                                                displayLignesCmd($db, $idCmd);
						?>
			</table>

	  </div>
    </div>		
</div>

<?php                                                
include 'footer.php';
?>
</body>
</html>
