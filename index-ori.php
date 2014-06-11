<?PHP
if( isset($_GET["GetNew"]) ) {
	if( $_GET["GetNew"] == "kill" ) {
		setcookie('newSite', 'GetNew', time() -3600, '/', null, false, true); // On efface le cookie		
		header("location: /");
		exit;
	} else {
		setcookie('newSite', 'GetNew', time() + 90*24*3600, '/', null, false, true); // On écrit le cookie
		define('WP_USE_THEMES', true);
		require('./wp-blog-header.php');
	}
}

if ( !isset($_COOKIE['newSite']) ) {
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
<body id="affiche">
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
    <img src="./img/accueil.jpg" title="Page d'accueil - ID Dattner Création &amp; Communication" 
		alt="Page d'accueil - ID Dattner Création &amp; Communication" style="border-style:none" 
		vspace="10" usemap="#accueil" />
	<map id="email" name="accueil">
     <AREA ID="nouveau" SHAPE="RECT" HREF="./nouveau.php" title="cliquer pour consulter les nouveau travaux" 
		ALT="cliquer pour consulter les nouveaux travaux" COORDS="372,14, 520,49">
     <AREA ID="email" SHAPE="RECT" HREF="mailto:jp@dattner.ch" title="cliquer pour nous contacter par email" 
		ALT="cliquer pour nous contacter par email" COORDS="451,380, 554,416">
     <AREA ID="point-presse" SHAPE="CIRCLE" HREF="/pdf/com_200711_portrait_dattner.pdf" targuet="_blank"
		title="Article de presse (format PDF)" ALT="Article de presse (format PDF)" COORDS="711,438,42">
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
<?PHP
	exit;
}

/**
 * Front to the WordPress application. This file doesn't do anything, but loads
 * wp-blog-header.php which does and tells WordPress to load the theme.
 *
 * @package WordPress
 */

/**
 * Tells WordPress to load the WordPress theme and output it.
 *
 * @var bool
 */
define('WP_USE_THEMES', true);

/** Loads the WordPress Environment and Template */
require('./wp-blog-header.php');

?>