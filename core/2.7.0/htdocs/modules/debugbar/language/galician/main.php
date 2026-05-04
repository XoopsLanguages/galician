<?php
/**
 * DebugBar Module - Main Language Constants
 *
 * @copyright       (c) 2000-2026 XOOPS Project (https://xoops.org)
 * @license             GNU GPL 2 (https://www.gnu.org/licenses/gpl-2.0.html)
 * @author              trabis <lusopoemas@gmail.com>
 * @author              Richard Griffith <richard@geekwright.com>
 */
// _LANGCODE: gl

define('_MD_DEBUGBAR_DEBUG', 'Depuración');
define('_MD_DEBUGBAR_INCLUDED_FILES', 'Ficheiros incluídos');
define('_MD_DEBUGBAR_PHP_VERSION', 'Versión PHP');
define('_MD_DEBUGBAR_NONE', 'Ningún');
define('_MD_DEBUGBAR_ERRORS', 'Erros');
define('_MD_DEBUGBAR_DEPRECATED', 'Obsoleto');
define('_MD_DEBUGBAR_QUERIES', 'Consultas');
define('_MD_DEBUGBAR_BLOCKS', 'Bloques');
define('_MD_DEBUGBAR_EXTRA', 'Extra');
define('_MD_DEBUGBAR_TIMERS', 'Temporizadores');
define('_MD_DEBUGBAR_TIMETOLOAD', '%s tardou %s segundos en cargar.');
define('_MD_DEBUGBAR_TOTAL', 'Total');
define('_MD_DEBUGBAR_NOT_CACHED', 'Non almacenado na caché');
define('_MD_DEBUGBAR_CACHED', 'Almacenado na caché (rexenera cada %s segundos)');

// Value display labels (Smarty/DebugBar panels)
define('_MD_DEBUGBAR_EMPTY_STRING', '(cadea baleira)');
define('_MD_DEBUGBAR_NULL', 'NULL');
define('_MD_DEBUGBAR_BOOL_TRUE', 'bool VERDADEIRO');
define('_MD_DEBUGBAR_BOOL_FALSE', 'bool FALSO');

// Extra panel labels
define('_MD_DEBUGBAR_DATABASE_QUERIES', 'Consultas de base de datos');
define('_MD_DEBUGBAR_MEMORY_USAGE', 'Uso de memoria');
define('_MD_DEBUGBAR_QUERY_SUMMARY', '%d consultas');
define('_MD_DEBUGBAR_QUERY_DUPLICATES', '(%d duplicados)');
define('_MD_DEBUGBAR_BYTES', '%s bytes');
define('_MD_DEBUGBAR_DB_VERSION', 'Versión %s');

// Query error formatting
define('_MD_DEBUGBAR_QUERY_ERROR', '-- Número de erro: %s Mensaxe de erro: %s');
define('_MD_DEBUGBAR_QUERY_ERROR_RAY', "
-- Erro #%s: %s");

// Ray labels
define('_MD_DEBUGBAR_RAY_EXCEPTION', 'Excepción');
define('_MD_DEBUGBAR_RAY_QUERY', 'Consulta #%d');
define('_MD_DEBUGBAR_RAY_DUP', '[DUP x%d]');
define('_MD_DEBUGBAR_RAY_SLOW', 'LENTA');
define('_MD_DEBUGBAR_RAY_BLOCK_CACHED', 'Bloque (en caché %ds)');
define('_MD_DEBUGBAR_RAY_BLOCK_NOT_CACHED', 'Bloque (non almacenado na caché)');
define('_MD_DEBUGBAR_RAY_DUMP', 'Volcado');
define('_MD_DEBUGBAR_RAY_TEMPLATE_CONTEXT', 'Contexto do modelo');
define('_MD_DEBUGBAR_RAY_NO_VARS', '(sen variables de modelo)');
define('_MD_DEBUGBAR_RAY_VARS_COUNT', '%s (%d vars)');

// Install error messages
define('_MD_DEBUGBAR_ERR_DIR_CREATE', 'Non se creou o directorio "modules/debugbar/%s".');
define('_MD_DEBUGBAR_ERR_DIR_COPY', 'Produciuse un erro ao crear o directorio "%s" durante a copia do recurso');
