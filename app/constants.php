<?php
define('YXORP_HTTP_HOST', $_SERVER['HTTP_HOST']) . define('YXORP_REQUEST_URI', $_SERVER['REQUEST_URI']);
const CHAR_PERIOD = '.';
const VAR_CACHE = 'cache';
const YXORP = 'yxorP';
const FILE_CACHE = CHAR_PERIOD . VAR_CACHE;
define('DIR_CACHE', VAR_CACHE . DIRECTORY_SEPARATOR . urlencode(YXORP_HTTP_HOST) . DIRECTORY_SEPARATOR);
define('CACHE_KEY', rtrim(strtr(base64_encode(YXORP_REQUEST_URI), '+/=', '._-')));
const DIR_LIB = 'lib' . DIRECTORY_SEPARATOR;
const DIR_APP = 'app' . DIRECTORY_SEPARATOR;
const DIR_STORAGE = 'storage' . DIRECTORY_SEPARATOR;
const PATH_CACHE_DIR = __DIR__ . DIRECTORY_SEPARATOR . DIR_STORAGE . DIR_CACHE;
const PATH_CACHE_FILE = __DIR__ . DIRECTORY_SEPARATOR . DIR_STORAGE . DIR_CACHE . CACHE_KEY . FILE_CACHE;
define('CACHE_KEY_CONTEXT', rtrim(strtr(base64_encode(YXORP_HTTP_HOST), '+/=', '._-')));
const EXT_TEXT = 'txt';
const MIME = 'MIME';
const CHAR_SLASH = '/';
const COOKIE_JAR = 'cookie_jar' . CHAR_PERIOD;
const FILE_COOKIE_JAR = COOKIE_JAR . CACHE_KEY . EXT_TEXT;
const VAR_CACHE_STORE = 'CACHE_STORE';
const CHAR_UNDER = '_';
const VAR_TEXT = 'text';
const VAR_HTML = 'html';
const VAR_VAR = 'VAR';
const CHAR_DASH = '-';
const CHAR_HASH = '#';
const CHAR_EQUALS = '=';
const CHAR_ASTRIX = '*';
const CHAR_EMPTY_STRING = '';
const CHAR_PLUS = '+';
const CHAR_SLASH_BACK = '\\';
const CHAR_QUESTION = '?';
const CHAR_AT = '@';
const CHAR_CURVE = '{';
const CHAR_CURVE_CLOSE = '}';
const CHAR_BRACKET = '(';
const CHAR_BRACKET_CLOSE = ')';
const CHAR_S = 's';
const CHAR_SQUARE = '[';
const CHAR_SQUARE_CLOSE = ']';
const CHAR_A = 'a';
const CHAR_Z = 'z';
const CHAR_0 = '0';
const CHAR_9 = '9';
const CHAR_UP = '^';
const CHAR_USD = '$';
const CHAR_I = 'i';
const CHAR_COLON = ':';
const CHAR_EXCLAMATION = '!';
const CHAR_CAP_P = 'P';
const CHAR_ARROW = '<';
const CHAR_ARROW_CLOSE = '>';
const CHAR_COMMA = ',';
const CHAR_2 = '2';
const CHAR_1 = '1';
const CHAR_6 = '6';
const CHAR_3 = '3';
const NUM_ENV_LIMIT = 2;
const EXT_JSON = CHAR_PERIOD . 'json';
const EXT_PHP = CHAR_PERIOD . 'php';
const EXT_ENV = CHAR_PERIOD . 'env';
const EXT_PHAR = CHAR_PERIOD . 'phar';
const VAR_USER = 'user';
const VAR_NAME = 'name';
const VAR_EMAIL = 'email';
const VAR_PASSWORD = 'password';
const VAR_GROUP = 'group';
const VAR_ACTIVE = 'active';
const VAR_APP = 'app';
const VAR_I18N = 'i18n';
const VAR_ROLE = 'role';
const VAR_ADMIN = 'admin';
const VAR_CREATED = '_created';
const VAR_MODIFIED = '_modified';
const VAR_USER_IP = 'user_ip';
const VAR_USER_IP_LONG = 'user_ip_long';
const VAR_URL = 'url';
const VAR_URL_HOST = 'url_host';
const VAR_HTTPS = 'https:' . CHAR_SLASH . CHAR_SLASH;
const VAR_HTTPS_ONLY = 'https';
const VAR_ALLOW_REDIRECTS = 'allow_redirects';
const VAR_HTTP_ERRORS = 'http_errors';
const VAR_DECODE_CONTENT = 'decode_content';
const VAR_VERIFY = 'verify';
const VAR_COOKIES = 'cookies';
const VAR_IDN_CONVERSION = 'idn_conversion';
const VAR_APPLICATION_URLENCODED = 'application/x-www-form-urlencoded';
const VAR_CONTENT_TYPE = 'content-type';
const VAR_CONTENT_LENGTH = 'content-length';
const VAR_TYPE = 'type';
const VAR_ERROR = 'error';
const VAR_CACHE_NAME = 'cache_name';
const VAR_GET_URL = 'getUrl';
const VAR_UCFIRST = 'ucfirst';
const VAR_STRTOLOWER = 'strtolower';
const VAR_HTTP = 'http:';
const VAR_INTERFACE = 'Interface';
const VAR_GETCSV = 'str_getcsv';
const VAR_DOMAIN = 'domain';
const VAR_PATTERN = 'pattern';
const VAR_PATTERN_UP = 'PATTERN';
const VAR_REPLACE = 'replace';
const VAR_CSS = 'css';
const VAR_JS = 'js';
const VAR_SERVER = 'SERVER';
const VAR_PROXY = 'proxy';
const VAR_BUGSNAG = 'bugsnag';
const VAR_RESPONSE = 'RESPONSE';
const VAR_REQUEST = 'REQUEST';
const VAR_SITE_LOGS = 'logs';
const VAR_USERS = 'users';
const VAR_PLUGINS = 'plugins';

