<?PHP
$nbrParam = extract(array_merge($_GET, $_POST));
$last = 5;
if( !isset($current) ) $current = $last;
$prev = $current - 1;
$prevStr = '<a href="/nouveau.php?current='.$prev.'" target="_top"><img src="./img/travaux/btn_prev.jpg"  BORDER="0" title="Page précédente" alt="Page précédente" style="border-style:none; margin-top: 10px;" /></a>';
if( $prev < 1 ) {
	$prevStyle = ' style="visibility: hidden;  margin-bottom: 15px; float:left; width: 80px;"';
} else {
	$prevStyle = ' style="visibility: show; margin-bottom: 15px; float:left; width: 80px;"';
}

$next = $current + 1;
$nextStr = '<a href="/nouveau.php?current='.$next.'" target="_top"><img src="./img/travaux/btn_next.jpg" BORDER="0" title="Page suivante" alt="Page suivante" style="border-style:none; float=right; margin-top: 10px;" /></a>';
if( $next > 5 ) {
	$nextStyle = ' style="visibility: hidden; margin-bottom: 15px; float:right; width: 80px;"';
} else {
	$nextStyle = ' style="visibility: show; margin-bottom: 15px; float:right; width: 80px;"';
}
$imgSrc='"./img/travaux/travaux' . $current . '.jpg"  USEMAP="#travaux'.$current.'"';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="fr" xml:lang="fr">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>ID Dattner Création &amp; Communication - Accueil</title>

<META NAME="Keywords" CONTENT="dattner, création, communication, graphisme, annonce, affiche, logo, site internet, panneau publicitaire, signalétique, carte de voeux, plaquette, flyer, corporate image, publicité, image de marque, conception graphique, media communication, publicité, promotion, papier à lettre, design">
<META NAME="Description" CONTENT="JP Dattner Création - Communication - agence de création graphique pour vos publicités et votre communication - Rue du Lac 22B - CH-1020 Renens">
<META NAME="Robots" CONTENT="index, follow, all">
<META NAME="Author" CONTENT="www.sosweb.ch">
<META NAME="Reply-to" CONTENT="jp@dattner.ch">
<META NAME="Identifier-URL" CONTENT="http://www.dattner.ch">
<meta name="generator" content="www.sosweb.ch - Web coaching - web design">
<meta http-equiv="pragma" content="no-cache">
<meta name="revisit-after" content="14 days">
<meta name="classification" content="Communication,Design">
<meta name="distribution" content="Global">
<meta name="rating" content="General">
<meta name="copyright" content="JP Dattner Création - Communication - 2007 tous droits réservés">
<meta name="language" content="Fr">
<meta name="doc-type" content="Web Page">
<meta name="doc-rights" content="Copywritten Work, Protégé">
<link href="./screen.css" rel="stylesheet" type="text/css" />

