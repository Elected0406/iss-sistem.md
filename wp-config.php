<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'isssistem');

/** Имя пользователя MySQL */
define('DB_USER', 'isssistem');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '4r85-*D%1B`P(/]VgW75<F)yv{I4|#{;mYTE&7@6R|0=$#eSOW~g3!ha{`{|2)db');
define('SECURE_AUTH_KEY',  'Y;P<^0PJP.on^&+N7A`DI9[:gqnWcQB:$`aE1V501[PPm>1%UbojR&Nn^#L!/85p');
define('LOGGED_IN_KEY',    '=,lx}N;lj&D*FG2uN1Dt7w1XGj`-9CLK|!!ADUjb!!rE/j&K85;er4`zd(Y>BG<&');
define('NONCE_KEY',        '+>EL29,Eb2R}yp)[K{R#~LSpECQKc`(N#ukgvdyELf6#|W!E/UFI=KYVBf8G{(Aj');
define('AUTH_SALT',        '6yiHaL:UZOg>V{b:k#l8*+oAVJHx: ie([>I^e=nai+AyQv4sS32+4VO[S?SXP$1');
define('SECURE_AUTH_SALT', 'P[&{[A9OxAT_FWvp(kTkhLfIj|@8d?3N8h`iL)#pzXcw-1=Xzgo9 Gy-eUsUK3=2');
define('LOGGED_IN_SALT',   'imx%)lDdNq*2rEg|u8GOt_1_WRLK5oxd6Vl5{@(:h(=).c=mR_Hl)QHE7By ?q!z');
define('NONCE_SALT',       '|],lGD`:Eqg[z9DHQ=*o(NvKRYp=1xuU*Tg]}PoggM.=)j%3TWHm[-@8K.c#7R2+');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 * 
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
