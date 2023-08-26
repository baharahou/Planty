<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'Planty' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'xu[g$dh%KKf*bqi,a4[Qv[Vz1CL?bNtWQ.>U+w6X j/NOnlK9E[!IiTn@K:wc#0I' );
define( 'SECURE_AUTH_KEY',  '![hQne!r+R5lB#,?)LSI~i$sSr)kR>C^/X3m?_vAT8L!pla~&oOqfVl :Y}S,Klf' );
define( 'LOGGED_IN_KEY',    'eC@hVmah:yER+@=?l-Z<k1/x$G*XXn3(^I-E;Y`,)c9RyZCZkHIdO_iXot#`ng9_' );
define( 'NONCE_KEY',        'C)s8]zT}-jQ~LZ^N9r3DoF!d$?!J{evzQ`:5H1yr7Or{%QBuWA4Vll$9s RB[{qN' );
define( 'AUTH_SALT',        'W!]#XsBfq$.Qad/TwxmqP,I^4@61nPwWk4CyYtn`gT7O[XXO}*ONwOdfYk:h+GUZ' );
define( 'SECURE_AUTH_SALT', 'db,*+iMi@Ji,/`C*[{A}l-m89BvB;E6Z9yNsg,[E[UfLFcx,f-fqqk)-;N__n<SC' );
define( 'LOGGED_IN_SALT',   '_13$!1>k }M9oL+|sg@#0mYMtR[G:tQwyny7sD~oW E%g*fB).(@&^16$*jvXaMq' );
define( 'NONCE_SALT',       '3e46J`_lCKmds3CqZ@4:>qnszaKyF)YLkwy)tzcJ!rBTB!}&486Mmz=QVOU:&tgx' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
