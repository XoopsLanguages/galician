xoopseditor ofrece un colectivo de editores para XOOPS

guía de usuario:

1 verifique os ficheiros xoops_version.php en /xoopseditor/ para asegurarse de que son máis novos que os actuais

2 carga /xoopseditor/ en /XOOPS/class/ => /XOOPS/class/xoopseditor/:
  XOOPS/class/xoopseditor/dhtmlext
  XOOPS/class/xoopseditor/dhtmltextarea
  XOOPS/class/xoopseditor/fckeditor
  XOOPS/class/xoopseditor/koivi
  XOOPS/class/xoopseditor/textarea
  XOOPS/class/xoopseditor/tinymce

3 configurar as preferencias onde corresponda
3.1 ./dhtmlext(all editors)/language/: fai o teu ficheiro de idioma local baseado en english.php
3.3 ./dhtmlext(todos os editores)/editor_registry.php: establecer configuracións para o editor: orde - orde de visualización no caso de que se use a selección do editor, 0 para desactivado; nohtml - funciona para sintaxe non html
3.3 ./FCKeditor/module/: copie os ficheiros nos cartafoles dos módulos no caso de que sexan necesarios permisos específicos de carga, almacenamento e opcións de editor.
3.3.1 ./FCKeditor/module/fckeditor.config.js: para as opcións do editor, normalmente non necesitas cambialo
3.3.2 ./FCKeditor/module/fckeditor.connector.php: para especificar o cartafol para buscar ficheiros (e almacenamento de carga) => XOOPS/uploads/XOOPS_FCK_FOLDER/, o cartafol é necesario para crear manualmente
3.3.3 ./FCKeditor/module/fckeditor.upload.php: especifica o permiso de carga e o almacenamento de carga
3.4 XOOPS/uploads/fckeditor/: para crear o cartafol se FCKeditor está activado, usado para cargas desde onde non se especifica o cartafol de carga
3.5 ./tinymce/tinymce/jscripts/: descarga os teus ficheiros de idioma local desde http://tinymce.moxiecode.com/language.php

4 verifique os nomes dos ficheiros: para o sistema que distingue entre maiúsculas e minúsculas, asegúrese de ter os nomes de ficheiros literalmente correctos, é dicir, "FCKeditor" non é idéntico a "fckeditor"

5 verifique /xoopseditor/sampleform.inc.php para a guía de desenvolvemento
