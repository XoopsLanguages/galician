<?php
/**
 * @copyright       (c) 2000-2026 XOOPS Project (https://xoops.org)
 * @license             GNU GPL 2 (https://www.gnu.org/licenses/gpl-2.0.html)
 * _LANGCODE    gl
 * _CHARSET     UTF-8
 */
define('_AM_SYSTEM_BLOCKS_ADMIN', 'Administración de bloques');
define('_AM_SYSTEM_BLOCKS_MANAGMENT', 'Xestionar');
define('_AM_SYSTEM_BLOCKS_ADDBLOCK', 'Engadir un novo bloque');
define('_AM_SYSTEM_BLOCKS_EDITBLOCK', 'Editar un bloque');
define('_AM_SYSTEM_BLOCKS_CLONEBLOCK', 'Clonar un bloque');
define('_AM_SYSTEM_BLOCKS_CUSTOM', 'Bloque personalizado');
define('_AM_SYSTEM_BLOCKS_TYPES', 'Todos os tipos');
define('_AM_SYSTEM_BLOCKS_GENERATOR', 'Módulos');
define('_AM_SYSTEM_BLOCKS_GROUP', 'Grupos');
define('_AM_SYSTEM_BLOCKS_SVISIBLEIN', 'Páxina');
define('_AM_SYSTEM_BLOCKS_DISPLAY', 'Mostrar bloque ');
define('_AM_SYSTEM_BLOCKS_HIDE', 'Ocultar bloque ');
define('_AM_SYSTEM_BLOCKS_CLONE', 'Clonar');
define('_AM_SYSTEM_BLOCKS_SIDELEFT', 'Esquerda');
define('_AM_SYSTEM_BLOCKS_SIDETOPLEFT', 'Arriba á esquerda');
define('_AM_SYSTEM_BLOCKS_SIDETOPCENTER', 'Arriba ao centro');
define('_AM_SYSTEM_BLOCKS_SIDETOPRIGHT', 'Arriba á dereita');
define('_AM_SYSTEM_BLOCKS_SIDERIGHT', 'Dereita');
define('_AM_SYSTEM_BLOCKS_SIDEBOTTOMLEFT', 'Abaixo á esquerda');
define('_AM_SYSTEM_BLOCKS_SIDEBOTTOMCENTER', 'Abaixo ao centro');
define('_AM_SYSTEM_BLOCKS_SIDEBOTTOMRIGHT', 'Abaixo á dereita');
define('_AM_SYSTEM_BLOCKS_SIDEFOOTERLEFT', 'Pé de páxina esquerdo');
define('_AM_SYSTEM_BLOCKS_SIDEFOOTERCENTER', 'Pé de páxina centro');
define('_AM_SYSTEM_BLOCKS_SIDEFOOTERRIGHT', 'Pé de páxina dereito');
define('_AM_SYSTEM_BLOCKS_ADD', 'Engadir bloque');
define('_AM_SYSTEM_BLOCKS_MANAGE', 'Xestionar bloque');
define('_AM_SYSTEM_BLOCKS_NAME', 'Nome');
define('_AM_SYSTEM_BLOCKS_TYPE', 'Tipo de bloque');
define('_AM_SYSTEM_BLOCKS_SBLEFT', 'Bloque lateral - esquerda');
define('_AM_SYSTEM_BLOCKS_SBRIGHT', 'Bloque lateral - dereita');
define('_AM_SYSTEM_BLOCKS_CBLEFT', 'Bloque central - esquerda');
define('_AM_SYSTEM_BLOCKS_CBRIGHT', 'Bloque central - dereita');
define('_AM_SYSTEM_BLOCKS_CBCENTER', 'Bloque central - centro');
define('_AM_SYSTEM_BLOCKS_CBBOTTOMLEFT', 'Bloque central - Abaixo esquerda');
define('_AM_SYSTEM_BLOCKS_CBBOTTOMRIGHT', 'Bloque central - Abaixo dereita');
define('_AM_SYSTEM_BLOCKS_CBFOOTERLEFT', 'Bloque de pé - esquerda');
define('_AM_SYSTEM_BLOCKS_CBFOOTERCENTER', 'Bloque de pé - centro');
define('_AM_SYSTEM_BLOCKS_CBFOOTERRIGHT', 'Bloque de pé - dereita');
define('_AM_SYSTEM_BLOCKS_CBBOTTOM', 'Bloque central - Abaixo');
define('_AM_SYSTEM_BLOCKS_WEIGHT', 'Peso');
define('_AM_SYSTEM_BLOCKS_VISIBLE', 'Visible');
define('_AM_SYSTEM_BLOCKS_VISIBLEIN', 'Visible en');
define('_AM_SYSTEM_BLOCKS_TOPPAGE', 'Páxina superior');
define('_AM_SYSTEM_BLOCKS_ALLPAGES', 'Todas as páxinas');
define('_AM_SYSTEM_BLOCKS_UNASSIGNED', 'Non asignado');
define('_AM_SYSTEM_BLOCKS_TITLE', 'Título');
define('_AM_SYSTEM_BLOCKS_CONTENT', 'Contido');
define('_AM_SYSTEM_BLOCKS_USEFULTAGS', 'Etiquetas útiles:');
define('_AM_SYSTEM_BLOCKS_BLOCKTAG', '%s imprimirá %s');
define('_AM_SYSTEM_BLOCKS_CTYPE', 'Tipo de contido');
define('_AM_SYSTEM_BLOCKS_HTML', 'HTML');
define('_AM_SYSTEM_BLOCKS_BCACHETIME', 'Vida útil da caché');
define('_AM_SYSTEM_BLOCKS_EDITTPL', 'Editar modelo');
define('_AM_SYSTEM_BLOCKS_OPTIONS', 'Opcións');
define('_AM_SYSTEM_BLOCKS_DRAG', 'Arrastra ou ordena o bloque');
define('_AM_SYSTEM_BLOCKS_DBUPDATED', _AM_SYSTEM_DBUPDATED);
define('_AM_SYSTEM_BLOCKS_RUSUREDEL', 'Está seguro de que quere eliminar este bloque? <div class="bold">%s</div>');
define('_AM_SYSTEM_BLOCKS_SYSTEMCANT', 'Os bloques do sistema non se poden eliminar!');
define('_AM_SYSTEM_BLOCKS_MODULECANT', 'Este bloque non pode ser eliminado directamente! Para deshabilitalo, desactive o módulo.');
define('_AM_SYSTEM_BLOCKS_TIPS', '<ul>
<li>You can easily change side or order position with the drag\'n drop, click on <img class="tooltip" src="%s" alt="' . _AM_SYSTEM_BLOCKS_DRAG . '" title="' . _AM_SYSTEM_BLOCKS_DRAG . '" /> this image and set your site just the way you want it</li>
<li>Add a new custom block</li>
<li>Set block online or offline by clicking on <img class="tooltip" width="16" src="%s" alt="' . _AM_SYSTEM_BLOCKS_DISPLAY . '" title="' . _AM_SYSTEM_BLOCKS_DISPLAY . '"/> or <img class="tooltip" width="16" src="%s" alt="' . _AM_SYSTEM_BLOCKS_HIDE . '" title="' . _AM_SYSTEM_BLOCKS_HIDE . '" /></li>
</ul>');
define('_AM_SYSTEM_BLOCKS_FOOTER_LEFT', 'Footer Left');
define('_AM_SYSTEM_BLOCKS_FOOTER_CENTER', 'Pé de páxina centro');
define('_AM_SYSTEM_BLOCKS_FOOTER_RIGHT', 'Pé de páxina dereito');

//2.7.1
//Comment-controls block error (used by modules/system/admin/blocks)
define('_AM_SYSTEM_BLOCKS_INVALID_CLONE', 'Parámetros de bloque non válidos.');

//2.7.1 backfilled translations
define('_AM_SYSTEM_BLOCKS_CUSTOMHTML', 'Bloque personalizado (HTML)');
define('_AM_SYSTEM_BLOCKS_CUSTOMSMILE', 'Bloque personalizado (formato automático + emoticonas)');
define('_AM_SYSTEM_BLOCKS_AFWSMILE', 'Formato automático (emoticonas activadas)');
define('_AM_SYSTEM_BLOCKS_PHP', 'Script PHP (baseado en ficheiro)');
define('_AM_SYSTEM_BLOCKS_AFNOSMILE', 'Formato automático (emoticonas desactivadas)');
define('_AM_SYSTEM_BLOCKS_CUSTOMNOSMILE', 'Bloque personalizado (formato automático)');
define('_AM_SYSTEM_BLOCKS_CUSTOMPHP', 'Bloque personalizado (PHP)');
