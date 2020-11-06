<?php
/**
 * Custom WordPress configurations on "wp-config.php" file.
 *
 * This file has the following configurations: MySQL settings, Table Prefix, Secret Keys, WordPress Language, ABSPATH and more.
 * For more information visit {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php} Codex page.
 * Created using {@link http://generatewp.com/wp-config/ wp-config.php File Generator} on GenerateWP.com.
 *
 * @package WordPress
 * @generator GenerateWP.com
 */


/* MySQL settings */
define( 'DB_NAME',     'wordpress' );
define( 'DB_USER',     'wp_admin' );
define( 'DB_PASSWORD', 'admin' );
define( 'DB_HOST',     'mysql' );
define( 'DB_CHARSET',  'utf8mb4' );


/* MySQL database table prefix. */
$table_prefix = 'wp_';


/* Authentication Unique Keys and Salts. */
/* https://api.wordpress.org/secret-key/1.1/salt/ */
define( 'AUTH_KEY',         'h$97MKO:;oxLl|Eov|kFPze%U*2hx-c#(TG=^+W1lvm(lN$_YS|Bc&-|1RHr[.*&' );
define( 'SECURE_AUTH_KEY',  '|#OU3$_C@-Rak.$Gn>bbT!2t&Ct#C|*-NA-vst|*bPPqtS+i?0uh+:mXt0b@Q4Xi' );
define( 'LOGGED_IN_KEY',    'FM$<!K%NdJTHz[*IAL$+@ES.b16JT#bsOae@WAkB}#-3|&LbuVQ[2`BxJAX+Nl(D' );
define( 'NONCE_KEY',        '6eM?|e{o|uBBK3w _j&J1HCA@$vEvB$D]`OPPbs{MA]V>6|-_3;*Popj.Wb1;wiX' );
define( 'AUTH_SALT',        'b8Y-+v`0et+_pPl.LhnbS6&FH|dJO-:Js(X-+E[(rv:{t%|?DE!pI>wvO+p=m&Wg' );
define( 'SECURE_AUTH_SALT', 'SFeRx3MMZ+t0ONAd *Ob0Y*$8H|)vWlej0zi6jt*_^B^:vu.[G6Aq}$s/2,3G%>Z' );
define( 'LOGGED_IN_SALT',   '~bki=%Wy_XQh*XzS-_)9n*BU-juZxi6a{?lq?rT2u].+y~J*1(UN-|f^-pb~3|.k' );
define( 'NONCE_SALT',       'q-Agcrh)eA8I?MJ$dp-{F=3Tc$M$5-^gg|^F)l^<>@Z2JxBAjQ}>o-K74rc6okEO' );


/* Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/* Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
