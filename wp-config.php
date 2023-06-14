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
define( 'DB_NAME', '2135-21_77554' );

/** Имя пользователя базы данных */
define( 'DB_USER', '2135-21_77554' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '20c866b05180b3966c98' );

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
define( 'AUTH_KEY',         ',gVY=t@Noc4hh9<x)}ulwr}-$waExa%#+)O5WZ^idaW@HBkS}v?]@u$gxU;dPeFp' );
define( 'SECURE_AUTH_KEY',  'j3Te&ZP9*ls6w?hg2ie=m_/%>-R1aK?`gVukz2Gg#B?J +J_-lXzcI_Vw@zYO=7d' );
define( 'LOGGED_IN_KEY',    '[G~sR=UzlsE1-RHvf]VwqQra60N!8Ns*=>I>Krv*!)7Zo/RkENnarr;KRppjo:!r' );
define( 'NONCE_KEY',        'S~>iXg_rWY:GzUg&RJ[I`q8V6]x8Jm6g]U%rNLQ.XA!>N3Q8^:IB1mJ*5MA{eGP]' );
define( 'AUTH_SALT',        '2{Y-,W?[}vCYp&$x>1Z+j%>KEP2^3x`4RV(P{Cevu,Y{eryN@MfA>Ax6IM}X_afQ' );
define( 'SECURE_AUTH_SALT', 'la{3f.(4*O-YnIB6+FKa)tXQ9gAH#zZ*?DBx#G)K9S:E:rlS1<h]Bai2[]o/U>|f' );
define( 'LOGGED_IN_SALT',   ';Ds=PEJz=i_ZoV>%OHdFaUFiQn|B*6yE?zB)7~{<[vHbSsQp@/@ohGi|=luNPSK2' );
define( 'NONCE_SALT',       'Xqaw@cw~dZa%`:AV?@dCAG5E(c!N1[%PmCss<<oS| j.Ru8]53sP)g)rG&3@~(+c' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'hLWOf_';


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