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
define( 'DB_NAME', 'final' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '~e/RstT;U]<*,C1zJNLO=H=aHZ0GT.1Ya8B!6j[.@gt|<(Rd/_{xM%EC3u|BPk@b' );
define( 'SECURE_AUTH_KEY',  'KxI/2!hn0*+qHg.lNHX40_&`(Z)+EGlS$0re /!2-.NYLxC3{[FM48+ccb<Dd@]w' );
define( 'LOGGED_IN_KEY',    '@fvpDj{(UBtu3B%7DY_YlAte6o^d0e9eDJcn0BzO&m(2n|gSJVRr}1R640pBD[!X' );
define( 'NONCE_KEY',        '1@ (HdRH?0lq>jhXdLo~nFR>_m*HVHS@9=de(B8oa7pYAWamfbXGgzT;R+KraMUd' );
define( 'AUTH_SALT',        '}6D@fxJ>.1t/-_9@D7qoX@rgfHx<SXZ&xE_P#<OJj??+rHKztOKvBV4lpuZ2-Hp;' );
define( 'SECURE_AUTH_SALT', 'P8Dh#Fi#{IkhrI)YXN dB%>CFr=`7qhq}b@] L7;10Ad9~S#=z8$/FVI@,o*]L.u' );
define( 'LOGGED_IN_SALT',   ' 7T!1uoIMMx1X;F:|-EMhqtHArb9#Y#Wj-8$*eQe7Md5EAT|`$N=I>@DNUm#@+@.' );
define( 'NONCE_SALT',       'M=BrjWX&gk+FM |#+|%o+0f} h<@OeI9Kd/V#%6V9 L>7RZTh!P/(,?<SkXw<#t<' );

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
