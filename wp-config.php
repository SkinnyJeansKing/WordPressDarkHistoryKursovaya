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
define( 'DB_NAME', 'darkhistorybd' );

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
define( 'AUTH_KEY',         'Bz$ P|J`mYk;Wk`:HWp64A0Ma%d>Ct<t7CZL}H-Boca<:Ush7+duFh+9e:j>>rT}' );
define( 'SECURE_AUTH_KEY',  '.1I<U.E68I(fhDS:J2|mp*$$lW39uYCV;%H1,yEo/ro&UY(M=*W!K`lK0Av{KkZ&' );
define( 'LOGGED_IN_KEY',    'bg}OC_(i`vw4_.^(k^HRR LA23,8}Pf(R*>iWE*,PK:8_T8PC:O)Cf wNV!}R2Ba' );
define( 'NONCE_KEY',        '6#j,IK?4ZH1_G/w?uf-JjmY9?5WpfEXffrBB;}Y)KSqow$T:Xm8kP4/~|($UDzh_' );
define( 'AUTH_SALT',        'HZ, m`+|Vb}#[p#)b2>P3<#$0YxvW[*- ?-Pgpi~AOVFzy?NtfO{;I;N$J^h2E1$' );
define( 'SECURE_AUTH_SALT', 'pm`U!m{WiYHb|@:Z U{.8eb78B[v91,WDsH^f52]haGAjc_@w*g=WtXhX/6v&D!K' );
define( 'LOGGED_IN_SALT',   'p~=IB@lcP3uk(4S+)yW(MZ|@rHim}]Jq Cd9W9Yyby-CKs3l~!VTsTZe ^<nrlq.' );
define( 'NONCE_SALT',       '5{L.hbk;ojFLdfa 7OolLTF)COP|1RtG&`jB$*k=`I;upl)6QX:e0P%^, E]s2A7' );

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
