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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'M:1M3|dC:Xyr7=.G1F}(wL90rt%@4UqMEYspXU;GtP^>LUn`uEukkKY $y +60cr' );
define( 'SECURE_AUTH_KEY',  'eE6y;AEPbp0N1#lsC{?gLtRqAj1@hSiGf5BSr6X<dWdgMp;TlR)?u,P ]:Yi.SyL' );
define( 'LOGGED_IN_KEY',    'xlcgm0=CJ`sr0)f*Xp1wU=7,KP$A.|5y61vJk(*xI5GVeO<>##>_{RMY]`Sy*z4/' );
define( 'NONCE_KEY',        'bM+_}yNh^Qk~5L:KLg&%gcH*qr5@u_Q3d=)y/^Rk`4/95j(JuSQ.`u-%mL6Vl!pu' );
define( 'AUTH_SALT',        'j[?uzXYuW-a<X=9wk!o7q-(a%N9K^1i_s-tYR80!uqud8[9j*Q0nk0etc(r|Sig$' );
define( 'SECURE_AUTH_SALT', '|DW1:Q-9+[xuxSf{ynDHCZh.|[vT2u2g(/DIehQ_I@AW]+?LOQRVutcyDvCN:?Ra' );
define( 'LOGGED_IN_SALT',   '.x_!ZNi!9Ae6xeu|IsOOj62dp|I?j!s,J6*((LZzVwLO<JN(w|R^nyMATDFE(n`9' );
define( 'NONCE_SALT',       'Yq=O#Iv4W`uU^10x9M!xT;e3Wyj??}F)=#ZPGNz;nX%bvUI5kAV:F#7fI,1n3{~W' );
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
 * Il est fortement recommandé que les développeurs d’extensions et
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
