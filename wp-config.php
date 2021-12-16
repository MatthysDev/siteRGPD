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
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '| 58 93NBTOZd@&08jby4H/vO`fU>J=Fs|>!qIimVhS$[|*fkp^68(6qFP 16V= ' );
define( 'SECURE_AUTH_KEY',  'N459M_lq24%.@5Qe;SY5SzP0&|hAr/>%BH5_NsI&|Z{qp>5?@::}j<(]3-`skHSo' );
define( 'LOGGED_IN_KEY',    'ah[)jTK@-vWT.sDQOotmXFb[x7d^(r:MT>5L}48aeJ-1x4xy!$_X`&v|;`8m>r2v' );
define( 'NONCE_KEY',        'xvM5rCD<%;OI(o@5jvf8 &HIdwOuJJs[bygxxo$sk[Ym_+$*6YKjJNzu_{BQ+z)7' );
define( 'AUTH_SALT',        '}{hd2f|cWWY:l$&}h^xwE7Qn}<ap!1>>Mw4l_?yKBInKtclnk@U]e2<6K)]V|*:Z' );
define( 'SECURE_AUTH_SALT', '{jfh7Q$q|7^>,zZU^r~+!^`<&mi88!T&r4iCFetfe99.g=Dj#F)s R(<3HO+J^Eo' );
define( 'LOGGED_IN_SALT',   'U62Egm5dr6XpPMrPw^?lRfu<a4~cnK&15]_r.6#&(n9mF:/Z[8$%$L,Zl25.5Erw' );
define( 'NONCE_SALT',       '3CsO%H5{43:G&5N3OmFK6+6(7Bx#i{s!7/|94814D57<DI=[Yr260!~?4xm&8a=5' );
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
