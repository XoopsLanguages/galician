<?php
/**
 * DebugBar Module - Module Info Language Constants
 *
 * @copyright       (c) 2000-2026 XOOPS Project (https://xoops.org)
 * @license             GNU GPL 2 (https://www.gnu.org/licenses/gpl-2.0.html)
 * @author              Richard Griffith <richard@geekwright.com>
 */
// _LANGCODE: gl

define('_MI_DEBUGBAR_NAME', 'DebugBar');
define('_MI_DEBUGBAR_DSC', 'Informes de erros e análise de rendemento con PHP DebugBar');

define('_MI_DEBUGBAR_ENABLE', 'Mostrar DebugBar');
define('_MI_DEBUGBAR_SMARTYDEBUG', 'Activar Debug de Smarty');
define('_MI_DEBUGBAR_FILESDEBUG', 'Activar pestana de ficheiros incluídos');
define('_MI_DEBUGBAR_FILESDEBUG_DSC', 'Mostrar todos os ficheiros PHP cargados durante a solicitude');
define('_MI_DEBUGBAR_SLOWQUERY', 'Limiar de consulta lenta (segundos)');
define('_MI_DEBUGBAR_SLOWQUERY_DSC', 'As consultas máis lentas resáltanse en vermello (p. ex. 0.05 = 50ms)');

define('_MI_DEBUGBAR_QUERYMODE',      'Rexistro de consultas');
define('_MI_DEBUGBAR_QUERYMODE_DSC',  'Todas as consultas ou só as lentas e erros');
define('_MI_DEBUGBAR_QUERYMODE_ALL',  'Todas as consultas');
define('_MI_DEBUGBAR_QUERYMODE_SLOW', 'Só lentas e erros');

define('_MI_DEBUGBAR_RAY_ENABLE', 'Activar integración Ray');
define('_MI_DEBUGBAR_RAY_ENABLE_DSC', 'Enviar datos de depuración á aplicación Ray');

define('_MI_DEBUGBAR_ADMENU1', 'Inicio');
define('_MI_DEBUGBAR_MENU_ABOUT', 'Sobre');

//Help
\define('_MI_DEBUGBAR_DIRNAME', basename(dirname(__DIR__, 2)));
\define('_MI_DEBUGBAR_HELP_HEADER', __DIR__ . '/help/helpheader.tpl');
\define('_MI_DEBUGBAR_BACK_2_ADMIN', 'Volver á administración de ');
\define('_MI_DEBUGBAR_OVERVIEW', 'Visión xeral');

//help multipage
\define('_MI_DEBUGBAR_DISCLAIMER', 'Renuncia de responsabilidade');
\define('_MI_DEBUGBAR_LICENSE', 'Licenza');
\define('_MI_DEBUGBAR_SUPPORT', 'Soporte');