const VAR_BUTTON_HOVER = 'buttonhover';
const VAR_BUTTON = 'button';
const VAR_LINK_HOVER = 'linkhover';
const VAR_LINK_VISITED = 'linkvisited';
const VAR_LINK = 'link';
const VAR_HTML_MENU = 'htmlmenu';
const VAR_MENU = 'menu';
const VAR_FOOT_HTML = 'htmlfoot';
const VAR_FOOT = 'footer';
const VAR_HEAD = 'htmlhead';
const VAR_HEAD_HTML = 'headerbanner';
const VAR_MENU_HTML = 'htmlmenu';
const VAR_BG_COLOR = 'bgcolor';
const VAR_BG_IMG = 'background';

const VAR_TARGET = 'TARGET';
const VAR_TARGET_PATTERN = 'TARGET_PATTERN';
const VAR_TARGET_REPLACE = 'TARGET_REPLACE';
const TARGET_BUTTON_HOVER = 'TARGET_BUTTON_HOVER';
const TARGET_BUTTON = 'TARGET_BUTTON';
const TARGET_LINK_HOVER = 'TARGET_LINK_HOVER';
const TARGET_LINK_VISITED = 'TARGET_LINK_VISITED';
const TARGET_LINK = 'TARGET_LINK';
const TARGET_HTML_MENU = 'TARGET_HTML_MENU';
const TARGET_MENU = 'TARGET_MENU';
const TARGET_FOOT_HTML = 'TARGET_FOOT_HTML';
const TARGET_FOOT = 'TARGET_FOOT';
const TARGET_HEAD = 'TARGET_HEAD';
const TARGET_HEAD_HTML = 'TARGET_HEAD_HTML';
const TARGET_MENU_HTML = 'TARGET_MENU_HTML';
const TARGET_BG_COLOR = 'TARGET_BG_COLOR';
const TARGET_BG_IMG = 'TARGET_BG_IMG';
const TARGET_JS = 'TARGET_JS';
const TARGET_CSS = 'TARGET_CSS';

