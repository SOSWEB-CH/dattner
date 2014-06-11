<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur 
 * {@link http://codex.wordpress.org/Editing_wp-config.php Modifier
 * wp-config.php} (en anglais). C'est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d'installation. Vous n'avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'dattner01');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'PGM-dattner');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'JeanPi5016');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8');

/** Type de collation de la base de données. 
  * N'y touchez que si vous savez ce que vous faites. 
  */
define('DB_COLLATE', '');

/**#@+
 * Clefs uniques d'authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant 
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '#PORde`G6YcRMZIN9K)l*-kY}!{=:#^q1+Q6Y8w@gfa,zg~!DCl]-<%3f#:LRZF<');
define('SECURE_AUTH_KEY',  '}Oj5Vc:`O|&GfBLd2TIiOsb9hs9+j<M>wgNn>WWSs=j;RCr}=k%C]SB{zr8pyX<<');
define('LOGGED_IN_KEY',    'tE13fVJ#3&t}FTb`SKVp`S?ISVXbeK;1)BdU0EwM5,+|AshrejLBf!aW|J{#PYVm');
define('NONCE_KEY',        '[[%G5bl06V$+>/emqc3nUZ /#@+`[WcLw`a;dAb=9=eP]8E !E;Ob[VNB2,9aO#3');
define('AUTH_SALT',        ' DVaaKaQ..)7EHGBOjWWQu!qEkD`Mh. l&8#%RZK[:DcnpXZ8l:dRIHVe6HY=-cW');
define('SECURE_AUTH_SALT', '>z}!dm6Q+6MK)q*#MVJ5+k,_4QDR2s6no* _O0I&%xrLy4o>`#N:7F(o~3@e@Hb(');
define('LOGGED_IN_SALT',   '_/tOG/8x02T|WFvukROO0Oht}$d~[wDVA+IVZSB9uj-RRIyl1c!A Xd[lDB|&R$U');
define('NONCE_SALT',       'g2~,>QymZq]%u~#Yj;%hLlv;}^S4k-,zLR|:Wp@RqAN!h!gV+ZhQU6-Zq5wuAD_c');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique. 
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'djp_';

/**
 * Langue de localisation de WordPress, par défaut en Anglais.
 *
 * Modifiez cette valeur pour localiser WordPress. Un fichier MO correspondant
 * au langage choisi doit être installé dans le dossier wp-content/languages.
 * Par exemple, pour mettre en place une traduction française, mettez le fichier
 * fr_FR.mo dans wp-content/languages, et réglez l'option ci-dessous à "fr_FR".
 */
define('WPLANG', 'fr_FR');

/** 
 * Pour les développeurs : le mode deboguage de WordPress.
 * 
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant votre essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de 
 * développement.
 */ 
define('WP_DEBUG', false); 

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');