</head>
<body id="nouveau">
<!-- wrapper principal: debut -->
<div id="wrapper">
  <div id="bandeau">
    <a href="#mainBody" class="lien_skip">Vers le contenu</a>
    <img src="./img/bandeau.jpg" border="0" width="1024" title="ID Dattner Création &amp; Communication" alt="ID Dattner Création &amp; Communication" usemap="#contact" style="border-style:none" />
    
	<map id="contact" name="contact">
	<area shape="rect" alt="retour à la page d'accueil" coords="0,0,790,120" 
		href="./" title="retour à la page d'accueil" />
	<area shape="rect" alt="cliquer pour nous contacter par email" coords="800,0,1000,120" 
		href="mailto:jp@dattner.ch" title="cliquer pour nous contacter par email" />
	</map>
  </div>
  <div id="navigation">
    <img src="./img/navigation/accueil.jpg" border="0" width="1024" title="menu de navigation" alt="menu de navigation" usemap="#navmenu" style="border-style:none" />
	<map id="navmenu" name="navmenu">
	<area shape="rect" coords="65,15,155,30" alt="Affiches" title="Affiches" 
		href="./affiche.html" />
	<area shape="rect" alt="Logos" title="Logos" coords="155,15,235,30" 
		href="./logo.html" />
	<area shape="rect" alt="Annonces" title="Annonces" coords="235,15,335,30" 
		href="./annonce.html" />
	<area shape="rect" alt="Flyers" title="Flyers" coords="335,15,415,30" 
		href="./flyer.html" />
	<area shape="rect" alt="Plaquettes" title="Plaquettes" coords="415,15,525,30" 
		href="./plaquette.html" />
	<area shape="rect" alt="Site Internet" title="Site Internet" coords="525,15,655,30" 
		href="./site.html" />
	<area shape="rect" alt="Cartes de voeux" title="Cartes de voeux" coords="655,15,805,30" 
		href="./carte.html" />
	<area shape="rect" alt="Signalétique" title="Signalétique" coords="805,15,950,30" 
		href="./signal.html" />
	</map>
  </div>
  <div id="mainBody">&nbsp;<br />
    <div id="submenu" style="margin: 0 auto; width: 350px;">
	<div <?=$prevStyle?>><?=$prevStr;?></div>
	<div <?=$nextStyle?>><?=$nextStr;?></div>
	<div><img src="./img/travaux/btn_nouveau.jpg" BORDER="0" title="Nouveaux travaux - ID Dattner Création &amp; Communication" 
		alt="Nouveaux travaux - ID Dattner Création &amp; Communication" style="border-style:none;" vspace="10" /></div>
	</div>
		<br />
    <img src=<?=$imgSrc;?> BORDER="0"
		title="Nouveaux travaux - ID Dattner Création &amp; Communication" 
		alt="Nouveaux travaux - ID Dattner Création &amp; Communication" style="border-style:none" 
		vspace="10" />
<?PHP if ($current == 1) { ?>    
	<p>&nbsp;<br /><strong>Références:</strong> Lausanne solidaire (affiches) - 
		Votations (affiches) - Chocolats Blondel (annonce presse) - 
		Caritas (affiche) - M. Stéphane Garelli (site internet) - 
		Canton de Vaud (carte de voeux)</p>
<?PHP } ?>