const VAR_SITE = 'SITE';
const VAR_HOST = 'HOST';
const VAR_INSTALL = 'INSTALL';
const VAR_INC = 'INC';
const VAR_REPLACE_UP = 'REPLACE';
const VAR_REWRITE = 'REWRITE';
const VAR_SEARCH = 'SEARCH';
const VAR_FILES = 'files';
const VAR_PHP = 'PHP';
const VAR_SELF = 'SELF';
const VAR_NAME_UP = 'NAME';
const VAR_URL_UP = 'URL';
const VAR_PARSE_UP = 'PARSE';
const VAR_URI = 'URI';
const VAR_SUB = 'SUB';
const VAR_DOMAIN_UP = 'DOMAIN';
const VAR_DIR = 'DIR';
const VAR_FULL = 'FULL';
const VAR_HTTPS_UP = 'HTTPS';
const VAR_HTTP_UP = 'HTTP';
const VAR_METHOD = 'METHOD';
const VAR_REMOTE = 'REMOTE';
const VAR_ADDR = 'ADDR';
const VAR_EVENT = 'EVENT';
const VAR_MIME = 'mime';
const VAR_TYPES = 'TYPES';
const VAR_LIST = 'LIST';
const VAR_GLOBAL_UP = 'GLOBAL';
const VAR_GLOBALS = 'GLOBALS';
const VAR_GLOBAL = 'global';
const VAR_VALUE = 'value';
const SITE_DETAILS = 'SITE_DETAILS';
const SITE_DETAILS_GLOBAL = 'SITE_DETAILS_GLOBAL';
const SITE_DOMAIN = 'SITE_DOMAIN';
const SITE_DOMAIN_SUB = 'SITE_DOMAIN_SUB';
const SUFFIX_LIST = 'SUFFIX_LIST';
const VAR_CONTENT = 'content';
const VAR_DASH_LOWER = CHAR_DASH . CHAR_UNDER;
const VAR_TEXT_HTML = VAR_TEXT . CHAR_SLASH . VAR_HTML;
const VAR_VAR_UNDER = CHAR_UNDER . VAR_VAR;
const VAR_VAR_UNDER_END = CHAR_UNDER . VAR_VAR . CHAR_UNDER;
const YXORP_APP = YXORP . CHAR_UNDER . VAR_APP;
const YXORP_SITE_SYSTEM = 'system';
const YXORP_CONTENT = YXORP . CHAR_UNDER . VAR_CONTENT;
const YXORP_SITE_SYSTEM_LOGS = YXORP_SITE_SYSTEM . CHAR_SLASH . VAR_SITE_LOGS;
const YXORP_SITE_SYSTEM_USERS = YXORP_SITE_SYSTEM . CHAR_SLASH . VAR_USERS;
const SITE_CONTENT = 'content';
const SITE_SINGLETONS = 'singletons';
const SITE_MODULE = '_model';
const SITE_SETTINGS = 'settings';
const SITE_VAL = 'val';
const SITE_SITES = 'sites';
const SITE_COLLECTIONS = 'collections';
const SITE_HOST = 'host';
const SITE_NAME = 'name';
const SITE_TARGET = 'target';
const DIR_ACTION = 'action' . DIRECTORY_SEPARATOR;
const DIR_PARSER = 'parser' . DIRECTORY_SEPARATOR;
const DIR_PLUGIN = 'plugin' . DIRECTORY_SEPARATOR;
const DIR_OVERRIDE = 'override' . DIRECTORY_SEPARATOR;
const DIR_GLOBAL = VAR_GLOBAL . DIRECTORY_SEPARATOR;
const DIR_INSTALL = 'install' . DIRECTORY_SEPARATOR;
const DIR_ACCOUNTS = VAR_USERS . DIRECTORY_SEPARATOR;
const DIR_VENDOR = 'vendor' . DIRECTORY_SEPARATOR;
const DIR_DATA = 'data' . DIRECTORY_SEPARATOR;
const DIR_HTTP = 'http' . DIRECTORY_SEPARATOR;
const DIR_MINIFY = 'minify' . DIRECTORY_SEPARATOR;
const DIR_BUGSNAG = 'snag' . DIRECTORY_SEPARATOR;
const DIR_PROXY = 'proxy' . DIRECTORY_SEPARATOR;
const DIR_PSR = 'psr' . DIRECTORY_SEPARATOR;
const DIR_DEBUG = 'debug' . DIRECTORY_SEPARATOR;
const EVENT_BUILD_CACHE = 'request' . CHAR_PERIOD . 'build_cached';
const EVENT_BUILD_CONTEXT = 'request' . CHAR_PERIOD . 'build_context';
const EVENT_BUILD_INCLUDES = 'request' . CHAR_PERIOD . 'build_includes';
const EVENT_BUILD_HEADERS = 'request' . CHAR_PERIOD . 'build_headers';
const EVENT_BUILD_REQUEST = 'request' . CHAR_PERIOD . 'build_request';
const EVENT_BEFORE_SEND = 'request' . CHAR_PERIOD . 'before_send';
const EVENT_SEND = 'request' . CHAR_PERIOD . 'send';
const EVENT_SENT = 'request' . CHAR_PERIOD . 'sent';
const EVENT_COMPLETE = 'request' . CHAR_PERIOD . 'complete';
const EVENT_FINAL = 'request' . CHAR_PERIOD . 'final';
const EVENT_EXCEPTION = 'request' . CHAR_PERIOD . 'build_exception';
const EVENT_WRITE = 'curl' . CHAR_PERIOD . 'callback' . CHAR_PERIOD . 'write';
const FILE_REWRITE = 'rewrite' . EXT_JSON;
const FILE_INDEX = 'index' . EXT_PHP;
const FILE_WRAPPER = 'wrapper' . EXT_PHP;
const FILE_SITE_BOOTSTRAP = 'bootstrap' . EXT_PHP;
const FILE_MIME_TYPES = VAR_MIME . EXT_JSON;
const FILE_PROXY = VAR_PROXY . EXT_PHAR;
const FILE_BUGSNAG = VAR_BUGSNAG . EXT_PHAR;
const FILE_TLDS_ALPHA_BY_DOMAIN = 'tlds-alpha-by-domain.txt';
const FILE_PUBLIC_SUFFIX_LIST = 'public_suffix_list.dat';
const SUBSCRIBE_METHOD = 'subscribe';
const YXORP_ACTIONS = 'YXORP_ACTIONS';
const YXORP_EVENT_LIST = VAR_EVENT . CHAR_UNDER . VAR_LIST;
const YXORP_MIME_TYPES = VAR_MIME . CHAR_UNDER . VAR_TYPES;
const YXORP_REWRITE = VAR_INC . CHAR_UNDER . VAR_REWRITE;
const YXORP_SITE_SYSTEM_INSTALL = VAR_APP . CHAR_UNDER . VAR_INSTALL;
const YXORP_PHP_SELF = VAR_PHP . CHAR_UNDER . VAR_SELF;
const YXORP_REQUEST_METHOD = VAR_REQUEST . CHAR_UNDER . VAR_METHOD;
const YXORP_HTTP_ = VAR_HTTPS_UP . CHAR_UNDER;
const YXORP_REMOTE_ADDR = VAR_REMOTE . CHAR_UNDER . VAR_ADDR;
const YXORP_TARGET_PLUGINS = 'TARGET_PLUGINS';
const YXORP_TARGET_JS = 'TARGET_JS';
const YXORP_TARGET_CSS = 'TARGET_CSS';
const YXORP_GLOBAL_REPLACE = VAR_GLOBAL_UP . CHAR_UNDER . VAR_REPLACE;
const YXORP_GLOBAL_CSS = VAR_GLOBAL_UP . CHAR_UNDER . VAR_CSS;
const YXORP_GLOBAL_JS = VAR_GLOBAL_UP . CHAR_UNDER . VAR_JS;
const YXORP_GLOBAL_PATTERN = VAR_GLOBAL_UP . CHAR_UNDER . VAR_PATTERN;
const REG_ONE = CHAR_SLASH . CHAR_SLASH_BACK . CHAR_QUESTION . CHAR_PERIOD . CHAR_ASTRIX . CHAR_SLASH;
const REG_TWO = CHAR_HASH . CHAR_PERIOD . CHAR_ASTRIX . CHAR_SLASH;
const REG_THREE = CHAR_AT . CHAR_CURVE . CHAR_BRACKET . CHAR_SQUARE . CHAR_A . CHAR_DASH . CHAR_Z . CHAR_0 . CHAR_DASH . CHAR_9 . CHAR_UNDER . CHAR_SQUARE_CLOSE . CHAR_PLUS . CHAR_BRACKET_CLOSE . CHAR_CURVE_CLOSE . CHAR_AT . CHAR_S;
const REG_FOUR = CHAR_SLASH_BACK . CHAR_ASTRIX;
const REG_FIVE = CHAR_PERIOD . CHAR_ASTRIX;
const REG_SIX = CHAR_SLASH_BACK . CHAR_QUESTION;
const REG_SEVEN = CHAR_HASH . CHAR_UP;
const REG_EIGHT = CHAR_HASH . CHAR_UP . VAR_HTTPS_ONLY . CHAR_QUESTION . CHAR_COLON . CHAR_HASH . CHAR_I;
const REG_NINE = CHAR_HASH . CHAR_SLASH . CHAR_SQUARE . CHAR_UP . CHAR_SLASH . CHAR_SQUARE_CLOSE . CHAR_ASTRIX . CHAR_USD . CHAR_HASH;
const REG_TEN = CHAR_HASH . CHAR_SLASH . CHAR_QUESTION . CHAR_EXCLAMATION . CHAR_SLASH_BACK . CHAR_PERIOD . CHAR_SLASH_BACK . CHAR_PERIOD . CHAR_BRACKET_CLOSE . CHAR_SQUARE . CHAR_UP . CHAR_SLASH . CHAR_SQUARE_CLOSE . CHAR_PLUS . CHAR_SLASH . CHAR_SLASH_BACK . CHAR_PERIOD . CHAR_SLASH_BACK . CHAR_PERIOD . CHAR_SLASH . CHAR_HASH;
const REG_ELEVEN = CHAR_HASH . CHAR_BRACKET . CHAR_SLASH . CHAR_SLASH_BACK . CHAR_PERIOD . CHAR_QUESTION . CHAR_SLASH . CHAR_BRACKET_CLOSE . CHAR_HASH;
const REG_TWELVE = CHAR_SLASH . CHAR_BRACKET . CHAR_QUESTION . CHAR_CAP_P . CHAR_ARROW . VAR_DOMAIN . CHAR_ARROW_CLOSE . CHAR_SQUARE . CHAR_A . CHAR_DASH . CHAR_Z . CHAR_0 . CHAR_DASH . CHAR_9 . CHAR_SQUARE_CLOSE . CHAR_SQUARE . CHAR_A . CHAR_DASH . CHAR_Z . CHAR_0 . CHAR_DASH . CHAR_9 . CHAR_SLASH_BACK . CHAR_DASH . CHAR_SQUARE_CLOSE . CHAR_CURVE . CHAR_1 . CHAR_COMMA . CHAR_6 . CHAR_3 . CHAR_CURVE_CLOSE . CHAR_SLASH_BACK . CHAR_PERIOD . CHAR_SQUARE . CHAR_A . CHAR_DASH . CHAR_Z . CHAR_PERIOD . CHAR_SQUARE_CLOSE . CHAR_CURVE . CHAR_2 . CHAR_COMMA . CHAR_6 . CHAR_CURVE_CLOSE . CHAR_BRACKET_CLOSE . CHAR_USD . CHAR_SLASH . CHAR_I;
const ENV_ADMIN_USER = 'SITE_USER' . EXT_ENV;
const ENV_ADMIN_NAME = 'SITE_NAME' . EXT_ENV;
const ENV_ADMIN_EMAIL = 'SITE_EMAIL' . EXT_ENV;
const ENV_ADMIN_PASSWORD = 'SITE_PASSWORD' . EXT_ENV;
const ENV_GA_UTM = 'GA_UTM' . EXT_ENV;
const ENV_BUGSNAG_KEY = 'BUGSNAG_KEY' . EXT_ENV;
const ENV_DEBUG = 'DEBUG' . EXT_ENV;
const ENV_DEFAULT_HOST = 'DEFAULT_HOST' . EXT_ENV;
const ENV_DEFAULT_TARGET = 'DEFAULT_TARGET' . EXT_ENV;
const RUNTIME_EXCEPTION = 'Directory "%s" was not created';
const ACCESS_DENIED_EXCEPTION = 'Error: Access denied!';
const ACCESS_ALREADY_DEFINED = 'Argument already exists and cannot be redefined!';

