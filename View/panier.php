<div id="container">		
		  <div id="bannier">
		  	<a href="valider.php"><button>Valider Panier</button></a>
		  <h1>récapitulatif panier</h1>
		  <h2>Total : <?= number_format($panier->total(),2,',',' '); ?> € </h2>
		  <h4>nombre d'article dans votre panier : <?= $panier->count(); ?></h4>
		  </div>
  <?php 
  $ids=array_keys($_SESSION['panier']);
  if (empty($ids)) {
  	$produit=array();
  }else {
  $produit = $DB->query('SELECT * FROM tb_article WHERE id_article 
  	IN ('.implode(',',$ids).')');	
  var_dump($produit);
  }
  ?>  

		    <table>
                    
						<tr>
						  <th>photo</th>
						  <th>nom</th>
						  <th>quantité</th>
						  <th>prix TTC</th>
                                                  <th>total TTC</th>
						</tr>
						
						
			</table>

	  </div>
    </div>		
</div>
</body>
</html>
<?php require 'footer.php'; ?>