<?php
include (dir.'/View/header.php');

?>
    
	<div id="container">		
		  <div id="bannier"> 

	        <p>&nbsp Accueil>Produit frais>Légumes</p>
                <?php

?>

	        <FORM>
				<SELECT name="filtremarque" size="1" >
					<OPTION>Filtrer marque/producteurs
					<OPTION>marque2
					<OPTION>marque3
					<OPTION>marque4
				</SELECT>
			</FORM>
			<FORM>
				<SELECT name="filtrenouveaute" size="1">
					<OPTION>Tri par nouveaute
					<OPTION>2
					<OPTION>3
					<OPTION>4
				</SELECT>
			</FORM>
			<FORM>
				<SELECT name="filtreprix" size="1">
					<OPTION>Tri par prix
					<OPTION>2
					<OPTION>3
					<OPTION>4
				</SELECT>	
			</FORM>
			<div id="titrecat"> <h2>Légumes</h2></div>


		  </div>
                            <?php

                            get_articles(17);
                            ?>
			<div class="article-wrapper">
<!--				<div class="featured-image">
                                       	
				</div>	
				<div id ="infarticle">
					
                                  
					
				</div>-->
        </div>
		
	  </div>
    </div>		
</div>
    
<?php
include (dir.'View/footer.php');

?>
</body>
</html>