/**
 * It's defining a constant called `DIR_ROOT` and setting it to the value of `$root` with a `DIRECTORY_SEPARATOR`
 * appended to it.
 * It's defining a constant called `PATH_SITE_BOOTSTRAP` and setting it to the value of `DIR_ROOT` with a
 * `DIR_LIB` and `DIR_APP` and `FILE_SITE_BOOTSTRAP` appended to it.
 */
define('PATH_SITE_BOOTSTRAP', DIR_ROOT . DIR_APP . FILE_SITE_BOOTSTRAP);
/**
 * It's defining a constant called `PATH_COOKIE_JAR` and setting it to the value of `DIR_ROOT` with a
 * `DIR_LIB` and `DIR_DATA` and `FILE_COOKIE_JAR` appended to it.
 */
define('PATH_COOKIE_JAR', DIR_ROOT . DIR_APP . DIR_LIB . DIR_DATA . FILE_COOKIE_JAR);
/**
 * It's defining a constant called `PATH_DIR_APP` and setting it to the value of `DIR_ROOT` with a `DIR_LIB` and `DIR_APP` appended to it.
 */
define('PATH_DIR_APP', DIR_ROOT . DIR_APP);
/**
 * It's defining a constant called `PATH_SITE_LOCAL` and setting it to the value of `DIR_ROOT` with a
 * `DIR_INSTALL` and `DIR_APP` appended to it.
 */
