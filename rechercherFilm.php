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
        
                $lignes = file("data/vod.csv.txt");
                $film = false;
                 foreach( $lignes as $uneligne ){
                     $infos = explode( ":" , $uneligne ) ;
                     if ( ucfirst(strtolower($_POST['titre']))== ucfirst(strtolower( $infos[ 0 ] )))  {
                         $film = true ;
                         
                 ?>
        
                          <table>
                                <thead>
                                    <tr>
                                        <th>Titre</th>
                                        <th>Année</th>
                                        <th>Réalisateur</th>
                                </tr>
                                </thead>
                                <tr> 
                <?php
                        echo "<td>" . ( $infos[ 0 ] ) . "</td>" ;
						echo "<td>" . ( $infos[ 1 ] ) . "</td>" ;
						echo "<td>" . ( $infos[ 2 ] ) . "</td>" ;
						echo "</tr>" ;
                        break;
						}
                 }
        
                if ($film ==false){
                    echo "<p>Désolé, nous n'avons pas trouvé votre film.</p>" ;
                }
                     
                 
               
                
				?>
                
				
	
		
		</table>

    </body>
</html>
