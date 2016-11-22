<?php
/**
 * Основные параметры WordPress.
 *
 * Этот файл содержит следующие параметры: настройки MySQL, префикс таблиц,
 * секретные ключи, язык WordPress и ABSPATH. Дополнительную информацию можно найти
 * на странице {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Кодекса. Настройки MySQL можно узнать у хостинг-провайдера.
 *
 * Этот файл используется сценарием создания wp-config.php в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать этот файл
 * с именем "wp-config.php" и заполнить значения.
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'gb_113wp');

/** Имя пользователя MySQL */
define('DB_USER', 'gb_113wp');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '12aec0c7jk');

/** Имя сервера MySQL */
define('DB_HOST', 'mysql76.1gb.ru');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется снова авторизоваться.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'XPSrPqG+d|7Gh{xZHe@`+wqJ2L*PU%+NW^|`Adt9)jgF7>[o,&X(~r<lB?e$t|1O');
define('SECURE_AUTH_KEY',  'q~k{hR^~Q;bl%v$2>s/mhk^$K3m}=I%6k(gr@9~oPa7TJ@VgGO Ob6t]B3&syG94');
define('LOGGED_IN_KEY',    't,9^GGKob#^(I]6ZnBBUq]H_0R!y.Zi*B-.J8E$N>j5JRNF})EO9WL%D2`0!BPWL');
define('NONCE_KEY',        'Mxq2(3t7jqkA^^}$|q<yUdx6Yutm^oIc>>I67#2B8!&yE94+CIQnQwZcL2`m?0dl');
define('AUTH_SALT',        'Mm@YF8FvsvA/?HNUF$ |<maf`cf@[~J& @2wiRNhEkw$1bho [>!k@C_9yR:t[V~');
define('SECURE_AUTH_SALT', 'oVqiAykk)++8WejDlXS.NQeH!QgSsd_+g]>}a=c[tGx7Gji]j,l+aEO/A<>Re4MQ');
define('LOGGED_IN_SALT',   'AP:z-6y,o2q-4y`LoScu)QW,S!Ka{(1lN[hI-vO86Y<y%`fN0z<}8m,jJCl-0-|j');
define('NONCE_SALT',       '{Nr(WV1RJPBO^IjVy9#xPeL^H0Td?%1)vk)0+2tY3m>|P;E<%I4w^MCBzq!C>Xt?');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько блогов в одну базу данных, если вы будете использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Язык локализации WordPress, по умолчанию английский.
 *
 * Измените этот параметр, чтобы настроить локализацию. Соответствующий MO-файл
 * для выбранного языка должен быть установлен в wp-content/languages. Например,
 * чтобы включить поддержку русского языка, скопируйте ru_RU.mo в wp-content/languages
 * и присвойте WPLANG значение 'ru_RU'.
 */
define('WPLANG', 'ru_RU');

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Настоятельно рекомендуется, чтобы разработчики плагинов и тем использовали WP_DEBUG
 * в своём рабочем окружении.
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
