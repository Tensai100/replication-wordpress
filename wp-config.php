<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'wp_brief' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         'Ub3&64q.6Vf:O;0ljg}*D-CwRgzq|gTr8A98`.{IMv*lz(t`[!_%1k1>X~3I:8k9' );
define( 'SECURE_AUTH_KEY',  ']m3H{Y+qbU!W.k`cCqj2n3KKTQS-%<rU-?sj%!{j}c3W}=$zdNQ7&sDv[,;;_I0T' );
define( 'LOGGED_IN_KEY',    '3@@9+kT:kiUA`.9logwI_@Svuvm:oe*Zd0~txG,+2~4+S}-B*0Z04jt{?VpfdXNu' );
define( 'NONCE_KEY',        'HS,q`.1j2f<Wn.wd=!>aNV-,t?Hn%(BEwIf!l,dlA9N~o)cIt;_g6T]hC/w]F`!(' );
define( 'AUTH_SALT',        '~`k5b;w0GTs{QXCeNIuOPyT?nt.@leC:{<fF]3v-X/0tHe,M!fg?yFeVmDe:$VBu' );
define( 'SECURE_AUTH_SALT', '>g~mfXW;8]0%DB0ZzuBs4#;rS%pI9DuJd (Ew:9q,lzU5d]]+u(HO9C5(x##5KES' );
define( 'LOGGED_IN_SALT',   '7JluhQdE{n@L`npt#wE[Aivq5;zJL%qDf!B?1YW&g@NSpLus$,gQ,9 m^B![,*qU' );
define( 'NONCE_SALT',       'aYvDHM 1a2X+eOWvtZd0e+,udKV;z]*_G8)A+^zan[h_`=5{jqS.;xsdc1P60x+%' );
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
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
