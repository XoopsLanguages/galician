<?php
/**
 * Second-factor challenge strings.
 *
 * A file of their own, apart from user.php: xoops_loadLanguage() falls back
 * to English for a missing file but never fills gaps in a present one, so
 * a language pack that predates the challenge renders it in English rather
 * than failing on an undefined constant.
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

// XOOPS 2.7.4: two-factor challenge
define('_US_2FA_TITLE', 'Segundo paso');
define('_US_2FA_PROMPT', 'Introduza o código da súa aplicación de autenticación');
define('_US_2FA_CODE', 'Código de autenticación');
define('_US_2FA_PROMPT_EMAIL', 'Enviamos un código de seis díxitos a %s. Introdúzao a continuación.');
define('_US_2FA_CODE_EMAIL', 'Código do seu correo electrónico');
define('_US_2FA_SEND', 'Enviar un novo código');
define('_US_2FA_SENT', 'Enviouse un novo código a %s. É válido durante dez minutos.');
define('_US_2FA_SEND_WAIT', 'Enviouse un código hai menos dun minuto. Comprobe a caixa de entrada e o cartafol de correo lixo antes de solicitar outro.');
define('_US_2FA_SEND_FAILED', 'Non se puido enviar o código neste momento. Ténteo de novo nun momento, ou use un código de recuperación.');
define('_US_2FA_EMAIL_SUBJECT', '%s: o seu código de inicio de sesión');
define('_US_2FA_EMAIL_BODY', 'O seu código de inicio de sesión para %s é:

%s

É válido durante %d minutos e funciona unha soa vez. Se non o solicitou, ignore esta mensaxe e considere cambiar o contrasinal.');
define('_US_2FA_RECOVERY', 'Usar un código de recuperación no seu lugar');
define('_US_2FA_RECOVERY_HINT', 'Cada código de recuperación funciona unha soa vez. Ao usar un, enviaráselle un correo electrónico.');
define('_US_2FA_SUBMIT', 'Continuar');
define('_US_2FA_STARTAGAIN', 'Este inicio de sesión caducou ou interrompeuse. Comece de novo.');
define('_US_2FA_BACKTOLOGIN', 'Volver ao formulario de inicio de sesión');
define('_US_2FA_BADCODE', 'Ese código non foi aceptado.');
define('_US_2FA_LOCKED', 'Demasiados intentos. O segundo paso está bloqueado durante quince minutos; un código de recuperación aínda funciona.');
define('_US_2FA_UNAVAILABLE', 'O segundo paso non está dispoñible neste momento. Un código de recuperación aínda funciona, ou contacte co administrador do sitio.');
define('_US_2FA_REQUIRED', 'Esta conta ten activada a autenticación de dous factores. Inicie sesión a través da páxina de inicio de sesión do sitio.');
define('_US_2FA_HTTP_LOGIN', 'Esta xanela emerxente non pode completar un inicio de sesión de dous factores por HTTP porque o seu contrasinal enviaríase sen cifrar. Use o inicio de sesión do sitio, ou pídalle ao administrador que active HTTPS para o sitio.');
define('_US_2FA_LOCKED_MAIL_SUBJECT', '%s: segundo paso bloqueado');
define('_US_2FA_LOCKED_MAIL_BODY', 'Introducíronse cinco códigos incorrectos do segundo paso para a súa conta en %s desde %s. O segundo paso está bloqueado durante quince minutos. Se non foi vostede, cambie o contrasinal.');
define('_US_2FA_RECOVERY_MAIL_SUBJECT', '%s: usouse un código de recuperación');
define('_US_2FA_RECOVERY_MAIL_BODY', 'Usouse un código de recuperación para iniciar sesión na súa conta en %s desde %s. Ese código xa non funciona. Se non foi vostede, cambie o contrasinal e restableza os seus códigos de recuperación.');
