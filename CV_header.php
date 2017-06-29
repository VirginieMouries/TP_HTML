<!-- ****************************************
	CV_header.php

	Entête de mon cv

	*********************************** -->

<!DOCTYPE html>

<html lang="fr">
	<head>
	     <meta charset="utf-8" />
	    <link rel="stylesheet" href="CV_VMS.css" />
		<title>Virginie Mouri&egrave;s</title>
	</head>

	<body>

		<header>
			<div id="titre_principal">
				<div id="pt_photo">
					<!-- Ma photo miniature -->
		            <img src="images/Virginie_tpt.jpg" alt="Virginie Mouriès"/>		  
		        </div>
		        <div class="presentation">
					<h1> Virginie Mouri&egrave;s<br></h1>
					<h2> Analyste Programmeur </h2>
				</div>
			</div>
			
			<nav>
				<fieldset class="menuLigne"> 				
				  				
	  				<input id="itemA" class="radioInput" type="radio" name="accessible-radio" value="item-1" checked="checked" onclick="location.href='CV_VMS.php';"> 
	  				<label class="radioLabel" for="itemA"> Accueil </label>  				
	  				
	  				<input id="itemS" class="radioInput" type="radio" name="accessible-radio" value="item-2" onclick="location.href='CV_VMS_Experience.php';">
	  				<label class="radioLabel" for="itemS"> Expérience </label>

	  				<input id="itemP" class="radioInput" type="radio" name="accessible-radio" value="item-3" onclick="location.href='CV_VMS_Formation.php';">
	  				<label class="radioLabel" for="itemP"> Formation </label>
	  				
	  				<input id="itemM" class="radioInput" type="radio" name="accessible-radio" value="item-4" onclick="location.href='CV_VMS_Missions.php';">
	  				<label class="radioLabel" for="itemM"> Missions </label>

	  				<input id="itemC" class="radioInput" type="radio" name="accessible-radio" value="item-4" onclick="location.href='CV_VMS_Competences.php';">
	  				<label class="radioLabel" for="itemC"> Compètences </label>

	  				<input id="itemD" class="radioInput" type="radio" name="accessible-radio" value="item-4" onclick="location.href='CV_VMS_Divers.php';">
	  				<label class="radioLabel" for="itemD"> Divers </label>
	  				
				</fieldset>

				<!-- 
				<ul>
	                <li><a href="CV_VMS.php">Accueil</a></li>
	                <li><a href="CV_VMS_Experience.php">Expérience</a></li>
	                <li><a href="CV_VMS_Formation.php">Formation</a></li>
	                <li><a href="CV_VMS_Missions.php">Missions</a></li>
	                <li><a href="CV_VMS_Competences.php">Compètences</a></li>
	                <li><a href="CV_VMS_Divers.php">Divers</a></li>
             	</ul>
             	-->
			</nav>		        
	    </header>