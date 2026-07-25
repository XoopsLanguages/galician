<?php
// mymenu
define('_MD_A_MYMENU_MYTPLSADMIN','');
define('_MD_A_MYMENU_MYBLOCKSADMIN','Permisos');
define('_MD_A_MYMENU_MYPREFERENCES','Preferencias');
// index.php
define('_AM_TH_DATETIME', 'Hora');
define('_AM_TH_USER', 'Usuario');
define('_AM_TH_IP', 'IP');
define('_AM_TH_AGENT', 'AGENT');
define('_AM_TH_TYPE', 'Tipo');
define('_AM_TH_DESCRIPTION', 'Descrición');
define('_AM_TH_BADIPS','IP incorrectas<br><br><span style="font-weight:normal;">Escribe cada IP unha liña<br>en branco significa que todas as IP están permitidas</span>');
define('_AM_TH_GROUP1IPS','IPs permitidas para o grupo=1<br><br><span style="font-weight:normal;">Escribe cada IP unha liña.<br>192.168. significa 192.168.*<br>blank significa que todas as IP están permitidas</span>');
define('_AM_LABEL_COMPACTLOG', 'Rexistro compacto');
define('_AM_BUTTON_COMPACTLOG', 'Compactar!');
define('_AM_JS_COMPACTLOGCONFIRM', 'Eliminaranse os rexistros duplicados (IP, Tipo).');
define('_AM_LABEL_REMOVEALL', 'Eliminar todos os rexistros');
define('_AM_BUTTON_REMOVEALL', 'Eliminar todo!');
define('_AM_JS_REMOVEALLCONFIRM', 'Todos os rexistros son eliminados absolutamente. Estás realmente ben?');
define('_AM_LABEL_REMOVE', 'Elimina os rexistros marcados:');
define('_AM_BUTTON_REMOVE', 'Eliminar!');
define('_AM_JS_REMOVECONFIRM', 'Eliminar OK?');
define('_AM_MSG_IPFILESUPDATED', 'Actualizáronse os ficheiros de IP');
define('_AM_MSG_BADIPSCANTOPEN', 'Non se pode abrir o ficheiro de IP incorrecto');
define('_AM_MSG_GROUP1IPSCANTOPEN', 'Non se pode abrir o ficheiro para permitir o grupo=1');
define('_AM_MSG_REMOVED', 'Os rexistros foron eliminados');
define('_AM_MSG_DELFAILED', 'Non se puideron eliminar os rexistros');
define('_AM_FMT_CONFIGSNOTWRITABLE', 'Activa o directorio de configuracións escribible: %s');
// prefix_manager.php
define('_AM_H3_PREFIXMAN', 'Xestor de prefixos');
define('_AM_MSG_DBUPDATED', 'Base de datos actualizada correctamente!');
define('_AM_CONFIRM_DELETE', 'Eliminaranse todos os datos. OK?');
define('_AM_TXT_HOWTOCHANGEDB',"Se queres cambiar o prefixo,<br> edite %s/data/secure.php manualmente.<br><br>define('XOOPS_DB_PREFIX', '<b>%s</b>');");
// advisory.php
define('_AM_ADV_NOTSECURE', 'Non é seguro');
define('_AM_ADV_TRUSTPATHPUBLIC', 'Se podes ver unha imaxe -NG- ou a ligazón volve á páxina normal, o teu XOOPS_TRUST_PATH non está colocado correctamente. O mellor lugar para XOOPS_TRUST_PATH está fóra de DocumentRoot. Se non podes facelo, tes que poñer .htaccess (DENY FROM ALL) debaixo de XOOPS_TRUST_PATH como a segunda mellor forma.');
define('_AM_ADV_TRUSTPATHPUBLICLINK', 'Comproba que os ficheiros PHP dentro de TRUST_PATH estean configurados como de só lectura (debe ser un erro 404,403 ou 500)');
define('_AM_ADV_REGISTERGLOBALS',"Se está activado, esta configuración invita a varios ataques de inxección. Se podes, desactiva \"register_globals\" en php.ini ou, se non é posible, crea ou edita .htaccess no teu directorio XOOPS:");
define('_AM_ADV_ALLOWURLFOPEN',"Se está activada, esta configuración permite aos atacantes executar scripts arbitrarios en servidores remotos.<br>Só o administrador pode cambiar esta opción.<br>Se es administrador, edita php.ini ou httpd.conf.<br><b>Mostra de httpd.conf:<br> &nbsp; php_admin_flag &nbsp; allow_url_fopen &nbsp; off</b><br>Se non, reclamo aos teus administradores.");
define('_AM_ADV_USETRANSSID',"Se está activado, o teu ID de sesión mostrarase nas etiquetas de ancoraxe, etc.<br>Para evitar o ataque de sesión, engade unha liña a .htaccess en XOOPS_ROOT_PATH.<br><b>php_flag session.use_trans_sid off</b>");
define('_AM_ADV_DBPREFIX',"Esta configuración invita a \"Inxeccións SQL\".<br>Non esquezas activar \"Forzar desinfección *\" nas preferencias deste módulo.");
define('_AM_ADV_LINK_TO_PREFIXMAN', 'Vaia ao xestor de prefixos');
define('_AM_ADV_MAINUNPATCHED', 'Deberías editar o teu mainfile.php como está escrito en README.');
define('_AM_ADV_DBFACTORYPATCHED', 'A súa base de datos está lista para DBLayer Trapping anti-SQL-Injection');
define('_AM_ADV_DBFACTORYUNPATCHED', 'A súa fábrica de bases de datos non está lista para DBLayer Trapping anti-SQL-Injection. Requírense algúns parches.');
define('_AM_ADV_SUBTITLECHECK', 'Comproba se Protector funciona ben');
define('_AM_ADV_CHECKCONTAMI', 'Contaminación');
define('_AM_ADV_CHECKISOCOM', 'Comentarios illados');
//XOOPS 2.5.4
define('_AM_ADV_REGISTERGLOBALS2', 'e coloca nela a seguinte liña:');
//XOOPS 2.5.8
define('_AM_PROTECTOR_PREFIX', 'Prefixo');
define('_AM_PROTECTOR_TABLES', 'Táboas');
define('_AM_PROTECTOR_UPDATED', 'Actualizado');
define('_AM_PROTECTOR_COPY', 'Copiar');
define('_AM_PROTECTOR_ACTIONS', 'Accións');
// XOOPS 2.5.10 v Protector 3.60
define('_AM_LABEL_BAN_BY_IP', 'Prohibe as IP nos rexistros marcados:');
define('_AM_BUTTON_BAN_BY_IP', 'IP Ban!');
define('_AM_JS_BANCONFIRM', 'IP Bans Está ben?');
define('_AM_MSG_BANNEDIP', 'Os IPs están prohibidos');
define('_AM_ADMINSTATS_TITLE', 'Resumo do rexistro de Protector');
// XOOPS 2.5.11
define('_AM_ADMINSTATS_LAST_MONTH', 'O mes pasado');
define('_AM_ADMINSTATS_LAST_WEEK', 'A semana pasada');
define('_AM_ADMINSTATS_LAST_DAY', 'O día pasado');
define('_AM_ADMINSTATS_LAST_HOUR', 'Última hora');

//2.7.1 backfilled translations
