<?php

// _LANGCODE: gl
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team

define('_XOOPS_SMARTY4_MIGRATION', 'XOOPS Migración Smarty4');

define('_XOOPS_SMARTY4_SCANNER_RESULTS', 'Resultados do escáner');
define('_XOOPS_SMARTY4_SCANNER_RUN', 'Executar a exploración');
define('_XOOPS_SMARTY4_SCANNER_END', 'Sae do escáner');
define('_XOOPS_SMARTY4_SCANNER_RULE', 'Regra');
define('_XOOPS_SMARTY4_SCANNER_MATCH', 'Partido');
define('_XOOPS_SMARTY4_SCANNER_FILE', 'Ficheiro');
define('_XOOPS_SMARTY4_SCANNER_FIXED', 'Corrección de conta');
define('_XOOPS_SMARTY4_SCANNER_MANUAL_REVIEW', 'Requírese unha revisión manual');
define('_XOOPS_SMARTY4_SCANNER_AUTOFIX', 'Pódese corrixir automaticamente: a variable de cada elemento renomearase engadindo "_item" (por exemplo, "foo" pasa a ser "foo_item").');
define('_XOOPS_SMARTY4_SCANNER_NOT_WRITABLE', 'Non se pode escribir');

define('_XOOPS_SMARTY4_RESCAN_OPTIONS', 'Opcións de novo escaneo');

define('_XOOPS_SMARTY4_FIX_BUTTON', 'Fai clic na caixa de verificación "Si" a continuación e, a continuación, fai clic no botón Executar dixitalización para tentar solucionar automaticamente os problemas atopados.');
define('_XOOPS_SMARTY4_SCANNER_MARK_COMPLETE', 'Marcar como completo');

define('_XOOPS_SMARTY4_TEMPLATE_DIR', 'Directorio de modelos (opcional)');
define('_XOOPS_SMARTY4_TEMPLATE_EXT', 'Extensión de modelo (opcional)');


define(
    '_XOOPS_SMARTY4_SCANNER_OFFER',
    <<<'EOT'
<h3>XOOPS 2.7.0 introduce un cambio significativo: Smarty 4</h3>

<p>Desafortunadamente, este cambio pode perturbar algúns temas máis antigos. Polo tanto, antes de continuar coa actualización, asegúrate de seguir estes pasos:

<li>Executa preflight.php para comprobar se hai temas ou modelos de módulos desactualizados.</li>
<li>Se se detecta algún problema, consulte este documento para comprender as modificacións necesarias antes de continuar coa actualización.</li>
<li>Despois de facer os cambios necesarios, executa preflight.php de novo.</li>
<li>Se non hai máis problemas, pode comezar o proceso de actualización.</li>
</p>
EOT,
);
