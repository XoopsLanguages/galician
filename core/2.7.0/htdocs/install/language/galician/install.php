<?php
/**
 * Installer main english strings declaration file
 *
 * @copyright    (c) 2000-2026 XOOPS Project (https://xoops.org)
 * @license          GNU GPL 2.0 or later (https://www.gnu.org/licenses/gpl-2.0.html)
 * @package          installer
 * @since            2.3.0
 * @author           Haruki Setoyama  <haruki@planewave.org>
 * @author           Kazumi Ono <webmaster@myweb.ne.jp>
 * @author           Skalpa Keo <skalpa@xoops.org>
 * @author           Taiwen Jiang <phppp@users.sourceforge.net>
 * @author           dugris <dugris@frxoops.org>
 */
// _LANGCODE: gl
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team
define('SHOW_HIDE_HELP', 'Mostrar/ocultar texto de axuda');
// License
//define('LICENSE_NOT_WRITEABLE', 'O ficheiro de licenza "%s" NON se pode escribir!');
//define('LICENSE_IS_WRITEABLE', '%s A licenza pódese escribir.');
// Configuration check page
define('SERVER_API', 'API do servidor');
define('PHP_EXTENSION', '%s extensión');
define('CHAR_ENCODING', 'Codificación de caracteres');
define('XML_PARSING', 'Análise XML');
define('REQUIREMENTS', 'Requisitos');
define('_PHP_VERSION', 'Versión PHP');
define('RECOMMENDED_SETTINGS', 'Configuración recomendada');
define('RECOMMENDED_EXTENSIONS', 'Extensións recomendadas');
define('SETTING_NAME', 'Nome da configuración');
define('RECOMMENDED', 'Recomendado');
define('CURRENT', 'Actual');
define('RECOMMENDED_EXTENSIONS_MSG', 'Estas extensións non son necesarias para o uso normal, pero poden ser necesarias para explorar
 algunhas funcións específicas (como a compatibilidade con varios idiomas ou RSS). Polo tanto, recoméndase telos instalados.');
define('NONE', 'Ningún');
define('SUCCESS', 'Éxito');
define('WARNING', 'Aviso');
define('FAILED', 'Fallado');
// Titles (main and pages)
define('XOOPS_INSTALL_WIZARD', 'Asistente de instalación de XOOPS');
define('LANGUAGE_SELECTION', 'Selección de idioma');
define('LANGUAGE_SELECTION_TITLE', 'Seleccione o seu idioma');        // L128
define('INTRODUCTION', 'Introdución');
define('INTRODUCTION_TITLE', 'Benvido ao Asistente de instalación de XOOPS');        // L0
define('CONFIGURATION_CHECK', 'Comprobación de configuración');
define('CONFIGURATION_CHECK_TITLE', 'Comprobación da configuración do servidor');
define('PATHS_SETTINGS', 'Configuración de rutas');
define('PATHS_SETTINGS_TITLE', 'Configuración de rutas');
define('DATABASE_CONNECTION', 'Conexión á base de datos');
define('DATABASE_CONNECTION_TITLE', 'Conexión á base de datos');
define('DATABASE_CONFIG', 'Configuración da base de datos');
define('DATABASE_CONFIG_TITLE', 'Configuración da base de datos');
define('CONFIG_SAVE', 'Gardar configuración');
define('CONFIG_SAVE_TITLE', 'Gardando a configuración do sistema');
define('TABLES_CREATION', 'Creación de táboas');
define('TABLES_CREATION_TITLE', 'Creación de táboas de base de datos');
define('INITIAL_SETTINGS', 'Configuración inicial');
define('INITIAL_SETTINGS_TITLE', 'Introduza a súa configuración inicial');
define('DATA_INSERTION', 'Inserción de datos');
define('DATA_INSERTION_TITLE', 'Gardando a súa configuración na base de datos');
define('WELCOME', 'Benvido');
define('WELCOME_TITLE', 'Benvido ao teu sitio XOOPS');        // L0
// Settings (labels and help text)
define('XOOPS_PATHS', 'Rutas físicas de XOOPS');
define('XOOPS_URLS', 'Localizacións web');
define('XOOPS_ROOT_PATH_LABEL', 'XOOPS documentos de ruta física raíz');
define('XOOPS_ROOT_PATH_HELP', 'Ruta física ao directorio de documentos XOOPS (servidos) SEN barra diagonal final');
define('XOOPS_LIB_PATH_LABEL', 'XOOPS directorio da biblioteca');
define('XOOPS_LIB_PATH_HELP', 'Physical path to the XOOPS library directory WITHOUT trailing slash, for forward compatibility. Locate the folder out of ' . XOOPS_ROOT_PATH_LABEL . ' to make it secure.');
define('XOOPS_DATA_PATH_LABEL', 'XOOPS directorio de ficheiros de datos');
define('XOOPS_DATA_PATH_HELP', 'Physical path to the XOOPS data files (writable) directory WITHOUT trailing slash, for forward compatibility. Locate the folder out of ' . XOOPS_ROOT_PATH_LABEL . ' to make it secure.');
define('XOOPS_URL_LABEL', 'Localización do sitio web (URL)'); // L56
define('XOOPS_URL_HELP', 'URL principal que se utilizará para acceder á súa instalación XOOPS'); // L58
define('LEGEND_CONNECTION', 'Conexión ao servidor');
define('LEGEND_DATABASE', 'Base de datos'); // L51
define('DB_HOST_LABEL', 'Nome de host do servidor');    // L27
define('DB_HOST_HELP', 'Nome de host do servidor de base de datos. Se non estás seguro, <em>localhost</em> funciona na maioría dos casos'); // L67
define('DB_USER_LABEL', 'Nome de usuario');    // L28
define('DB_USER_HELP', 'Nome da conta de usuario que se utilizará para conectarse ao servidor de base de datos'); // L65
define('DB_PASS_LABEL', 'Contrasinal');    // L52
define('DB_PASS_HELP', 'Contrasinal da súa conta de usuario da base de datos'); // L68
define('DB_NAME_LABEL', 'Nome da base de datos');    // L29
define('DB_NAME_HELP', 'O nome da base de datos no servidor. O instalador tentará crear a base de datos se non existe'); // L64
define('DB_CHARSET_LABEL', 'Conxunto de caracteres da base de datos');
define('DB_CHARSET_HELP', 'MySQL inclúe compatibilidade con conxuntos de caracteres que lle permite almacenar datos mediante unha variedade de conxuntos de caracteres e realizar comparacións segundo unha variedade de clasificacións.');
define('DB_COLLATION_LABEL', 'Colación da base de datos');
define('DB_COLLATION_HELP', 'Unha intercalación é un conxunto de regras para comparar caracteres dun conxunto de caracteres.');
define('DB_PREFIX_LABEL', 'Prefixo de táboa');    // L30
define('DB_PREFIX_HELP', 'Este prefixo engadirase a todas as táboas novas creadas para evitar conflitos de nomes na base de datos. Se non estás seguro, mantén o valor predeterminado'); // L63
define('DB_PCONNECT_LABEL', 'Usar conexión persistente');    // L54
define('DB_PCONNECT_HELP', "O predeterminado é \"Non\". Déixao en branco se non estás seguro"); // L69
define('DB_DATABASE_LABEL', 'Base de datos');
define('LEGEND_ADMIN_ACCOUNT', 'Conta de administrador');
define('ADMIN_LOGIN_LABEL', 'Inicio de sesión do administrador'); // L37
define('ADMIN_EMAIL_LABEL', 'Correo electrónico do administrador'); // L38
define('ADMIN_PASS_LABEL', 'Contrasinal do administrador'); // L39
define('ADMIN_CONFIRMPASS_LABEL', 'Confirmar contrasinal'); // L74
// Buttons
define('BUTTON_PREVIOUS', 'Anterior'); // L42
define('BUTTON_NEXT', 'Continuar'); // L47
// Messages
define('XOOPS_FOUND', '%s atopado');
define('CHECKING_PERMISSIONS', 'Comprobando permisos de ficheiros e directorios...'); // L82
define('IS_NOT_WRITABLE', '%s NON se pode escribir.'); // L83
define('IS_WRITABLE', '%s pódese escribir.'); // L84
define('XOOPS_PATH_FOUND', 'Atopouse o camiño.');
//define('READY_CREATE_TABLES', 'Non se detectaron táboas XOOPS.<br>O instalador xa está preparado para crear as táboas do sistema XOOPS.');
define('XOOPS_TABLES_FOUND', 'As táboas do sistema XOOPS xa existen na súa base de datos.'); // L131
define('XOOPS_TABLES_CREATED', 'XOOPS creáronse as táboas do sistema.');
//define('READY_INSERT_DATA', 'O instalador está agora preparado para inserir os datos iniciais na súa base de datos.');
//define('READY_SAVE_MAINFILE', 'Agora o instalador está listo para gardar a configuración especificada en <em>mainfile.php</em>.');
define('SAVED_MAINFILE', 'Configuración gardada');
define('SAVED_MAINFILE_MSG', 'O instalador gardou a configuración especificada en <em>mainfile.php</em> e <em>secure.php</em>.');
define('DATA_ALREADY_INSERTED', 'XOOPS datos atopados na base de datos.');
define('DATA_INSERTED', 'Os datos iniciais foron insertados na base de datos.');
// %s is database name
define('DATABASE_CREATED', 'Base de datos %s creada!'); // L43
// %s is table name
define('TABLE_NOT_CREATED', 'Non se puido crear a táboa %s'); // L118
define('TABLE_CREATED', 'Creouse a táboa %s.'); // L45
define('ROWS_INSERTED', '%d entradas inseridas na táboa %s.'); // L119
define('ROWS_FAILED', 'Produciuse un erro ao inserir as entradas %d na táboa %s.'); // L120
define('TABLE_ALTERED', 'Actualizouse a táboa %s.'); // L133
define('TABLE_NOT_ALTERED', 'Produciuse un erro ao actualizar a táboa %s.'); // L134
define('TABLE_DROPPED', 'Cayó a táboa %s.'); // L163
define('TABLE_NOT_DROPPED', 'Produciuse un erro ao eliminar a táboa %s.'); // L164
// Error messages
define('ERR_COULD_NOT_ACCESS', 'Non se puido acceder ao cartafol especificado. Verifique que existe e que o servidor poida leer.');
define('ERR_NO_XOOPS_FOUND', 'Non se puido atopar ningunha instalación de XOOPS no cartafol especificado.');
define('ERR_INVALID_EMAIL', 'Correo electrónico non válido'); // L73
define('ERR_REQUIRED', 'A información é obrigatoria.'); // L41
define('ERR_PASSWORD_MATCH', 'Os dous contrasinais non coinciden');
define('ERR_NEED_WRITE_ACCESS', 'O servidor debe ter acceso de escritura aos seguintes ficheiros e cartafoles<br>(é dicir, <em>chmod 775 nome_directorio</em> nun servidor UNIX/LINUX)<br>Se non están dispoñibles ou non se crean correctamente, cree manualmente e configure os permisos adecuados.');
define('ERR_NO_DATABASE', 'Non se puido crear a base de datos. Póñase en contacto co administrador do servidor para obter máis información.'); // L31
define('ERR_NO_DBCONNECTION', 'Non se puido conectar ao servidor da base de datos.'); // L106
define('ERR_WRITING_CONSTANT', 'Produciuse un erro ao escribir a constante %s.'); // L122
define('ERR_COPY_MAINFILE', 'Non se puido copiar o ficheiro de distribución a %s');
define('ERR_WRITE_MAINFILE', 'Non se puido escribir en %s. Comproba o permiso do ficheiro e téntao de novo.');
define('ERR_READ_MAINFILE', 'Non se puido abrir %s para ler');
define('ERR_INVALID_DBCHARSET', "Non se admite o conxunto de caracteres '%s'.");
define('ERR_INVALID_DBCOLLATION', "Non se admite a intercalación '%s'.");
define('ERR_CHARSET_NOT_SET', 'O conxunto de caracteres predeterminado non está definido para a base de datos XOOPS.');
define('_INSTALL_CHARSET', 'UTF-8');
define('SUPPORT', 'Soporte');
define('LOGIN', 'Autenticación');
define('LOGIN_TITLE', 'Autenticación');
define('USER_LOGIN', 'Inicio de sesión do administrador');
define('USERNAME', 'Nome de usuario:');
define('PASSWORD', 'Contrasinal :');
define('ICONV_CONVERSION', 'Conversión do conxunto de caracteres');
define('ZLIB_COMPRESSION', 'Compresión Zlib');
define('IMAGE_FUNCTIONS', 'Funcións de imaxe');
define('IMAGE_METAS', 'Metadatos da imaxe (exif)');
define('FILTER_FUNCTIONS', 'Funcións de filtro');
define('ADMIN_EXIST', 'A conta de administrador xa existe.');
define('CONFIG_SITE', 'Configuración do sitio');
define('CONFIG_SITE_TITLE', 'Configuración do sitio');
define('MODULES', 'Instalación de módulos');
define('MODULES_TITLE', 'Instalación de módulos');
define('THEME', 'Seleccionar tema');
define('THEME_TITLE', 'Seleccione o tema predeterminado');
define('INSTALLED_MODULES', 'Os seguintes módulos foron instalados.');
define('NO_MODULES_FOUND', 'Non se atoparon módulos.');
define('NO_INSTALLED_MODULES', 'Non se instalou ningún módulo.');
define('THEME_NO_SCREENSHOT', 'Non se atopou ningún captura de pantalla');
define('IS_VALOR', ' => ');
// password message
define('PASSWORD_LABEL', 'Fortaleza do contrasinal');
define('PASSWORD_DESC', 'O contrasinal non foi introducido');
define('PASSWORD_GENERATOR', 'Xerador de contrasinais');
define('PASSWORD_GENERATE', 'Xerar');
define('PASSWORD_COPY', 'Copiar');
define('PASSWORD_VERY_WEAK', 'Moi débil');
define('PASSWORD_WEAK', 'Débil');
define('PASSWORD_BETTER', 'Mellor');
define('PASSWORD_MEDIUM', 'Medio');
define('PASSWORD_STRONG', 'Forte');
define('PASSWORD_STRONGEST', 'Máis forte');
//2.5.7
define('WRITTEN_LICENSE', 'Escribiu XOOPS %s Clave de licenza: <strong>%s</strong>');
//2.5.8
define('CHMOD_CHGRP_REPEAT', 'Tentar de novo');
define('CHMOD_CHGRP_IGNORE', 'Usar de todos modos');
define('CHMOD_CHGRP_ERROR', 'É posible que o instalador non poida escribir o ficheiro de configuración %1$s.<p>PHP está a escribir ficheiros no usuario %2$s e no grupo %3$s.<p>O directorio %4$s/ ten o usuario %5$s e o grupo %6$s');
//2.5.9
define("CURL_HTTP", "Biblioteca URL do cliente (cURL)");
define('XOOPS_COOKIE_DOMAIN_LABEL', 'Dominio de cookies para o sitio web');
define('XOOPS_COOKIE_DOMAIN_HELP', 'Dominio para configurar cookies. Pode estar en branco, o host completo do URL (www.example.com) ou o dominio rexistrado sen subdominios (example.com) para compartir entre subdominios (www.example.com e blog.example.com).');
define('INTL_SUPPORT', 'Funcións de internacionalización');
define('XOOPS_SOURCE_CODE', "XOOPS en GitHub");
define('XOOPS_INSTALLING', 'Instalando');
define('XOOPS_ERROR_ENCOUNTERED', 'Erro');
define('XOOPS_ERROR_SEE_BELOW', 'Ver a continuación para mensaxes.');
define('MODULES_AVAILABLE', 'Módulos dispoñibles');
define('INSTALL_THIS_MODULE', 'Engadir %s');
//2.5.11
define('ERR_COPY_CONFIG_FILE', 'Non se puido copiar o ficheiro de configuración %s');
//2.7.0
// website name and slogan
define('_WEBSITE_NAME', 'XOOPS Sitio');
define('_WEBSITE_SLOGAN', 'Só usalo!');
define('_WEBSITE_META_KEYWORDS', 'xoops, framework de aplicacións web, cms, sistema de xestión de contidos');
define('_WEBSITE_FOOTER', "Desenvolvido por XOOPS © 2001-{X_YEAR} <a href='https://xoops.org' rel='external' title='The XOOPS Project'>The XOOPS Project</a>");
define('_WEBSITE_COPYRIGHT', 'Copyright © 2001-{X_YEAR}');
define('_WEBSITE_DESCRIPTION', 'XOOPS é un script de portal de código aberto dinámico e orientado a obxectos escrito en PHP.');
define('_WEBSITE_CENSOR_REPLACE', 'OOPS');