define('PATH_SITE_LOCAL', DIR_ROOT . DIR_APP . DIR_LIB . DIR_INSTALL . DIR_APP);
/**
 * It's defining a constant called `PATH_SITE_INDEX` and setting it to the value of `DIR_ROOT` with a `DIR_LIB` and `DIR_APP` and `FILE_INDEX` appended to it.
 */
define('PATH_SITE_INDEX', DIR_ROOT . DIR_APP . FILE_INDEX);
/**
 * It's defining a constant called `PATH_REWRITE` and setting it to the value of `DIR_ROOT` with a  `DIR_LIB` and `DIR_DATA` and `FILE_REWRITE` appended to it.
 */
define('PATH_REWRITE', DIR_ROOT . DIR_APP . DIR_LIB . DIR_DATA . FILE_REWRITE);
/**
 * Defining a constant.
 */
define('PATH_TLDS_ALPHA_BY_DOMAIN', DIR_ROOT . DIR_APP . DIR_LIB . DIR_DATA . FILE_TLDS_ALPHA_BY_DOMAIN);
/**
 * Defining a constant called PATH_PUBLIC_SUFFIX_LIST. The value of the constant is the directory root, the
 * application directory, the library directory, the data directory, and the public suffix list file.
 */
define('PATH_PUBLIC_SUFFIX_LIST', DIR_ROOT . DIR_APP . DIR_LIB . DIR_DATA . FILE_PUBLIC_SUFFIX_LIST);
/**
 * Defining a constant called PATH_FILE_MIME_TYPES. The value of the constant is the directory root, the
 * application directory, the library directory, the data directory, and the file mime types.
 */
const PATH_FILE_MIME_TYPES = DIR_ROOT . DIR_APP . DIR_LIB . DIR_DATA . FILE_MIME_TYPES;
define('CACHE_EXPIRATION', @time() + (60 * 60 * 24 * 31 * 365));
