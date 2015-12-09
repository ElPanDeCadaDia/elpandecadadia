<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'bxsbrdpp_wp');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'bxsbrdpp_admin');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'panadmin123');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'IcS-}()ymA/*dBcdn-:(0VgQ4`6V9;Ap=Ty^_1&&~h!M/,@MHVT@-J~[?{|(S$6+');
define('SECURE_AUTH_KEY', 'RH1p2$ e(n:y2;K&zbmHFJ^Dp6Zn#MjQY.J0tO{$wyJ[r47@_5i.UJl|ED9 Ao,h');
define('LOGGED_IN_KEY', 'oN;L$=+r[6R2lNq`=2#&5Fe}tqn<Bw|<$7>wf>swx~8P|Q6Ymqp<~Ds_RoVml8HK');
define('NONCE_KEY', 'q|@G_?UiV`|]2-lj3>Pb0!qJ5o|dj=)>y!T:r:ZJO--d?NN,80QI<Cx-Irndbt5w');
define('AUTH_SALT', 'c%b]|g^l]c#i~~JtNrjv~j<[>pxvB V|>O(34KF&YDuLs/z-t17!zxctG[2cmD+O');
define('SECURE_AUTH_SALT', 'TD=ZC2gChiy-2TT jRo-p,W+}-0v%2Ye>LlK$)ghvvKK|(.S@XsPu|(mwO&tZ6R>');
define('LOGGED_IN_SALT', 'QW=xs7cWY|t[c7AFjLD9#(`|IlMs 5nFwQXf9nP~jP;:|h?|Vz+yT&y`BA2AQRI5');
define('NONCE_SALT', '#V5upfjW`)Z*|*a{0b%ZM3o/Z~^seQMS2k|KMm#=7R2;Xh$V/pJgj#Xj|o7-W+nf');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

