<?PHP
header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
header("Expires: Mon, 01 Jan 2007 05:00:00 GMT"); // Date in the past
$param = @array_merge($_GET,$_POST);
if( !is_array($param) ) $param = array($param);
$nbr = extract($param);
if( !isset($type) ) $type = "affiche";
if( !isset($pic) ) $pic = "f12_mobilite.jpg";
$picture = "./img/$type/" . $pic;
$str_href="";
if( !file_exists($picture) ) {
	$str_href="<a href=\"mailto:info@webmaster.ch?subject=dattner.ch_erreur_image_manquante\">";
	$picture = "./img/erreur.jpg";
} else {
	
}
$border = 1;
if( $type == "logo" ) $border = 0;
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>ID Dattner Cr�ation &amp; Communication</title>
<link href="./screen.css" rel="stylesheet" type="text/css" />
<META NAME="Keywords" CONTENT="dattner, cr�ation, communication, graphisme, annonce, affiche, logo, site internet, panneau publicitaire, signal�tique, carte de voeux, plaquette, flyer, corporate image, publicit�, image de marque, conception graphique, media communication, publicit�, promotion, papier � lettre, design">
<META NAME="Description" CONTENT="JP Dattner Cr�ation - Communication - agence de cr�ation graphique pour vos publicit�s et votre communication - Rue du Lac 22B - CH-1020 Renens">
<META NAME="Robots" CONTENT="noindex, nofollow">
<META NAME="Author" CONTENT="www.sosweb.ch">
<META NAME="Reply-to" CONTENT="jp@dattner.ch">
<META NAME="Identifier-URL" CONTENT="http://www.dattner.ch">
<meta name="generator" content="www.sosweb.ch - Web coaching - web design">
<meta http-equiv="pragma" content="no-cache">
<meta name="revisit-after" content="14 days">
<meta name="classification" content="Communication,Design">
<meta name="distribution" content="Global">
<meta name="rating" content="General">
<meta name="copyright" content="JP Dattner Cr�ation - Communication - 2007 tous droits r�serv�s">
<meta name="language" content="Fr">
<meta name="doc-type" content="Web Page">
<meta name="doc-rights" content="Copywritten Work, Prot�g�">
</head>
<body onclick="window.close()">
<div id="wrapper">&nbsp;<br />
	<p>&nbsp;</p>
	<?=$str_href?>
	<img src="<?=$picture?>" border="<?=$border?>" float="center" hspace="20" vspace="20" 
		alt="cliquer pour fermer" title="cliquer pour fermer" /></a>
	<p class="center">&nbsp;<br /><a href="#">clicker pour fermer la fen�tre</a></p>
</div>
</body>
</html>