<html>
	<head>
		<meta charset="utf-8">
		<link href="style/vod.css" rel="stylesheet" type="text/css">
        <link href="style/rechercher.css" rel="stylesheet" type="text/css">
        
	</head>
	<body>
		<div class="onglets">
			<nav>
				<ul>
                                       <li><a href=vod.html>Accueil</a></li>
					<li><a href= "consulterFilms.php" >Consulter</a></li>
					<li><a href=  "saisieTitreRecherche.html">Rechercher</a></li>
					<li><a href=  "saisieFilm.html">Ajouter</a></li>
					<li><a href= "saisieTitreSuppression.html">Supprimer</a></li>	
            
				</ul>
			</nav>
        </div>
		
        	<?php
                $film = false;
                $lignes = file("data/vod.csv.txt");
                 foreach( $lignes as $uneligne ){
                     $infos = explode( ":" , $uneligne ) ;
                     if ( ucfirst(strtolower($_POST['titre']))== ucfirst(strtolower( $infos[ 0 ] )))  {
                         $film = true ;
                         $ligneFilm = array_search($uneligne,$lignes);
                         unset($lignes[$ligneFilm]) ;
                         break; 
						}
                 }
        
        
                    if ($film == true ){
                        echo "<p>Suppression du film " . $infos[ 0 ] . " avec succès.</p>";
                        $file = fopen("data/vod.csv.txt", "w+");
                            foreach( $lignes as $uneligne ){
                            fwrite($file,$uneligne);
                            }
                        fclose($file);
                        }
                    else {
                        echo "<p> Désolé, nous n'avons pas trouvé votre film.</p>" ;	
                    }
		?>
			
		
                       
    </body>
</html>
