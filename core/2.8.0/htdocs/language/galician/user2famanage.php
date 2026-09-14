<?php
/**
 * Two-factor management strings.
 *
 * You may not change or alter any portion of this comment or credits
 * of supporting developers from this source code or any supporting source code
 * which is considered copyrighted (c) material of the original comment or credit authors.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * @copyright       (c) 2000-2026 XOOPS Project (https://xoops.org)
 * @license             GNU GPL 2 (https://www.gnu.org/licenses/gpl-2.0.html)
 * @package             core
 * @since               2.7.4
 */

define('_US_2FAM_TITLE', 'Autenticación de dous factores');
define('_US_2FAM_PASSWORD', 'O seu contrasinal actual');
define('_US_2FAM_ENABLE', 'Configurar un autenticador');
define('_US_2FAM_CONFIRM', 'Confirmar autenticador');
define('_US_2FAM_CHOOSE', 'Escolla como quere recibir o segundo paso: unha aplicación de autenticación, ou un código por correo electrónico.');
define('_US_2FAM_ENABLE_EMAIL', 'Usar códigos por correo electrónico');
define('_US_2FAM_EMAIL_HELP', 'Códigos por correo electrónico: cada vez que inicia sesión envíase un código de seis díxitos a %s. Menos seguro que unha aplicación de autenticación, xa que calquera que poida ler o seu correo pode superar este paso.');
define('_US_2FAM_EMAIL_STEP', 'Enviamos un código de seis díxitos a %s. Introdúzao a continuación para confirmar. É válido durante dez minutos.');
define('_US_2FAM_CONFIRM_EMAIL', 'Confirmar códigos por correo electrónico');
define('_US_2FAM_CODE_HELP_EMAIL', 'O código de seis díxitos do correo electrónico que acabamos de enviarlle.');
define('_US_2FAM_ENABLED_EMAIL', 'Os códigos por correo electrónico están activados. Para facer un cambio, introduza o seu contrasinal actual e o código que lle enviamos por correo, ou un código de recuperación. Use o botón de abaixo para solicitar un código.');
define('_US_2FAM_SEND', 'Envíame un código');
define('_US_2FAM_MANUAL', 'Clave de configuración manual');
define('_US_2FAM_SCAN', 'Código QR para a súa aplicación de autenticación');
define('_US_2FAM_STEP_APP', 'Necesita un autenticador: calquera aplicación ou xestor de contrasinais que xere códigos dun só uso baseados no tempo (TOTP) funcionará, no seu teléfono ou ordenador. Se aínda non ten un, instale primeiro o da súa elección (p. ex. Google Authenticator, Microsoft Authenticator, Aegis ou FreeOTP).');
define('_US_2FAM_STEP_ADD', 'Na aplicación, engada unha conta: escanee este código QR, ou escolla a entrada manual e escriba a clave de configuración amosada embaixo.');
define('_US_2FAM_STEP_CODE', 'A aplicación amosa agora un código de seis díxitos que cambia cada 30 segundos. Escriba o código que se amosa neste momento no campo de abaixo e confirme.');
define('_US_2FAM_CODE_HELP', 'O código de seis díxitos que amosa neste momento a súa aplicación de autenticación.');
define('_US_2FAM_HTTP', 'Esta conexión usa HTTP sen cifrar. O seu contrasinal, sesión, clave de configuración do autenticador e códigos de recuperación poden ser interceptados. Use HTTPS sempre que sexa posible.');
define('_US_2FAM_CODES', 'Garde estes códigos de recuperación agora');
define('_US_2FAM_CODES_HELP', 'Cada código funciona unha soa vez. Estes códigos non se amosarán de novo. Gárdeos nun lugar seguro, separado desta conta.');
define('_US_2FAM_DISABLE', 'Desactivar a autenticación de dous factores');
define('_US_2FAM_REGENERATE', 'Substituír códigos de recuperación');
define('_US_2FAM_ENABLED', 'Hai un autenticador configurado. Introduza o seu contrasinal actual e un código de autenticación ou de recuperación para facer un cambio.');
define('_US_2FAM_DISABLED', 'A autenticación de dous factores está desactivada.');
define('_US_2FAM_PAUSED', 'O sitio pausou os desafíos de dous factores. O seu factor consérvase, e a opción «lembrarme» segue non dispoñible para as contas configuradas.');
define('_US_2FAM_UNAVAILABLE', 'A configuración ou xestión de dous factores non está dispoñible. Contacte co administrador do sitio.');
define('_US_2FAM_STARTAGAIN', 'A configuración caducou ou a conta cambiou. Introduza o seu contrasinal para comezar de novo a configuración.');
define('_US_2FAM_BADPASSWORD', 'O seu contrasinal actual non foi aceptado.');
define('_US_2FAM_RESET', 'Restablecer a autenticación de dous factores deste usuario');
define('_US_2FAM_STATUS_NONE', 'Non configurado');
define('_US_2FAM_STATUS_TOTP', 'Aplicación de autenticación configurada');
define('_US_2FAM_STATUS_EMAIL', 'Códigos por correo electrónico configurados');
define('_US_2FAM_STATUS_UNAVAILABLE', 'Estado non dispoñible');
define('_US_2FAM_RESET_HELP', 'Isto desactiva o segundo factor do usuario, sexa cal sexa o método configurado, e revoga os seus códigos de recuperación e cookies de «lembrarme». As sesións xa iniciadas permanecen activas. Introduza o seu propio contrasinal de administrador para confirmar.');
define('_US_2FAM_RESET_DONE', 'Restableceuse a autenticación de dous factores do usuario.');
define('_US_2FAM_BACK', 'Volver á conta');
define('_US_2FAM_DONE', 'A autenticación de dous factores está activada.');
define('_US_2FAM_REPLACED', 'Os códigos de recuperación anteriores foron revogados.');
define('_US_2FAM_NOTICE_SUBJECT', '%s: cambiou a autenticación de dous factores');
define('_US_2FAM_NOTICE_BODY', 'A autenticación de dous factores ou os códigos de recuperación da súa conta en %s cambiaron desde %s. Se non foi vostede, contacte co administrador do sitio.');
define('_US_2FAM_RESET_SUBJECT', '%s: un administrador restableceu a súa autenticación de dous factores');
define('_US_2FAM_RESET_BODY', 'Un administrador desactivou o seu segundo factor e revogou os seus códigos de recuperación en %s desde %s. As sesións xa iniciadas permanecen activas. Inicie sesión e configure de novo a autenticación de dous factores. Contacte co administrador do sitio se isto non era esperado.');
