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
                    <caption></caption>
						<tr>
						  <th>photo</th>
						  <th>nom</th>
						  <th>quantité</th>
						  <th>prixht</th>
						  <th>prixttc</th>
						</tr>
						<?php foreach ($produit as $produit) :
						?>
						<tr>
						 <th><img width="100" height="80" src="images/melon.png"></th>
						 <td><?= $produit->a_designation; ?></td>
						 <td><?= $_SESSION['panier'][$produit->id_article];?></td>
						 <td><?= $produit->a_pht; ?>€</td>
						 <td><?= $produit->a_pht*1.196; ?>€</td>
						 <td><a href="panier.php?del=<?= $produit->id_article;?>">suprimer</a></td>
						</tr>
						<?php endforeach ; ?>
						
			</table>

	  </div>
    </div>		
</div>
</body>
</html>
<?php require 'footer.php'; ?>