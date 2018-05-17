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
define('DB_NAME', 'Clase');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', '::1');

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
define('AUTH_KEY', '+t,S/Xm(~F_eyd_k!|Itn$oBdD/lh0>G7S{suP-PI?Atp7pDnBZt.E^rlpu0/_pM');
define('SECURE_AUTH_KEY', 'aYXDzw(n{75#b5-[x#BwQk.L`?ijk)6/TwUcMkl,j1Ow^W<YTUUO7SW8fk46Ms!l');
define('LOGGED_IN_KEY', ';Rc2mcrcdf=#L>zR%(5qMq{(U5b_h?qupnTD72%<@D<,abo2HpmSC>%jARSP?9*!');
define('NONCE_KEY', 'JAeL`K2xckC{&Er-|e{cc)M!}$W_B#-W`ZWl&xu#A3/xJP@8^XxJW?77(&z@wh?J');
define('AUTH_SALT', '9tz?`[$|IeL95v,O_2(5V ~P2.4t?OQ7ZJTTxJK}w=nW<p!9wamfU-3dQXo^v(65');
define('SECURE_AUTH_SALT', 'Ey`7DFK}G-7eMC0;F EV1-b8iLcBQD!ed&IpFPZVrd*`fF.Z@J2rP0$Mwavs)q?A');
define('LOGGED_IN_SALT', 'Rbz3&)[X5)z$YO}T[wsA7iVW335a?2>HS=HxEK9hun)rziPeoL-Hm^`u+r? XvlV');
define('NONCE_SALT', 'BZ>ur<UPDQd&=|*{bjfp,`149IJ}=^@ABTUH.G*wu56LlzSG`x5]De}UKN3q!|w}');

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

