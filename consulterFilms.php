<html>
	<head>
		<meta charset="utf-8">
		<link href="style/vod.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<div class="onglets">
			<nav>
				<ul>
                    <li><a href="accueil.html">Accueil</a></li>
					<li><a href= "consulterFilms.php" "">Consulter</a></li>
					<li><a href=  "saisieTitreRecherche.html">Rechercher</a></li>
					<li><a href=  "saisieFilm.html">Ajouter</a></li>
					<li><a href= "saisieTitreSuppression.html">Supprimer</a></li>	
            
				</ul>
			</nav>
        </div>
		
		<table>
		
			<thead>
				
				<tr>
					
					<th>Titre</th>
					<th>Année</th>
					<th>Réalisateur</th>
				
				</tr>
				
			</thead>
			
			<tbody>
				
				<?php
                
                
                $lignes = file("data/vod.csv.txt");
                foreach( $lignes as $uneligne ){
						
						echo "<tr>" ;
						
						$infos = explode( ":" , $uneligne ) ;
						
						echo "<td>" . ( $infos[ 0 ] ) . "</td>" ;
						echo "<td>" . ( $infos[ 1 ] ) . "</td>" ;
						echo "<td>" . ( $infos[ 2 ] ) . "</td>" ;
						
						echo "</tr>" ;
						
					}
				?>
				
			</tbody>
		
		</table>
