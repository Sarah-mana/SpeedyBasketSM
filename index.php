<?php
require '../Controller/index.php';
?>

<html>
<head>
	<title>maquette speedy</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="style.css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
   
</head>
<body>
	<div id="wrap">
		<div id="logo"><a href="index.php"><img src="images/logo.png"></a></div>
		<script>
			    $(document).ready(function($){
			    		$("#connexion img").click(function(){
			    			$("#cnx").slideToggle();
			    		});
			    });
		 </script>
		<div id="connexion"> <img src="images/connexion.jpg"></div>
		<div id="cnx"></div>
		<script>
			    $(document).ready(function($){
			    		$("#recherche img").click(function(){
			    			$("#search").slideToggle();
			    		});
			    });
		 </script>
		<div id="recherche"><img src="images/loupe.png"></div>
		<div id="search"></div>
		<script>
			    $(document).ready(function($){
			    		$("#caddy img").click(function(){
			    			$("#caddyouvert").slideToggle();
			    		});
			    });
		 </script>


		<div id="caddy"><img src="images/caddy.png"></div>
		<div id="caddyouvert">sdfgsdfsdfs</br>cyjuxfhwdfbdfh</br><a href="panier.php">recap panier</a></div>
  <div id="home">
			  <script>
			    $(document).ready(function($){
			    		$("#menu img").click(function(){
			    			$("#sousmenu").slideToggle();
			    		});
			    });
			    </script>

    <div id="menu"><img src="images/burger.png">
      <div id="sousmenu"> seqedqedqdq</div>
    </div> 

    
	<div id="container">		
		  <div id="bannier"> 

	        <p>&nbsp Accueil>Produit frais>Légumes</p>

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
				<div class="featured-image">
						<a href="#"><img width="218" height="145" src="images/melon.png"></a>   	
				</div>	
				<div id ="infarticle">
					
					<div id="caddi"><a href="addPanier.php?id=<?=$produit->id_article;?>"><img src="images/caddi.jpg"></a></div>
					
				</div>
        </div>
		
	  </div>
    </div>		
</div>
</body>
</html>
<?php require 'Footer.php'; ?>