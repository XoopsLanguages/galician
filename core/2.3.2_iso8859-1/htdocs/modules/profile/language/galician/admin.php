<?php
// $Id: admin.php 68 2008-08-31 03:38:58Z julionc $
define("_PROFILE_AM_FIELD", "Campo");
define("_PROFILE_AM_FIELDS", "Campos");
define("_PROFILE_AM_CATEGORY", "Categor�a");
define("_PROFILE_AM_STEP", "Paso");	 

define("_PROFILE_AM_SAVEDSUCCESS", "%s gardouse correctamente");
define("_PROFILE_AM_DELETEDSUCCESS", "%s borruouse correctamente");
define("_PROFILE_AM_RUSUREDEL", "�Est�s seguro de querer borrar %s?");
 define("_PROFILE_AM_FIELDNOTCONFIGURABLE", "O campo non � configurable.");		 

define("_PROFILE_AM_ADD", "Engadir");
define("_PROFILE_AM_EDIT", "Editar");
define("_PROFILE_AM_TYPE", "Tipo de campo");
define("_PROFILE_AM_VALUETYPE", "Valor do campo");
define("_PROFILE_AM_NAME", "Nome");
define("_PROFILE_AM_TITLE", "T&iacute;tulo");
define("_PROFILE_AM_DESCRIPTION", "Descrici�n");
define("_PROFILE_AM_REQUIRED", "�Requirido?");
define("_PROFILE_AM_MAXLENGTH", "Tama&ntilde;o m�ximo");
define("_PROFILE_AM_WEIGHT", "Peso");
define("_PROFILE_AM_DEFAULT", "Por defecto");
define("_PROFILE_AM_NOTNULL", "�Non nulo?"); 

define("_PROFILE_AM_ARRAY", "Arranxo");
define("_PROFILE_AM_EMAIL", "E-correo");
define("_PROFILE_AM_INT", "Enteiro");
define("_PROFILE_AM_TXTAREA", "�rea do texto");
define("_PROFILE_AM_TXTBOX", "Campo de texto");
define("_PROFILE_AM_URL", "URL");
define("_PROFILE_AM_OTHER", "Outro");

define("_PROFILE_AM_PROF_VISIBLE_ON", "Campo visible no perfil de estes grupos");
define("_PROFILE_AM_PROF_VISIBLE_FOR", "Campo visible no perfil para estes grupos"); 
define("_PROFILE_AM_PROF_VISIBLE", "Visibilidade");
define("_PROFILE_AM_PROF_EDITABLE", "Campo editable dende o perfil");
define("_PROFILE_AM_PROF_REGISTER", "Mostrar na forma de rexistro");
define("_PROFILE_AM_PROF_SEARCH", "Atopable por estes grupos");
define("_PROFILE_AM_PROF_ACCESS", "Perfil accesible por estes grupos");
define("_PROFILE_AM_PROF_ACCESS_DESC",
        "<ul>" .
        "<li>Grupos Admin: Se un usuario pertence a grupos de administrador, o usuario actual ten acceso si y somentes si a un dos actuais grupos del usuario se lle permite o acceso � grupo de administrador; else</li>" .
        "<li>Non grupos b�sicos: Se un usuario pertence a un ou m�is grupos b�sicos (NON administrador, usuario, an�nimo), o usuario actual ten acceso si y somentes si un dos actuais grupos do usuario est� autorizado a permitir que calquera dos grupos b�sicos non; else</li>" .
        "<li>Grupo usuario: Se un usuario pertence � grupo de usuarios somentes, o usuario actual ten acceso si y somentes si un dos seus grupos ten permitido o acceso � grupo usuario</li>" .
        "</ul>");

define("_PROFILE_AM_FIELDVISIBLE", "O campo ");
define("_PROFILE_AM_FIELDVISIBLEFOR", " � visible para ");
define("_PROFILE_AM_FIELDVISIBLEON", " mostrando o perfil de ");
define("_PROFILE_AM_FIELDVISIBLETOALL", "- T�dolos");
define("_PROFILE_AM_FIELDNOTVISIBLE", "non � visible");

define("_PROFILE_AM_CHECKBOX", "Checkbox");
define("_PROFILE_AM_GROUP", "Elixir grupo");
define("_PROFILE_AM_GROUPMULTI", "Elixir multi grupo");
define("_PROFILE_AM_LANGUAGE", "Elixir idioma");
define("_PROFILE_AM_RADIO", "Radio Buttons");
define("_PROFILE_AM_SELECT", "Elixir");
define("_PROFILE_AM_SELECTMULTI", "Selecci�n Multi");
define("_PROFILE_AM_TEXTAREA", "�rea de texto");
define("_PROFILE_AM_DHTMLTEXTAREA", "�rea de texto DHTML");
define("_PROFILE_AM_TEXTBOX", "Campo de texto");
define("_PROFILE_AM_TIMEZONE", "Zona horaria");
define("_PROFILE_AM_YESNO", "Radio Si/Non");
define("_PROFILE_AM_DATE", "Data");
define("_PROFILE_AM_AUTOTEXT", "Auto Texto");
define("_PROFILE_AM_DATETIME", "Data e hora");
define("_PROFILE_AM_LONGDATE", "data completa");

define("_PROFILE_AM_ADDOPTION", "Engadir opci�n");
define("_PROFILE_AM_REMOVEOPTIONS", "Eliminar opci�n");
define("_PROFILE_AM_KEY", "Valor a ordear");
define("_PROFILE_AM_VALUE", "Texto a mostrar");

// User management
define("_PROFILE_AM_EDITUSER", "Editar usuario");
define("_PROFILE_AM_SELECTUSER", "Seleccioar usuario");	
define("_PROFILE_AM_ADDUSER","Engadir usuario");	
define("_PROFILE_AM_THEME","Tema");	 
define("_PROFILE_AM_RANK","Rango");	
define("_PROFILE_AM_USERDONEXIT","O usuario non existe");  
define("_PROFILE_MA_USERLEVEL", "Nivel del usuario");					
define("_PROFILE_MA_ACTIVE", "Activo");	

define("_PROFILE_MA_INACTIVE", "Inactivo");
define("_PROFILE_AM_USERCREATED", "Usuario creado"); 
define("_PROFILE_AM_YMCACF","Debe completar t�dolos campos requiridos");				  
define("_PROFILE_AM_CANNOTDELETESELF", "Non puede eliminar a s�a propia conta - utilice a s�a p�xina de perfil para eliminar a s�a propia conta");
define("_PROFILE_AM_CANNOTDELETEADMIN", "Non est� permitido eliminar unha conta de administrador");

define("_PROFILE_AM_NOSELECTION", "No se elixiu ning�n usuario");
define("_PROFILE_AM_USER_ACTIVATED", "Usuario activado");
define("_PROFILE_AM_USER_DEACTIVATED", "Usuario desactivado");
define("_PROFILE_AM_USER_NOT_ACTIVATED", "Erro: Usuario non activado");
define("_PROFILE_AM_USER_NOT_DEACTIVATED", "Erro: Usuario non desactivado");		 

define("_PROFILE_AM_STEPNAME", "Nome do paso");
define("_PROFILE_AM_STEPORDER", "Orde de paso");
define("_PROFILE_AM_STEPSAVE", "Gardar despois do paso");
define("_PROFILE_AM_STEPINTRO", "Descrici�n do paso");
?>