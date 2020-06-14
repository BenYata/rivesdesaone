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
define( 'DB_NAME', 'rives' );

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
define( 'AUTH_KEY',         'yVATz=E]4x+j6=@lq@>3K2lp!okd~]n|~M{bcb4TynTo37~JdB]4de8XOsBzX:wp' );
define( 'SECURE_AUTH_KEY',  'wx]/o?%8P$i~66{o$t4r(nwM)B075J`tKe1OfS,KpnM&>D.Ruw:t-0|Wg|f=tLbL' );
define( 'LOGGED_IN_KEY',    'td:Uyt7*2[YP*&~^@a`u8WEeEKv`;9u>um3UC~T2fd_[pWRbK2Z&Sqr6-&f4nx%u' );
define( 'NONCE_KEY',        'K,N5h+:3nhKJOoxLY|XXNQ#!8| </G?%Dzc <&_<BI)=$0M@_*QIiKq.?%<5`%.o' );
define( 'AUTH_SALT',        'j`V>_,uJIBX!h67IX_EF0>D(%EEM+#>lV`;=xF|4S?P=LdEZyRB/Y-- cFG=diXT' );
define( 'SECURE_AUTH_SALT', 'mLg6j^r<f~5Wf/,K1n[}2lYT}7~oAz)]!N5JH!}R2Fcgd,*^!b`qK9u)j>[a&ZGh' );
define( 'LOGGED_IN_SALT',   '{q0<wx/i5lIJT<WX1`^,6zj<W!.{mOoVW%GOJI*/,+C]|#A&*H~=eI%1 ;<!EswV' );
define( 'NONCE_SALT',       '9jK9x8csTa3:P4xQGD%]76c4K*0tg<%8)Syv7}jU4>d<iu]|0117<M# fUn6Osyr' );
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
