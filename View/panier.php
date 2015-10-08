<?php
require './Controller/index.php';

include 'header.php';
?>
<div id="container">		
		  <div id="bannier">
		  	<a href="valider.php"><button>Valider Panier</button></a>
		  <h1>récapitulatif panier</h1>
		  <h2>Total : <?= number_format($panier->total(),2,',',' '); ?> € </h2>
		  <h4>nombre d'article dans votre panier : <?= $panier->count(); ?></h4>
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
                                                $idcmd = (int)$_COOKIE["SpeedyMarketCookie"];
                                                displayLigneCmd($db, $idCmd);
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
