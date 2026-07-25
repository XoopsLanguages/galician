<?php
// _LANGCODE: gl
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team

define('LEGEND_XOOPS_PATHS', 'Rutas físicas de XOOPS');
define('LEGEND_DATABASE', 'Conxunto de caracteres da base de datos');

define('XOOPS_LIB_PATH_LABEL', 'XOOPS directorio da biblioteca');
define('XOOPS_LIB_PATH_HELP', 'Physical path to the XOOPS library directory WITHOUT trailing slash, for forward compatibility. Locate the folder out of ' . XOOPS_ROOT_PATH . ' to make it secure.');
define('XOOPS_DATA_PATH_LABEL', 'XOOPS directorio de ficheiros de datos');
define('XOOPS_DATA_PATH_HELP', 'Physical path to the XOOPS datafiles (writable) directory WITHOUT trailing slash, for forward compatibility. Locate the folder out of ' . XOOPS_ROOT_PATH . ' to make it secure.');

define('DB_COLLATION_LABEL', 'Conxunto de caracteres da base de datos e intercalación');
define('DB_COLLATION_HELP', "A partir do 4.12 MySQL admite o conxunto de caracteres personalizados e a intercalación. Non obstante, é máis complexo do esperado, polo que NON fagas ningún cambio a menos que confíes na túa elección.");
define('DB_COLLATION_NOCHANGE', 'Non cambiar');

define('XOOPS_PATH_FOUND', 'Atopouse o camiño.');
define('ERR_COULD_NOT_ACCESS', 'Non se puido acceder ao cartafol especificado. Verifique que existe e que o servidor poida leer.');
define('CHECKING_PERMISSIONS', 'Comprobando permisos de ficheiros e directorios...');
define('ERR_NEED_WRITE_ACCESS', 'O servidor debe ter acceso de escritura aos seguintes ficheiros e cartafol<br> (é dicir, <em>chmod 777 nome_directorio</em> nun servidor UNIX/LINUX)');
define('IS_NOT_WRITABLE', '%s NON se pode escribir.');
define('IS_WRITABLE', '%s pódese escribir.');
define('ERR_COULD_NOT_WRITE_MAINFILE', 'Produciuse un erro ao escribir contido en mainfile.php, escriba o contido en mainfile.php manualmente.');
