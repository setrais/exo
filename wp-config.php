<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'exo-kharkova' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'root' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '-CCsLH9K`L^)32KA.)f5r)$DZ: K4,jt5!T[6TuFQEd&}b%MAFMGb.2UB$R0RRES' );
define( 'SECURE_AUTH_KEY',  'FU<P%)mdR);IYoDl!hx+`K,g|i6[]gUe+ouV{h(j<g[D{$KV:1uSb,0[ZyF7hxG^' );
define( 'LOGGED_IN_KEY',    'Aq@hj ~*=cDSdZF~8<dR+G;`w93=dG[MiLW92;^}DG|~2i1[:=/fKOA8vZc X`:T' );
define( 'NONCE_KEY',        '^rN)8Bp$<M-d@NWLe#Ytok-8zxz5U0gYyg=|.PEUIq6QxY|(UL4RmbGkP986fh24' );
define( 'AUTH_SALT',        'S09AgmnE*5!R]<{rPs=-Zs`hPuc~uTX-f1sHRxtl&Wo=xbWNKz x~bYsfo3bd@x+' );
define( 'SECURE_AUTH_SALT', 'OA+KlFqe!r2DE@O=hyi:O`<DA^TadiFfDP1r0+3M7_.tqIx Gv@ OdlAHh,Vs*z_' );
define( 'LOGGED_IN_SALT',   '7`|zk&m2<!LlBvQ$RZ0JN2{Wo U_<L=?SFTo4Jiu*(B8dJ{ 0n#Joa@+qwR#h%<d' );
define( 'NONCE_SALT',       '/55{Z#1!Sr<{$K!8p;}tYLM%qU~o!mkr.AQ}S4(M|yBg/PSXy6JC7=R?H>2tse68' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
