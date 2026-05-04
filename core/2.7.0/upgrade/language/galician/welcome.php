<?php

// _LANGCODE: gl
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team

define(
    '_XOOPS_UPGRADE_WELCOME',
    <<<'EOT'
<h2>XOOPS Actualizador</h2>

<p>
<em>Actualizar</em> examinará esta instalación XOOPS e aplicará os parches necesarios para facelo compatible 
co novo código XOOPS. Os parches poden incluír cambios na base de datos, engadindo configuracións predeterminadas para novas
elementos de configuración, actualizacións de ficheiros e datos e moito máis.
<p>
Despois de cada parche, o actualizador informará do estado e agardará a que continúe a túa entrada. No
ao final da actualización, o control pasará á función de actualización do módulo do sistema.

<div class="alert alert-warning">
Unha vez completada a actualización, non esquezas:
<ul class="fa-ul">
 <li><span class="fa-li fa-solid fa-folder-open"></span> eliminar o cartafol de actualización</li>
 <li><span class="fa-li fa-solid fa-arrows-rotate"></span> actualizar os módulos que cambiaron</li>
</div>

EOT,
);