<?PHP if ($current == 2) { ?>        
	<p>&nbsp;<br /><strong>Références:</strong> Plaquette pour la Commune de Renens - 
		Fondation de Vernand (affiches) - Centre commercial Pont des Sauges (affiche) - 
		Université du 3e âge (plaquette - logo) - de Rham (carte d'invitation) - 
		Boulangeries Polli (affiches, signalétique) - Caritas (Banderole)</p>
<?PHP } ?>

<?PHP if ($current == 3) { ?>        
	<p>&nbsp;<br /><strong>Références:</strong> Ville de Lausanne - Plaquettes "Lausanne" 
	et "Recherche et Formation" pour l'assemblée générale de l'AIMF -<br />Association Internationale 
	des Maires Francophones</p>
<?PHP } ?>

<?PHP if ($current == 4) { ?>        
	<p>&nbsp;<br /><strong>Références:</strong> Ville de Renens - Centre Technique Communal - 
	Plaquette sur l'entretien et le remplacement des arbres d'avenues.<br />
	Ville de Lausanne - Plaquette "Villes et développement durable" pour l'assemblée générale de l'AIMF -
	<br />Association Internationale des Maires Francophones</p>
<?PHP } ?>

<?PHP if ($current == 5) { ?>        
	<p>&nbsp;<br /><strong>Références:</strong> Ville de Renens - Dépliant "Plan de mobilité - Mode d'emploi" pour encourager la mabilité douce</p>
<?PHP } ?>

		
<MAP NAME="travaux1">
     <AREA ID="lausannesol1" shape="rect" coords="4,8,214,307" 
		href="show_picture.php?type=nouveau&pic=laussolid_affiche-1.jpg" title="cliquer pour zoomer" target="_blank" />
	 <AREA ID="lausannesol2" shape="rect" coords="228,8,439,308" 
		href="show_picture.php?type=nouveau&pic=laussolid_affiche-2.jpg" title="cliquer pour zoomer" target="_blank" />
	 <AREA ID="lausannesol3" shape="rect" coords="453,8,663,308" 
		href="show_picture.php?type=nouveau&pic=laussolid_affiche-3.jpg" title="cliquer pour zoomer" target="_blank" />
	 <AREA ID="lausannesol4" shape="rect" coords="678,9,889,308" 
		href="show_picture.php?type=nouveau&pic=laussolid_affiche-4.jpg" title="cliquer pour zoomer" target="_blank" />
	 <AREA ID="lesverts" shape="rect" coords="2,324,213,621" 
		href="show_picture.php?type=nouveau&pic=affiche_liberte.jpg" title="cliquer pour zoomer" target="_blank" />
	 <AREA ID="blondel" shape="rect" coords="228,323,439,621" 
		href="show_picture.php?type=nouveau&pic=annonce_blondel.jpg" title="cliquer pour zoomer" target="_blank" />
	 <AREA ID="caritas" shape="rect" coords="453,322,664,621" 
		href="show_picture.php?type=nouveau&pic=affiche_caritas_2.jpg" title="cliquer pour zoomer" target="_blank" />
	 <AREA ID="garelliweb" shape="rect" coords="677,303,888,460" 
		href="show_picture.php?type=nouveau&pic=homepage_garelli.jpg" title="cliquer pour zoomer" target="_blank" />
	 <AREA ID="cartevd" shape="rect" coords="678,471,888,620" 
		href="show_picture.php?type=nouveau&pic=carte_voeux_vd.jpg" title="cliquer pour zoomer" target="_blank" />
</MAP>

<MAP NAME="travaux2">
     <AREA ID="caritas" SHAPE="RECT" alt="cliquer pour zoomer" COORDS="717,110, 890,540"
	 	href="show_picture.php?type=nouveau&pic=caritas.jpg" title="cliquer pour zoomer" target="_blank" />
     <AREA ID="menu_45" SHAPE="RECT" alt="cliquer pour zoomer" COORDS="304,310, 695,459"
	 	href="show_picture.php?type=nouveau&pic=menus-varies.jpg" title="cliquer pour zoomer" target="_blank" />
     <AREA ID="cuisson" SHAPE="RECT" alt="cliquer pour zoomer" COORDS="153,310, 281,490" 
	 	href="show_picture.php?type=nouveau&pic=hiestand-sucre.jpg" title="cliquer pour zoomer" target="_blank" />
     <AREA ID="tordu" SHAPE="RECT" alt="cliquer pour zoomer" COORDS="4,310, 131,489" 
	 	href="show_picture.php?type=nouveau&pic=tordu-campagnard.jpg" title="cliquer pour zoomer" target="_blank" />
     <AREA ID="derham" SHAPE="RECT" alt="cliquer pour zoomer" COORDS="566,112, 696,290"
     	href="show_picture.php?type=nouveau&pic=de-rham.jpg" title="cliquer pour zoomer" target="_blank" />
     <AREA ID="connaissance3" SHAPE="RECT" alt="cliquer pour zoomer" COORDS="454,110, 545,292"
     	href="show_picture.php?type=nouveau&pic=couv-c3.jpg" title="cliquer pour zoomer" target="_blank" />
     <AREA ID="sauges" SHAPE="RECT" alt="cliquer pour zoomer" COORDS="305,111, 433,292"
     	href="show_picture.php?type=nouveau&pic=couv-tm-pds.jpg" title="cliquer pour zoomer" target="_blank" />
     <AREA ID="travailler_2" SHAPE="RECT" alt="cliquer pour zoomer" COORDS="155,110, 284,290"
     	href="show_picture.php?type=nouveau&pic=vernand-2.jpg" title="cliquer pour zoomer" target="_blank" />
     <AREA ID="travailler_1" SHAPE="RECT" alt="cliquer pour zoomer" COORDS="4,110, 134,291"
     	href="show_picture.php?type=nouveau&pic=vernand-1.jpg" title="cliquer pour zoomer" target="_blank" />
     <AREA ID="sport1" SHAPE="RECT" alt="cliquer pour zoomer" COORDS="546,7, 719,91"
     	href="show_picture.php?type=nouveau&pic=sport-1.jpg" title="cliquer pour zoomer" target="_blank" />
     <AREA ID="sport2" SHAPE="RECT" alt="cliquer pour zoomer" COORDS="720,7, 890,91"
     	href="show_picture.php?type=nouveau&pic=sport-2.jpg" title="cliquer pour zoomer" target="_blank" />
     <AREA ID="sommaire1" SHAPE="RECT" alt="cliquer pour zoomer" COORDS="189,8, 369,92"
     	href="show_picture.php?type=nouveau&pic=sommaire-1.jpg" title="cliquer pour zoomer" target="_blank" />
     <AREA ID="sommaire2" SHAPE="RECT" alt="cliquer pour zoomer" COORDS="370,8,530 ,92"
     	href="show_picture.php?type=nouveau&pic=sommaire-2.jpg" title="cliquer pour zoomer" target="_blank" />
     <AREA ID="renens1020" SHAPE="RECT" alt="cliquer pour zoomer" COORDS="4,8, 175,93"
     	href="show_picture.php?type=nouveau&pic=couv-renens.jpg" title="cliquer pour zoomer" target="_blank" />
</MAP>

<map name="travaux3">
<area shape="rect" coords="3,9,231,236" alt="plaquette-lausanne-1" target=_blank" href="show_picture.php?type=nouveau&pic=plaquette-lausanne-1.jpg" title="cliquer pour zoomer" />
<area shape="rect" coords="247,9,699,236" alt="plaquette-lausanne-2" target="_blank" href="show_picture.php?type=nouveau&pic=plaquette-lausanne-2.jpg" title="cliquer pour zoomer" />
<area shape="rect" coords="4,292,230,520" alt="plaquette-formation-1" target="_blank" href="show_picture.php?type=nouveau&pic=plaquette-formation-1.jpg" title="cliquer pour zoomer" />
<area shape="rect" coords="246,292,701,520" alt="plaquette-formation-6" target="_blank" href="show_picture.php?type=nouveau&pic=plaquette-formation-6.jpg" title="cliquer pour zoomer" />
</map>

<map name="travaux4">
<area shape="rect" coords="3,13,232,241" alt="plaquette-l-arbre-1" target="_blank" href="show_picture.php?type=nouveau&pic=plaquette-l-arbre-1.jpg" title="cliquer pour zoomer" />
<area shape="rect" coords="243,13,697,241" alt="plaquette-l-arbre-15" target="_blank" href="show_picture.php?type=nouveau&pic=plaquette-l-arbre-15.jpg" title="cliquer pour zoomer" />
<area shape="rect" coords="4,297,458,523" alt="plaquette-l-arbre-19" target="_blank" href="show_picture.php?type=nouveau&pic=plaquette-l-arbre-19.jpg" title="cliquer pour zoomer" />
<area shape="rect" coords="492,296,655,523" alt="brochure-3-couv" target="_blank" href="show_picture.php?type=nouveau&pic=brochure-3-couv.jpg" title="cliquer pour zoomer" />
<area shape="rect" coords="669,296,832,523" alt="brochure-3-p-ls" target="_blank" href="show_picture.php?type=nouveau&pic=brochure-3-p-ls.jpg" title="cliquer pour zoomer" />
</map>

<map name="travaux5">
<area shape="rect" coords="130,11,753,238" alt="depliant-renens-br-1" target="_blank" href="show_picture.php?type=nouveau&pic=depliant-renens-br-1.jpg" title="cliquer pour zoomer" />
<area shape="rect" coords="130,294,753,521" alt="depliant-renens-br-2" target="_blank" href="show_picture.php?type=nouveau&pic=depliant-renens-br-2.jpg" title="cliquer pour zoomer" />
</map>

  </div>
  <div id="footer">
    <address>
    webmaster: <a href="http://www.sosweb.ch" target="_blank">SOSWEB.ch</a> &middot; 
	Votre coach sur le WEB &middot; CH-3960 Sierre<br />
	tél: +41 21 550 00 34 &middot; email: <a href="mailto:info@sosweb.ch">info@sosweb.ch</a>
    </address>
  </div>
</div>
<!-- wrapper principal: fin -->
<!-- texte caché correspondant à l'image
DATTNER création et communication
Pour laisser une empreinte durable
Des concepts originaux
Des images fortes
Une approche globale
Du logo à l¹affiche, en passant par tous les médias
Conception, création et gestion complète de campagnes
ou mandats à la carte
Bienvenue sur notre site, et n¹hésitez pas à nous contacter, sans
engagement: 
jp@dattner.ch ou tél. 021 311 00 11.
-->
</body>
</html>