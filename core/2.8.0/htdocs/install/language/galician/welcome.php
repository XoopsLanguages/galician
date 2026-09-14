<?php
//
// _LANGCODE: gl
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team

$content = '
<p>
    <abbr title="eXtensible Object-Oriented Portal System">XOOPS</abbr> é un código aberto
    Sistema de publicación web orientado a obxectos escrito en PHP. É unha ferramenta ideal para
    desenvolvendo sitios web comunitarios dinámicos de pequeno a grande, portais intra empresa, portais corporativos, weblogs e moito máis.
</p>
<p>
    XOOPS publícase baixo os termos do
    <a href="https://www.gnu.org/licenses/gpl-2.0.html" rel="external">GNU Licenza pública xeral (GPL)</a>
    versión 2 ou superior, e é libre de usar e modificar.
    É gratuíto a redistribución sempre que cumpras os termos de distribución do GPL.
</p>
<h3>Requisitos</h3>
<ul>
    <li>WWW Servidor (<a href="https://www.apache.org/" rel="external">Apache</a>, <a href="https://www.nginx.com/" rel="external">NGINX</a>, IIS, etc.)</li>
    <li><a href="https://www.php.net/" rel="external">PHP</a> 8.2 ou superior, recomendado 8.4+</li>
    <li><a href="https://www.mysql.com/" rel="external">MySQL</a> 5.7.8 ou superior, recomendado 8.4.5+ </li>
</ul>
<h3>Antes de ti install</h3>
<ol>
    <li>Configure correctamente o servidor WWW, PHP e o servidor de base de datos.</li>
    <li>Prepara unha base de datos para o teu sitio XOOPS.</li>
    <li>Prepare a conta de usuario e conceda ao usuario o acceso á base de datos.</li>
    <li>Fai que estes directorios e ficheiros sexan escribibles: %s</li>
    <li>Por consideracións de seguridade, recoméndase encarecidamente que elimine os dous directorios seguintes <a href="https://privacyaustralia.net/phpsec/projects/guide/php-security-guide-databases-and-sql/" rel="external">raíz do documento</a> e cambia os nomes dos cartafoles: %s</li>
    <li>Crea (se aínda non está presente) e fai que estes directorios sexan escribibles: %s</li>
    <li>Activa a cookie e JavaScript do teu navegador.</li>
</ol>
<h3>Notas especiais</h3>
<ol>
    <li>Algunhas combinacións específicas de software do sistema poden requirir algunhas configuracións adicionais para funcionar
    con XOOPS. Se algún destes temas se aplica ao teu entorno, consulta o contido completo
    <a href="https://xoops.gitbook.io/xoops-install-upgrade/" rel="external">XOOPS
    manual de instalación</a> para máis información.<br><br>

    <li><strong>SELinux</strong> sistemas habilitados (como <strong>CentOS</strong>  e <strong>RHEL</strong>) pode requirir cambios no contexto de seguridade
    para os directorios XOOPS ademais dos permisos normais de ficheiros para facer que os directorios sexan escribibles.
    Consulte a documentación do seu sistema e/ou o administrador de sistemas.
</ol>
';

return $content;

