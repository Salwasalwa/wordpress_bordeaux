<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'wordpress_bordeaux');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'wordpress_bordeaux');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'wordpress_bordeaux');

/** Adresse de l’hébergement MySQL. */
<<<<<<< HEAD
define('DB_HOST', '192.168.100.137');
=======
define('DB_HOST', 'localhost');
>>>>>>> d0f86682b7fc6440b70f7ce00e89a97ca77e0db5

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Ba2Q0Zaj!g3tX2k}g(Opq=`[5?|:.G3C1sh$$3hf?RV ,kAV=$a,sOp pa1-sV=W');
define('SECURE_AUTH_KEY',  'ltR:E6MQ5m~z^JJ1XLd=nJ~ZN)CYd>a)d*vEX{jW 0;;];hqUG)P)hZgJZXAoNye');
define('LOGGED_IN_KEY',    'l.!N-kM32M,=t}UI--Jvd,fYbYuZ=f3`oN*AU9S4b24RQs-&H?fTNPrSv,mjRE{T');
define('NONCE_KEY',        ':QIId00R70BkBAp3s/fU):er6Cu-$d} z;O*)=pQ s5> l74|h/=5$8wtT0JTXLC');
define('AUTH_SALT',        'YP0-c&X@LS9d,WY!&8vt2L;;=;|^O4ns}q]`=K!*PiH1~BGvu6[|T2B^R@,4lWY@');
define('SECURE_AUTH_SALT', 'Ox:-goW^Y=J;qeR&VKU7Z!TSg Ya=9-$FJBeUE|m5BP7]<nhNLpcsv]Hr*5|u_<2');
define('LOGGED_IN_SALT',   '0$tBH-wXUC43B3nQ^L<Uoux@d|,bB+vq{`<zQFIP?N0RU7q]%F6Mr61^2hJVFbH#');
define('NONCE_SALT',       '~-gJ?_g!b5EG!m{M@gO*3+W@c*MqNUFBLBX?8FKg k.wQl0yFno^l72TJu9qhSC|');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
