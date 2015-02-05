<?php

$lang = array(

//
// Text orientation and encoding
//

'lang_direction'					=>	'ltr', // ltr (Left-To-Right) or rtl (Right-To-Left)
'lang_identifier'					=>	'es',

//
// Number and date formatting
//

'lang_decimal_point'				=>	'.',
'lang_thousands_sep'				=>	',',
'lang_time'							=>	'H:i',
'lang_date'							=>	'd/m/Y',

//
// Notices
//

'Bad request'						=>	'Bad request. The link you followed is incorrect, outdated or you\'re simply not allowed to hang around here.',
'No view'							=>	'No tienes permisos para ver esta página.',
'Bad referrer'						=>	'Bad HTTP_REFERER. You were referred to this page from an unauthorized source. If the problem persists please make sure that \'Base URL\' is correctly set in Admin/Options and that you are visiting the forum by navigating to that URL. More information regarding the referrer check can be found in the Luna documentation.',
'No permission'						=>	'No tienes permiso para acceder a esta página.',
'No cookie'							=>	'You appear to have logged in successfully, however a cookie has not been set. Please check your settings and if applicable, enable cookies for this website.',
'Pun include extension'				=>  'Unable to process user include %s from template %s. "%s" files are not allowed',  
'Pun include directory'				=>  'Unable to process user include %s from template %s. Directory traversal is not allowed',  
'Pun include error'					=>  'Unable to process user include %s from template %s. There is no such file in neither the template directory nor in the user include directory',  
'Settings saved'					=>  'Los ajustes han sido guardados.',
'User deleted'						=>  'El usuario ha sido borrado.',
'User failed'                       =>  'Error al crear el usuario, no se ha introducido ninguna contraseña.',
'User created'                      =>  'Usuario creado',
'Cache cleared'						=>  'Los ficheros de la caché han sido eliminados.',

//
// Miscellaneous
//

'Announcement'						=>	'Anuncio',
'Options'							=>	'Ajustes globales',
'Features'							=>	'Características',
'Submit'							=>	'Enviar', // "Name" of submit buttons
'Search'							=>	'Buscar',
'Ban message'						=>	'Estás expulsado de este foro.',
'Ban message 2'						=>	'La expulsión expira al final de',
'Ban message 3'						=>	'El administrador o moderador que te expulsó ha dejado el siguiente mensaje:',
'Ban message 4'						=>	'Please direct any inquiries to the forum administrator at',
'Never'								=>	'Nunca',
'Today'								=>	'Hoy',
'Yesterday'							=>	'Ayer',
'Info'								=>	'Info', // A common table header
'Maintenance'						=>	'Mantenimiento',
'Invalid email'						=>	'El email que has introducido no es válido.',
'Required'							=>	'(Requerido)',
'required field'					=>	'es un campo requerido.', // For javascript form validation
'Last post'							=>	'Último mensaje',
'by'								=>	'por', // As in last post by some user
'New posts'							=>	'Nuevos mensajes', // The link that leads to the first new post
'New posts info'					=>	'Ir al primer mensaje nuevo en este tema.', // The popup text for new posts links
'Username'							=>	'Usuario',
'Password'							=>	'Contraseña',
'Send email'						=>	'Enviar email',
'Moderated by'						=>	'Moderado por',
'Registered table'					=>	'Registrado',
'Subject'							=>	'Asunto',
'Start typing'                      =>  'Start typing...',
'Message'							=>	'Mensaje',
'Topic'								=>	'Tema',
'Forum'								=>	'Foro',
'Posts table'						=>	'Mensajes',
'Replies forum'						=>	'Respuestas',
'Page'								=>	'Página %s',
'BBCode'							=>	'BBCode',
'img tag'							=>	'etiqueta [img]',
'Smilies'							=>	'Smilies',
'and'								=>	'y',
'Image link'						=>	'imagen', // This is displayed (i.e. <image>) instead of images when "Show images" is disabled in the profile
'wrote'								=>	'escribió', // For [quote]'s
'Mailer'							=>	'%s Mailer', // As in "MyForums Mailer" in the signature of outgoing emails
'Spacer'							=>	'…', // Ellipsis for paginate

//
// Title
//

'Title'								=>	'Título',
'Member'							=>	'Miembro',
'Moderator'							=>	'Moderador',
'Administrator'						=>	'Administrador',
'Banned'							=>	'Expulsado',
'Guest'								=>	'Invitado',

//
// Stuff for include/parser.php
//

'BBCode error no opening tag'		=>	'[/%1$s] was found without a matching [%1$s]',
'BBCode error invalid nesting'		=>	'[%1$s] was opened within [%2$s], this is not allowed',
'BBCode error invalid self-nesting'	=>	'[%s] was opened within itself, this is not allowed',
'BBCode error no closing tag'		=>	'[%1$s] was found without a matching [/%1$s]',
'BBCode error empty attribute'		=>	'[%s] tag had an empty attribute section',
'BBCode list size error'			=>	'Your list was too long to parse, please make it smaller!',

// Stuff for the navigator (top of every page)

//
// Header
//

'Search in posts'					=>	'Buscar en los mensajes',

//
// User menu
//

'Support'							=>	'Soporte',
'Help'								=>	'Ayuda',
'Index'								=>	'Inicio',
'User list'							=>	'Usuarios',
'Rules'								=>	'Reglas',
'Register'							=>	'Registrarse',
'Registered'						=>	'Registrado desde',
'Login'								=>	'Iniciar Sesión',
'Profile'							=>	'Perfil',
'Logout'							=>	'Cerrar sesión',
'Backstage'							=>	'Administración',
'New posts header'					=>	'Nuevo',
'Active topics'						=>	'Activo',
'Unanswered topics'					=>	'Sin respuesta',
'Posted topics'						=>	'Posted',
'Show new posts'					=>	'Buscar temas con nuevos mensajes desde tu última visita.',
'Show active topics'				=>	'Buscar temas con mensajes recientes.',
'Show unanswered topics'			=>	'Encontrar temas sin respuestas.',
'Show posted topics'				=>	'Encontrar temas en los que has escrito.',
'Mark as read'						=>	'Marcar como leído',
'Title separator'					=>	' / ',

//
// Stuff for the page footer
//

'Moderate topic'					=>	'Moderar tema',
'All'								=>	'Mostrar todos los mensajes',
'Move topic'						=>	'Mover tema',
'Open topic'						=>	'Abrir tema',
'Close topic'						=>	'Cerrar tema',
'Unstick topic'						=>	'Unstick topic',
'Stick topic'						=>	'Fijar tema',
'Moderate forum'					=>	'Moderar foro',
'Powered by'						=>	'Potenciado por %s',
'Thanks'							=>	'Gracias por usar %s',
'Toggle Dropdown'					=>	'Toggle Dropdown',

//
// Debug information
//

'Debug table'						=>	'Información de depuración',
'Querytime'							=>	'Generado en %1$s segundos, %2$s consultas ejecutadas.',
'Memory usage'						=>	'Memoria usada: %1$s',
'Peak usage'						=>	'(Peak: %1$s)',
'Query times'						=>	'Time (s)',
'Query'								=>	'Consulta',
'Total query time'					=>	'Total query time: %s',

//
// First run
//

'First run message'					=>	'Wow, es genial tenerte aquí, bienvenido y gracias por unirte. Hemos creado tu cuenta y ya estás listo empezar. Aquí puedes ver algunas acciones que puedes hacer lo primero.',
'Hi there'							=>	'Hola, %s.',
'Welcome to'						=>	'Bienvenido a %s',
'Change your avatar'				=>	'Cambiar avatar',
'Extend profile'					=>	'Modifica tus detalles',
'Get help'							=>	'Obtén ayuda',
'Do not show again'					=>	'No mostrar de nuevo',
'Search the board'					=>	'Buscar en el foro',

//
// For extern.php RSS feed
//

'RSS description'					=>	'The most recent topics at %s.',
'RSS description topic'				=>	'The most recent posts in %s.',
'RSS reply'							=>	'Re: ', // The topic subject will be appended to this string (to signify a reply)
'RSS active topics feed'			=>	'RSS active topics feed',
'Atom active topics feed'			=>	'Atom active topics feed',
'RSS forum feed'					=>	'RSS forum feed',
'Atom forum feed'					=>	'Atom forum feed',
'RSS topic feed'					=>	'RSS topic feed',
'Atom topic feed'					=>	'Atom topic feed',

//
// Admin related stuff in the header
//

'New reports'						=>	'There are new reports',
'Maintenance mode enabled'			=>	'¡El modo de mantenimiento está habilitado!',

//
// Units for file sizes
//

'Size unit B'						=>	'%s B',
'Size unit KiB'						=>	'%s KiB',
'Size unit MiB'						=>	'%s MiB',
'Size unit GiB'						=>	'%s GiB',
'Size unit TiB'						=>	'%s TiB',
'Size unit PiB'						=>	'%s PiB',
'Size unit EiB'						=>	'%s EiB',

//
// Language for installation
//

'Choose install language'		=>	'Elige el idioma de la instalación',
'Choose install language info'	=>	'El idioma usado para esta instalación. El idioma por defecto del foro se puede configurar más adelante.',
'Install language'				=>	'Idioma de instalación',
'Change language'				=>	'Cambiar idioma',
'Already installed'				=>	'Parece que Luna ya está instalado. Deberías ir <a href="index.php">here</a> en su lugar.',
'You are running error'			=>	'Estás ejecutando %1$s v%2$s. Luna %3$s requiere al menos %1$s v%4$s para funcionar. Debes actualizar la versión de %1$s antes de continuar.',
'My Luna Forum'				=>	'Mi foro Luna',
'Description'					=>	'Puedes hacer cualquier cosa',
'Username 1'					=>	'Los nombres de usuario deben tener al menos 2 caracteres.',
'Username 2'					=>	'Los nombres de usuario no deben tener más de 25 caracteres.',
'Username 3'					=>	'El nombre de usuario \'guest\' está reservado.',
'Username 4'					=>	'Los nombres de usuario no deben tener un formato de IP.',
'Username 5'					=>	'Los nombres de usuario no deben de contener los caracteres \', " y [ o ] a la vez.',
'Username 6'					=>	'Los nombres de usuario no deben de contener ningún código BBCode que use el foro.',
'Short password'				=>	'Las contraseñas deben de tener al menos 6 caracteres.',
'Passwords not match'			=>	'Las contraseñas no coinciden.',
'Wrong email'					=>	'El email del administrador no es válido.',
'No board title'				=>	'Debes ingresar el título del foro.',
'Error default language'		=>	'El idioma por defecto elegido no parece existir.',
'Error default style'			=>	'El estilo por defecto elegido no parece existir.',
'No DB extensions'				=>	'PHP necesita soporte para MySQL o SQLite para poder ejecutar Luna.',
'Administrator username'		=>	'Usuario',
'Administrator password 1'		=>	'Contraseña de administrador 1',
'Administrator password 2'		=>	'Contraseña de administrador 2',
'Administrator email'			=>	'Email',
'Board title'					=>	'Título del foro',
'Base URL'						=>	'Sin barra final',
'Required field'				=>	'es un campo requerido.',
'Luna Installation'			=>	'Instalación de Luna',
'Install'						=>	'Instalar Luna %s',
'Errors'						=>	'Los errores siguientes necesitan ser corregidos:',
'Database setup'				=>	'Configurar la base de datos',
'Select database'				=>	'Selecciona el tipo de base de datos',
'Info 1'						=>	'¿Qué base de datos quieres utilizar?',
'Database type'					=>	'Tipo',
'Info 2'						=>	'¿Dónde está el servidor?',
'Info 3'						=>	'El nombre de la base de datos',
'Database server hostname'		=>	'Servidor',
'Database name'					=>	'Nombre',
'Database enter informations'	=>	'Ingresa el nombre de usuario de la base de datos y la contraseña.',
'Database username'				=>	'Usuario',
'Info 4'						=>	'El nombre de usuario de la base de datos',
'Database password'				=>	'Contraseña',
'Info 5'						=>	'Aplicar para más instalaciones de Luna en esta base de datos',
'Table prefix'					=>	'Prefijo de las tablas',
'Administration setup'			=>	'Configuración del administrador',
'Info 6'						=>	'De 2 a 25 caracteres de largo',
'Info 7'						=>	'Al menos 6 caracteres de largo',
'Confirm password'				=>	'Confirmar contraseña',
'Board setup'					=>	'Configuración del foro',
'Board description'				=>	'Descripción del foro',
'Appearance'					=>	'Apariencia',
'Default language'				=>	'Idioma por defecto',
'Default style'					=>	'Estilo por defecto',
'Start install'					=>	'Empezar instalación',
'DB type not valid'				=>	'\'%s\' no es un tipo de base de datos válido.',
'Table prefix error'			=>	'El prefijo de la tabla \'%s\' contiene caracteres ilegales o es demasiado largo. El prefijo puede estar formado por letras a-z, números y guiones bajos. No debe de empezar por número. La longitud máxima son 40 caracteres. Por favor, elige otro prefijo distinto.',
'Prefix reserved'				=>	'El prefijo de la tabla \'sqlite_\' está reservado para el uso de SQLite. Elije otro prefijo distinto.',
'Existing table error'			=>	'Una tabla llamada \'%susers\' está presente en la base de datos \'%s\'. Esto puede significar que Luna ya esté instalado o que otro software está utilizando una o más tablas que Luna requiere. Si quieres instalar múltiples copias de Luna en la misma base de datos, debes elegir otro prefijo distinto.',
'InnoDB off'					=>	'InnoDB parece no estar habilitado. Por favor elige otro motor de base de datos que no tenga soporte InnoDB o habilita InnoDB en tu servidor MySQL',
'Administrators'				=>	'Administradores',
'Moderators'					=>	'Moderadores',
'Guests'						=>	'Invitados',
'Members'						=>	'Miembros',
'New member'					=>	'Nuevo miembro',
'Maintenance message'			=>	'Los foros están temporalmente en mantenimiento. Por favor prueba otra vez mas tarde.',
'Alert cache'					=>	'<strong>¡No se puede escribir en el directorio cache!</strong> Para hacer funcionar Luna correctamente el directorio <em>%s</em> debe de tener permisos de escritura. Utiliza chmod para asignar los permisos adecuados. En caso de duda, utiliza chmod 0777.',
'Alert avatar'					=>	'<strong>¡No se puede escribir en el directorio avatar!</strong> Si quieres que los usuarios pueden subir su propio avatar <em>%s</em> debe de tener permisos de escritura. Puedes elegir más tarde el directorio para guardar los avatares (Administración/Ajustes). Utiliza chmod para asignar los permisos adecuados. En caso de duda, utiliza chmod 0777.',
'Alert upload'					=>	'<strong>¡La subida de archivos está prohibida en este servidor!</strong> Si quieres que los usuarios pueden subir su propio avatar debes habilitar la configuracion <em>file_uploads</em> en la configuración de PHP. Una vez habilitada, la subida de avatares puede ser habilitada en Administración/Ajustes/Características.',
'Luna has been installed'	=>	'Luna ha sido instalado. Para finalizar la instalación sigue las instrucciones de abajo.',
'Info 8'						=>	'Para finalizar la instalación, debes hacer click en el botón de abajo para descargar un archivo llamado config.php. Necesitas subir este archivo a la carpeta raíz de Luna.',
'Info 9'						=>	'Una vez que hayas subido el archivo config.php, Luna estará completamente instalado. En este punto puedes <a href="index.php">ir al índice de los foros</a>.',
'Download config.php file'		=>	'Descargar el archivo config.php',
'Luna fully installed'		=>	'Luna ha sido instalado correctamente. Puedes <a href="index.php">ir al índice de los foros</a>.',

//
// Language for updating
//

'Update Luna'				=>	'Actualizar Luna',
'Down'							=>	'Los foros están temporalmente en mantenimiento. Por favor inténtalo más tarde.',

'Version mismatch error'		=>	'Version mismatch. The database \'%s\' doesn\'t seem to be running a Luna database schema supported by this update script.',
'No update error'				=>	'Your forum is already as up-to-date as this script can make it',

'Start update'					=>	'Empezar actualización',
'Correct errors'				=>	'The following errors need to be corrected:',

'Preparsing item'				=>	'Preparsing %1$s %2$s …',
'Rebuilding index item'			=>	'Rebuilding index for %1$s %2$s',

'post'							=>	'post',
'topic'							=>	'topic',
'signature'						=>	'firma',

// Language for frontend

//
// Language for delete.php
//

'Delete post'			=>	'Borrar mensaje',
'Topic warning'			=>	'Warning! This is the first post in the topic, the whole topic will be permanently deleted.',
'Delete info'			=>	'The post you have chosen to delete is set out below for you to review before proceeding.',
'Reply by'				=>	'Reply by %s - %s',
'Topic by'				=>	'Topic started by %s - %s',
'Delete'				=>	'Borrar',

//
// Language for help.php
//

'produces'				=>	'produces',

'BBCode info'			=>	'BBCode is a collection of tags that are used to change the look of text in this forum. Below you can find all the available BBCodes and how to use them. Administrators have the ability to disable BBCode. You can tell if BBCode is disabled whenever you post a message or edit your signature.',

'Text style'			=>	'Text style',
'Text style info'		=>	'The following tags change the appearance of text:',
'Bold text'				=>	'Bold text',
'Underlined text'		=>	'Underlined text',
'Italic text'			=>	'Italic text',
'Strike-through text'	=>	'Strike-through text',
'Red text'				=>	'Red text',
'Blue text'				=>	'Blue text',
'Heading text'			=>	'Heading text',
'Inserted text'			=>	'Inserted text',
'Sub text'				=>	'Subscript text',
'Sup text'				=>	'Superscript text',

'Multimedia'			=>  'Multimedia',
'Links info'			=>	'You can create links to other documents or to email addresses using the following tags:',
'My email address'		=>	'My email address',
'Images info'			=>	'If you want to display an image you can use the img tag. The text appearing after the "=" sign in the opening tag is used for the alt attribute and should be included whenever possible.',
'Luna bbcode test'  =>  'Luna BBCode Test',
'Video info'			=>  'Luna supports embedding from DailyMotion, Vimeo and YouTube. With the BBCode below, you can embed one of those services videos.',
'Video link'			=>  'Put the link to the video here', 

'Quotes'				=>	'Citas',
'Quotes info'			=>	'If you want to quote someone, you should use the quote tag.',
'Quotes info 2'			=>	'If you don\'t want to quote anyone in particular, you can use the quote tag without specifying a name. If a username contains the characters [ or ] you can enclose it in quote marks.',
'Quote text'			=>	'This is the text I want to quote.',
'produces quote box'	=>	'produces a quote box like this:',

'Code'					=>	'Código',
'Code info'				=>	'When displaying source code you should make sure that you use the code tag. Text displayed with the code tag will use a monospaced font and will not be affected by other tags.',
'Syntax info'			=>	'You can also use syntax highlighting for markup, CSS, PHP and JavaScript. The language has to be noted on the first line inside the codetag and can\'t be on the same line as <code>[code]</code>.',
'Code text'				=>	'This is some code.',
'produces code box'		=>	'produces a code box like this:',

'Lists'					=>	'Lists',
'List info'				=>	'To create a list you can use the list tag. You can create 2 types of lists using the list tag.',
'List text 1'			=>	'Example list item 1.',
'List text 2'			=>	'Example list item 2.',
'List text 3'			=>	'Example list item 3.',
'produces list'			=>	'produces a bulleted list.',
'produces decimal list'	=>	'produces a numbered list.',

'Bold'					=>	'Negrita',
'Underline'				=>	'Subrayado',
'Italic'				=>	'Cursiva',
'Strike'				=>	'Tachado',
'URL'					=>	'URL',
'List'					=>	'Lista',
'List item'				=>	'List item',
'Heading'				=>	'Cabecera',
'Inline code'			=>	'Inline code',
'Superscript'			=>	'Superíndice',
'Subscript'				=>	'Subíndice',
'Video'					=>	'Vídeo',
'Image'					=>	'Imagen',

'Smilies info'			=>	'If enabled, the forum can convert a series of smilies to graphical representations. The following smilies you can use are:',

'General use'					=>	'General use',
'General use info'				=>	'Explains some of the basics on how to work with this forum software.',
'Forums and topics'				=>	'Forums and topics',
'Labels question'				=>	'What do the labels in front of topic titles mean?',
'Labels info'					=>	'You\'ll see that some of the topics are labeled, different labels have different meanings.',
'Label'							=>	'Etiqueta',
'Explanation'					=>	'Explanation',
'Sticky explanation'			=>	'Sticky topics are usually important topics which you should read. It\'s worth it to take a look there.',
'Closed explanation'			=>	'When a you see a closed label, it means you can\'t post on that topic any more, unless you have a permission that overwrites this. The topic is still available to read, through.',
'Moved explanation'				=>	'This topic has been moved to another forum. Admins and moderators can choose to show this notification, or simply not show it. The original forum where this topic was located in, won\'t show any topic stats anymore.',
'Star'							=>	'Star',
'Star explanation'				=>	'You\'re following this topic, they will show up in you\'re subscription list.',
'Posted explanation'			=>	'This label means you have made a post in this topic.',
'Content question'				=>	'Smilies, signatures, avatars and images are not visible?',
'Content answer'				=>	'You can change the behavior of the topic view in your profile settings. There you can enable smilies, signatures, avatars and images in posts, but they should be enabled by default unless your forum admin has disabled those features. You can see if images and smilies are disabled below the editor. If the labels have a red background, those features aren\'t available for you.',
'Topics question'				=>	'Why can\'t I see any topics or forums?',
'Topics answer'					=>	'You might not have the correct permissions to do so, ask the forum administrator for more help.',
'Profile question'				=>	'Why can\'t I see any profiles?',
'Profile answer'				=>	'You might not have the correct permissions to do so, ask the forum administrator for more help.',
'Information question'			=>	'My profile doesn\'t contain as much as others?',
'Information answer'			=>	'You\'re profile will only display fields that are enabled and filled in on your profile personality page. You might want to see if you missed some fields.',
'Advanced search question'		=>	'Are there more options to search?',
'Advanced search answer'		=>	'When you go to the search page, you\'ll find yourself on a page with 1 search box. Below that search box there is a link to Advanced search, here you can find more search options! This feature may not be available on your device, if disabled by the forum admin.',
'More search question'			=>	'Why can\'t search in more then 1 forum at once?',
'More search answer'			=>	'You might not have the correct permissions to do so, ask the forums administrator for more help.',
'Moderating'					=>	'Moderating',
'Moderating info'				=>	'Admins and moderators need help sometimes, too! The basics of moderating are explained here.',
'Moderate forum question'		=>	'How do I moderate a forum?',
'Moderate forum answer'			=>	'The moderation options are available at the bottom of the page. Those features aren\'t available for all moderators. When you click this button, you will be send to a page where you can manage the current forum. From there, you can move, delete, merge, close and open multiple topics at once.',
'Moderate topic question'		=>	'How do I moderate a topic?',
'Moderate topic answer 1'		=>	'The moderation options are available at the bottom of the page. Those features aren\'t available for all moderators. When you click this button, you will be send to a page where you can manage the current topic. From there, you can select multiple post to delete or split from the current topic at once.',
'Moderate topic answer 2'		=>	'Next to the "Moderate topic" button, you can find options to move, open or close the topic. You can also make it a sticky topic from there, or unstick it.',
'Moderate user question'		=>	'How do I moderate an user?',
'Moderate user answer 1'		=>	'Moderating options are available in the users profile. You can find the moderation options under "Administration" in the users profile menu. Those features aren\'t available for all moderators.',
'Moderate user answer 2'		=>	'The Administration page allow you to check if the user has an admin note, and you can also change that note if required. You can also change the post count of the user. At this page, the user can also be given moderator permissions on a per-forum base, through the user must have a moderator account to be able to actually use those permissions.',
'Moderate user answer 3'		=>	'Finally, you can ban or delete a user from his profile. If you want to ban and/or delete multiple users at once, you\'re probably better off with the advanced user management features in the Backstage.',

//
// Language for index.php
//

'Topics'		=>	'Temas',
'Link to'		=>	'Link to:', // As in "Link to: http://getluna.org/"
'Empty board'	=>	'Board is empty.',
'Newest user'	=>	'Último usuario',
'Users online'	=>	'Usuario(s) online',
'Guests online'	=>	'Invitado(s) online',
'No of users'	=>	'Usuarios',
'No of topics'	=>	'Temas',
'No of post'	=>	'Mensajes',
'Online'		=>	'Online:', // As in "Online: User A, User B etc."
'Board stats'	=>	'Board statistics',

//
// Language for login.php
//

'Wrong user/pass'			=>	'Wrong username and/or password.',
'Forgotten pass'			=>	'Recordar contraseña',
'No email match'			=>	'There is no user registered with the email address',
'Request pass'				=>	'Solicitar contraseña',
'Remember me'				=>	'Recuérdame',
'New password errors'		=>	'Password request error',
'New passworderrors info'	=>	'The following error needs to be corrected before a new password can be sent:',

'Forget mail'				=>	'An email has been sent to the specified address with instructions on how to change your password. If it does not arrive you can contact the forum administrator at',
'Password request flood'	=>  'This account has already requested a password reset in the past hour. Please wait %s minutes before requesting a new password again.',

//
// Send email
//

'Form email disabled'			=>	'The user you are trying to send an email to has disabled form email.',
'No email subject'				=>	'You must enter a subject.',
'No email message'				=>	'You must enter a message.',
'Too long email message'		=>	'Messages cannot be longer than 65535 characters (64 KB).',
'Email flood'					=>  'At least %s seconds have to pass between sent emails. Please wait %s seconds and try sending again.',
'Send email to'					=>	'Send email to',

//
// Report
//

'No reason'						=>	'You must enter a reason.',
'Reason too long'				=>	'Your message must be under 65535 bytes (~64kb).',
'Report flood'					=>  'At least %s seconds have to pass between reports. Please wait %s seconds and try sending again.',
'Report post'					=>	'Reportar mensaje',
'Reason'						=>	'Reason',
'Reason desc'					=>	'Please enter a short reason why you are reporting this post',

//
// Subscriptions
//

'Not subscribed topic'			=>	'You\re not subscribed to this topic.',

//
// General forum and topic moderation
//

'Moderate'						=>	'Moderar',
'Select'						=>	'Seleccionar', // the header of a column of checkboxes
'Move'							=>	'Mover',
'Split'							=>	'Separar',
'Merge'							=>	'Unir',

//
// Moderate forum
//

'Open'							=>	'Abrir',
'Close'							=>	'Cerrar',
'Move topics'					=>	'Mover temas',
'Move to'						=>	'Mover a',
'Nowhere to move'				=>	'There are no forums into which you can move topics.',
'Leave redirect'				=>	'Leave redirect topic(s)',
'Delete topics'					=>	'Borrar temas',
'Delete topics comply'			=>	'Are you sure you want to delete the selected topics?',
'No topics selected'			=>	'You must select at least one topic for move/delete/open/close.',
'Not enough topics selected'	=>	'You must select at least two topics for merge.',
'Merge topics'					=>	'Merge topics',
'New subject'					=>	'New subject',

//
// Split multiple posts in topic
//

'Split posts'					=>	'Split posts',

//
// Delete multiple posts in topic
//

'Delete posts'					=>	'Borrar mensajes',
'Cannot select first'			=>	'First post cannot be selected for split/delete.',
'Delete posts comply'			=>	'Are you sure you want to delete the selected posts?',
'No posts selected'				=>	'You must select at least one post for split/delete.',

//
// Get host
//

'Host info 1'					=>	'La dirección IP es: %s',
'Host info 2'					=>	'The host name is: %s',
'Show more users'				=>	'Show more users for this IP',

//
// Language for post.php and edit.php
// Post validation stuff (many are similiar to those in edit.php)
//

'No subject'		=>	'Topics must contain a subject.',
'No subject after censoring'	=>	'Topics must contain a subject. After applying censoring filters, your subject was empty.',
'Too long subject'	=>	'Subjects cannot be longer than 70 characters.',
'No message'		=>	'You must enter a message.',
'No message after censoring'	=>	'You must enter a message. After applying censoring filters, your message was empty.',
'Too long message'	=>	'Posts cannot be longer than %s bytes.',
'All caps subject'	=>	'Subjects cannot contain only capital letters.',
'All caps message'	=>	'Posts cannot contain only capital letters.',
'Empty after strip'	=>	'It seems your post consisted of empty BBCodes only. It is possible that this happened because e.g. the innermost quote was discarded because of the maximum quote depth level.',

//
// Posting
//

'Post errors'		=>	'Post errors',
'Post preview'		=>	'Post preview',
'Guest name'		=>	'Nombre', // For guests (instead of Username)
'Post a reply'		=>	'Post a reply',
'Post new topic'	=>	'Post topic',
'Hide smilies'		=>	'Never show smilies as icons for this post',
'Subscribe topic'	=>	'Subscribe to this topic',
'Stay subscribed'	=>	'Stay subscribed to this topic',
'Topic review'		=>	'Topic review (newest first)',
'Flood start'		=>  'At least %s seconds have to pass between posts. Please wait %s seconds and try posting again.',
'Preview'			=>	'Vista previa',

//
// Edit post
//

'Silent edit'		=>	'Silent edit (don\'t display "Edited by ..." in topic view)',
'Edit post'			=>	'Edit post',

//
// Language for both me.php and register.php
//

'Email legend'				=>	'Enter a valid email address',
'Time zone'					=>	'Time zone',
'DST'						=>	'Advance time by 1 hour for daylight saving.',
'Time format'				=>	'Time format',
'Date format'				=>	'Date format',
'Default'					=>	'Default',
'Language'					=>	'Idioma',
'Email setting info'		=>	'Email settings',
'Email setting 1'			=>	'Display your email address.',
'Email setting 2'			=>	'Hide your email address but allow form email.',
'Email setting 3'			=>	'Hide your email address and disallow form email.',

'Username too short'		=>	'Los nombres de usuario deben tener al menos 2 caracteres. Por favor elige otro nombre más largo.',
'Username too long'			=>	'Los nombres de usuario no deben tener más de 25 caracteres. Por favor elige otro nombre más corto.',
'Username guest'			=>	'The username guest is reserved. Please choose another username.',
'Username IP'				=>	'Los nombres de usuario no deben tener un formato de IP. Por favor elige otro nombre.',
'Username reserved chars'	=>	'Los nombres de usuario no deben de contener los caracteres \', " y [ o ] a la vez. Por favor elige otro nombre.',
'Username BBCode'			=>	'Los nombres de usuario no deben de contener ningún código BBCode que use el foro. Por favor elige otro nombre.',
'Banned username'			=>	'The username you entered is banned in this forum. Please choose another username.',
'Pass too short'			=>	'Passwords must be at least 6 characters long. Please choose another (longer) password.',
'Pass not match'			=>	'Las contraseñas no coinciden.',
'Banned email'				=>	'The email address you entered is banned in this forum. Please choose another email address.',
'Dupe email'				=>	'Someone else is already registered with that email address. Please choose another email address.',
'Sig too long'				=>	'Signatures cannot be longer than %1$s characters. Please reduce your signature by %2$s characters.',
'Sig too many lines'		=>	'Signatures cannot have more than %s lines.',
'Bad ICQ'					=>	'You entered an invalid ICQ UIN. Please go back and correct.',

//
// Language for me.php
//

'Section personality'			=>	'Personality',
'Section admin'					=>	'Administration',

//
// Miscellaneous
//

'Personal details legend'		=>	'Contact details',
'User tools'					=>	'User tools',
'Unknown'          				=>  'Unknown',

//
// Password stuff
//

'Pass key bad'					=>	'The specified password activation key was incorrect or has expired. Please re-request a new password. If that fails, contact the forum administrator at',
'Pass updated'					=>	'Your password has been updated. You can now login with your new password.',
'Wrong pass'					=>	'Wrong old password.',
'Change pass'					=>	'Cambiar contraseña',
'Old pass'						=>	'Old password',
'New pass'						=>	'New password',
'Confirm new pass'				=>	'Confirmar nueva contraseña',
'Pass info'						=>	'Passwords must be at least 6 characters long and are case sensitive',

//
// Email stuff
//

'Email key bad'					=>	'The specified email activation key was incorrect or has expired. Please re-request change of email address. If that fails, contact the forum administrator at',
'Email updated'					=>	'Your email address has been updated.',
'Activate email sent'			=>	'An email has been sent to the specified address with instructions on how to activate the new email address. If it doesn\'t arrive you can contact the forum administrator at',
'Email instructions'			=>	'An email will be sent to your new address with an activation link. You must click the link in the email you receive to activate the new address.',
'Change email'					=>	'Change email address',
'New email'						=>	'New email',

//
// Avatar upload stuff
//

'Avatars disabled'				=>	'The administrator has disabled avatar support.',
'Too large ini'					=>	'The selected file was too large to upload. The server didn\'t allow the upload.',
'Partial upload'				=>	'The selected file was only partially uploaded. Please try again.',
'No tmp directory'				=>	'PHP fue incapaz de guardar el archivo subido a un directorio temporal.',
'No file'						=>	'You did not select a file for upload.',
'Bad type'						=>	'The file you tried to upload is not of an allowed type. Allowed types are gif, jpeg and png.',
'Too wide or high'				=>	'The file you tried to upload is wider and/or higher than the maximum allowed',
'Too large'						=>	'The file you tried to upload is larger than the maximum allowed',
'pixels'						=>	'pixels',
'bytes'							=>	'bytes',
'Move failed'					=>	'The server was unable to save the uploaded file. Please contact the forum administrator at',
'Unknown failure'				=>	'An unknown error occurred. Please try again.',
'Avatar desc'					=>	'An avatar is a small image that will be displayed under your username in your posts. It must not be any bigger than',
'Upload avatar'					=>	'Subir avatar',
'Delete avatar'					=>	'Borrar avatar', // only for admins
'File'							=>	'File',
'Upload'						=>	'Upload', // submit button

//
// Form validation stuff
//

'Forbidden title'				=>	'The title you entered contains a forbidden word. You must choose a different title.',

//
// Profile display stuff
//

'Email info'					=>	'Email: %s',
'Last visit info'				=>	'Última visita',
'Show posts'					=>	'Mostrar mensajes',
'Show topics'					=>	'Mostrar temas',
'Show subscriptions'			=>	'Mostrar suscripciones',
'Contact'						=>	'Contact',
'Realname'						=>	'Nombre',
'Location'						=>	'Ubicación',
'Website'						=>	'Página web',
'Invalid website URL'			=>	'La dirección de la página web que has ingresado es inválida.',
'Microsoft'						=>	'Cuenta Microsoft',
'Facebook'						=>	'Facebook',
'Twitter'						=>	'Twitter',
'Google+'						=>	'Google+',
'Avatar'						=>	'Avatar',
'Sig max size'					=>	'Longitud máxima: %s caracteres / Líneas máximas: %s',
'Avatar info'					=>	'Sube una imagen que te represente',
'Change avatar'					=>	'Cambiar avatar',
'Signature info'				=>	'Escribe un pequeño texto para adjuntar cada mensaje que hagas',
'Sig preview'					=>	'Vista previa firma',
'No sig'						=>	'No hay ninguna firma guardada en el perfil.',
'Signature quote/code/list/h'	=>	'The quote, code, list, and heading BBCodes are not allowed in signatures.',
'Posts per page'				=>	'Posts per page',
'Topics per page'				=>	'Topics per page',
'Leave blank'					=>	'Dejar en blanco para usar por defecto',
'Notify full'					=>	'Include a plain text version of new posts in subscription notification emails.',
'Auto notify full'				=>	'Automatically subscribe to every topic you post in.',
'Show smilies'					=>	'Show smilies as graphic icons.',
'Show images'					=>	'Show images in posts.',
'Show images sigs'				=>	'Show images in user signatures.',
'Show avatars'					=>	'Show user avatars in posts.',
'Show sigs'						=>	'Show user signatures.',
'Style'							=>	'Style',
'Backstage Accent'				=>	'Backstage Accent',
'Admin note'					=>	'Admin note',
'Post display'					=>	'Post display',

//
// Administration stuff
//

'Group membership legend'		=>	'Choose user group',
'Save'							=>	'Guardar',
'Set mods legend'				=>	'Set moderator access',
'Moderator in info'				=>	'Choose which forums this user should be allowed to moderate. Note: This only applies to moderators. Administrators always have full permissions in all forums.',
'Update forums'					=>	'Update forums',
'Delete ban legend'				=>	'Delete or ban user',
'Delete user'					=>	'Delete user',
'Ban user'						=>	'Ban user',
'Confirm delete user'			=>	'Confirm delete user',
'Confirmation info'				=>	'Please confirm that you want to delete the user', // the username will be appended to this string
'Delete warning'				=>	'Warning! Deleted users and/or posts cannot be restored. If you choose not to delete the posts made by this user, the posts can only be deleted manually at a later time.',
'Delete all posts'				=>	'Delete any posts and topics this user has made',
'No delete admin message'		=>	'Administrators cannot be deleted. In order to delete this user, you must first move him/her to a different user group.',

//
// Language for register.php
//

'No new regs'				=>	'This forum is not accepting new registrations.',
'Forum rules'				=>	'Forum rules',
'Rules legend'				=>	'You must agree to the following in order to register',
'Registration flood'		=>	'A new user was registered with the same IP address as you within the last hour. To prevent registration flooding, at least an hour has to pass between registrations from the same IP. Sorry for the inconvenience.',
'Agree'						=>	'Agree',
'Cancel'					=>	'Cancelar',
'Register legend'			=>	'Enter the requested data',

//
// Form validation stuff (some of these are also used in post.php)
//

'Registration errors'		=>	'Registration errors',
'Username censor'			=>	'The username you entered contains one or more censored words. Please choose a different username.',
'Username dupe 1'			=>	'Someone is already registered with the username',
'Username dupe 2'			=>	'The username you entered is too similar. The username must differ from that by at least one alphanumerical character (a-z or 0-9). Please choose a different username.',
'Email not match'			=>	'Email addresses do not match.',

//
// Registration email stuff
//

'Reg email'					=>	'Thank you for registering. Your password has been sent to the specified address. If it doesn\'t arrive you can contact the forum administrator at',

//
// Register info
//

'Username legend'			=>	'Enter a username between 2 and 25 characters long',
'Email help info'			=>	'Your password will be sent to this address, make sure it\'s valid',
'If human'					=>	'If you are human please leave this field blank!',
'Spam catch'				=>	'Unfortunately it looks like your request is spam. If you feel this is a mistake, please direct any inquiries to the forum administrator at',

//
// Language for search.php
//

'User search'						=>	'User search',
'No search permission'				=>	'You do not have permission to use the search feature.',
'Search flood'						=>  'At least %s seconds have to pass between searches. Please wait %s seconds and try searching again.',
'Search criteria legend'			=>	'Enter your search criteria',
'Search info'						=>	'To search by keyword, enter a term or terms to search for. Separate terms with spaces. Use AND, OR and NOT to refine your search. To search by author enter the username of the author whose posts you wish to search for. Use wildcard character * for partial matches.',
'Keyword search'					=>	'Keyword search',
'Author search'						=>	'Author search',
'All forums'						=>	'All forums',
'Search in'							=>	'Search in',
'Message and subject'				=>	'Message text and topic subject',
'Message only'						=>	'Message text only',
'Topic only'						=>	'Topic subject only',
'Sort by'							=>	'Sort by',
'Sort order'						=>	'Sort order',
'Search results info'				=>	'You can choose how you wish to sort and show your results.',
'Sort by post time'					=>	'Post time',
'Sort by author'					=>	'Autor',
'Ascending'							=>	'Ascendente',
'Descending'						=>	'Descendente',
'Show as'							=>	'Mostrar como',
'Show as posts'						=>	'Mensajes',
'Advanced search'					=>	'Búsqueda avanzada',

//
// Results
//

'Search results'					=>	'Resultados de la búsqueda',
'Quick search show_new'				=>	'Nuevo',
'Quick search show_recent'			=>	'Activo',
'Quick search show_unanswered'		=>	'Sin respuesta',
'Quick search show_user_topics'		=>	'Temas por %s',
'Quick search show_user_posts'		=>	'Mensajes por %s',
'Quick search show_subscriptions'	=>	'Subscribed by %s',
'By keywords show as topics'		=>	'Temas con mensajes conteniendo \'%s\'',
'By keywords show as posts'			=>	'Mensajes conteniendo \'%s\'',
'By user show as topics'			=>	'Temas con mensajes por %s',
'By user show as posts'				=>	'Mensajes por %s',
'By both show as topics'			=>	'Topics with posts containing \'%s\', by %s',
'By both show as posts'				=>	'Mensajes conteniendo \'%s\', por %s',
'No terms'							=>	'You have to enter at least one keyword and/or an author to search for.',
'No hits'							=>	'Your search returned no hits.',
'No user posts'						=>	'There are no posts by this user in this forum.',
'No user topics'					=>	'There are no topics by this user in this forum.',
'No subscriptions'					=>	'This user is currently not subscribed to any topics.',
'No new posts'						=>	'No hay temas con nuevos mensajes desde tu última visita.',
'No recent posts'					=>	'No new posts have been made within the last 24 hours.',
'No unanswered'						=>	'There are no unanswered posts in this forum.',
'Go to post'						=>	'Go to post',
'Go to topic'						=>	'Ir al tema',

//
// Language for viewtopic.php
//

'Post reply'		=>	'Post reply',
'Topic closed'		=>	'Tema cerrado',
'From'				=>	'Desde:', // User location
'IP address logged'	=>	'IP log',
'Note'				=>	'Note:', // Admin note
'Posts'				=>	'Mensajes:',
'Replies'			=>	'Respuestas:',
'Last edit'			=>	'Last edited by',
'Report'			=>	'Report',
'Edit'				=>	'Editar',
'Quote'				=>	'Citar',
'Is subscribed'		=>	'You are subscribed',
'Unsubscribe'		=>	'Unsubscribe',
'Subscribe'			=>	'Subscribe',
'Quick post'		=>	'Quick post',
'New icon'			=>	'New post',
'Re'				=>	'Re: ',

//
// Language for userlist.php
//

'User search info'	=>	'Enter a username to search for and/or a user group to filter by. Use the wildcard character * for partial matches.',
'User group'		=>	'User group',
'No of posts'		=>	'Mensajes',
'All users'			=>	'All users',
'Sort no of posts'	=>	'Sort by number of posts',
'Sort username'		=>	'Sort by username',
'Sort registered'	=>	'Sort by registration date',

//
// Language for viewforum.php
//

'Views'			=>	'Visitas',
'Moved'			=>	'Movido',
'Star'			=>	'Star',
'Sticky'		=>	'Fijado',
'Closed'		=>	'Cerrado',
'Empty forum'	=>	'El foro está vacío.',

//
// Language for Backstage
// Language for bans.php
//

'No user message'			=>	'No user by that username registered. If you want to add a ban not tied to a specific username just leave the username blank.',
'No user ID message'		=>	'No user by that ID registered.',
'User is admin message'		=>	'The user %s is an administrator and can\'t be banned. If you want to ban an administrator, you must first demote him/her.',
'User is mod message'		=>	'The user %s is a moderator and can\'t be banned. If you want to ban a moderator, you must first demote him/her.',
'Must enter message'		=>	'You must enter either a username, an IP address or an email address (at least).',
'Cannot ban guest message'	=>	'The guest user cannot be banned.',
'Invalid IP message'		=>	'You entered an invalid IP/IP-range.',
'Invalid e-mail message'	=>	'The email address (e.g. user@domain.com) or partial email address domain (e.g. domain.com) you entered is invalid.',
'Invalid date message'		=>	'You entered an invalid expire date.',
'Invalid date reasons'		=>	'The format should be YYYY-MM-DD and the date must be at least one day in the future.',

'New ban head'				=>	'Add ban',
'Username help'				=>	'The username to ban',
'Username advanced help'	=>	'The username you want to ban. If you want to ban a specific IP/IP-range or email, leave it blank.',

'Ban search head'			=>	'Ban search',
'Ban search info'			=>	'Search for bans in the database. You can enter one or more terms to search for. Wildcards in the form of asterisks (*) are accepted. To show all bans leave all fields empty.',
'Date help'					=>	'(yyyy-mm-dd)',
'Expire after label'		=>	'Expire after',
'Expire before label'		=>	'Expire before',
'Order by label'			=>	'Ordenar por',
'Order by ip'				=>	'IP',
'Order by expire'			=>	'Expire date',
'Submit search'				=>	'Submit search',

'E-mail help'				=>	'The email or email domain you wish to ban',
'IP label'					=>	'IP address/IP-ranges',
'IP help'					=>	'The IP you wish to ban, separate addresses with spaces',
'IP help link'				=>	'Click %s to see IP statistics for this user.',
'Ban advanced head'			=>	'Advanced ban settings',
'Ban advanced subhead'		=>	'Supplement ban with IP and email',
'Ban message label'			=>	'Ban message',
'Ban message help'			=>	'A message for banned users',
'Message expiry subhead'	=>	'Ban message and expiry',
'Expire date label'			=>	'Expire date',
'Expire date help'			=>	'When does the ban expire, blank for manually',

'Results head'				=>	'Search Results',
'Results IP address head'	=>	'IP/IP-ranges',
'Results expire head'		=>	'Expires',
'Results banned by head'	=>	'Expulsado por',
'No match'					=>	'No match',

//
// Language for board.php
//

'Must enter name message'		=>	'You must enter a name',
'Confirm delete cat head'		=>	'Confirm delete category',
'Confirm delete cat info'		=>	'Are you sure that you want to delete the category <strong>%s</strong>?',
'Delete category warn'			=>	'Deleting a category will delete all forums and posts (if any) in this category!',
'Must enter integer message'	=>	'Position must be a positive integer value.',
'Add categories head'			=>	'Añadir categorías',
'Delete categories head'		=>	'Borrar  categorías',
'Edit categories head'			=>	'Editar categorías',
'Category position label'		=>	'Posición',
'Category name label'			=>	'Nombre',

//
// Language fox censoring.php
//

'Must enter word message'	=>	'You must enter a word to censor.',
'Add word subhead'			=>	'Add word',
'Add word info'				=>	'Enter a word that you want to censor and the replacement text for this word. Wildcards are accepted.',
'Censoring enabled'			=>	'<strong>Censoring is enabled in %s.</strong>',
'Censoring disabled'		=>	'<strong>Censoring is disabled in %s.</strong>',
'Censored word label'		=>	'Censored word',
'Replacement label'			=>	'Replacement word',
'Edit remove words'			=>	'Manage words',
'No words in list'			=>	'No censor words in list.',

//
// Language fox database.php
//

'Backup options'		=>	'Backup options',
'Backup type'			=>	'Tipo de copia de seguridad',
'Full'					=>	'Completa',
'Structure only'		=>	'Solo estructura',
'Data only'				=>	'Solo datos',
'Gzip compression'		=>	'Compresión Gzip',
'Start backup'			=>	'Empezar copia de seguridad',

'Backup info 1'			=>	'If your server supports it, you may also gzip-compress the file to reduce its size.',

'Restore complete'		=>	'Restauración completa',
'Restore options'		=>	'Opciones de restauración',
'Start restore'			=>	'Empezar restauración',

'Restore info 1'		=>	'This will perform a full restore of all Luna tables from a saved file. If your server supports it, you may upload a gzip-compressed text file and it will automatically be decompressed. This will overwrite any existing data. The restore may take a long time to process, so please do not move from this page until it is complete.',

'Warning'				=>	'Warning: critical features',

'Additional functions'	=>	'Funciones adicionales',
'Repair all tables'		=>	'Reparar todas las tablas',
'Optimise all tables'	=>	'Optimizar todas las tablas',

'Additional info 1'		=>	'Additional features to help run a database, optimise and repair both do what they say.',

//
// Language for appearance.php, settings.php, email.php and features.php
//

'Bad HTTP Referer message'			=>	'Bad HTTP_REFERER. If you have moved these forums from one location to another or switched domains, you need to update the Base URL manually in the database (look for o_base_url in the config table) and then clear the cache by deleting all .php files in the /cache directory.',
'Must enter title message'			=>	'You must enter a title.',
'SMTP passwords did not match'		=>	'You need to enter the SMTP password twice exactly the same to change it.',
'Enter announcement here'			=>	'Enter your announcement here.',
'Enter rules here'					=>	'Enter your rules here.',
'Default maintenance message'		=>	'The forums are temporarily down for maintenance. Please try again in a few minutes.',
'Timeout error message'				=>	'The value of "Timeout online" must be smaller than the value of "Timeout visit".',

//
// Language for appearance.php
//

'Header appearance'					=>	'Apariencia de la cabecera',
'Footer appearance'					=>	'Apariencia del pie de página',
'Footer'							=>	'Pie de página',
'Display head'						=>	'Display settings',
'Default style help'				=>	'The default style will be used by new users and guests. Users can change the style they use, so changing the default style here won\'t change the design for already existing users. You can also force a style, this will reset the style setting for every user except the guest user.',
'About style'						=>	'Sobre %s',
'version'							=>	'versión %s',
'Released on'						=>	'Publicado el %s',
'Designed for'						=>	'Designed for Luna %s to %s',
'Force style'						=>	'Forzar estilo',
'Set as default'					=>	'Establecer por defecto',
'About'								=>	'Sobre',
'Version number help'				=>	'Show Luna version number in footer.',
'Info in posts help'				=>	'Show information about the poster under the username in topic view.',
'Post count help'					=>	'Show the number of posts a user has made in topic view, profile and user list.',
'Smilies help'						=>	'Convert smilies to small graphic icons in forum posts.',
'Smilies sigs help'					=>	'Convert smilies to small graphic icons in user signatures.',
'Clickable links help'				=>	'Convert URLs automatically to clickable hyperlinks.',
'Topic review label'				=>	'Topic review',
'Topic review help'					=>	'Maximum amount of posts showed when posting',
'Topics per page help'				=>	'Default amount of topics per page',
'Posts per page label'				=>	'Posts per page',
'Posts per page help'				=>	'Default amount of posts per page',
'Indent label'						=>	'Indent size',
'Index panels head'					=>	'Index settings',
'Moderated by help'                 =>  'Show the "Moderated by" list when moderators are set on a per-forum base.',
'Index statistics help'				=>	'Show the statistics panel on the index.',
'Indent help'						=>	'Amount of spaces that represent a tab',
'Quote depth label'					=>	'Maximum [quote] depth',
'Quote depth help'					=>	'Maximum [quote] can be used in [quote]',
'Video height'                      =>  'Video height',
'Video height help'                 =>  'Height of an embedded video',
'Video width'                       =>  'Video width',
'Video width help'                  =>  'Width of an embedded video',
'Menu items head'					=>	'Additional menu items',
'Menu items help'					=>	'This feature allows you to add more menu items to the navigation bar on every page. The format for adding new links is <code>X = &lt;a href="URL"&gt;LINK&lt;/a&gt;</code> where X is the position at which the link should be inserted. Separate entries with a line break.',
'Default menu'						=>	'Default menu items',
'Menu show index'					=>	'Show the index menu item.',
'Menu show user list'				=>	'Show the user list menu item.',
'Menu show search'					=>	'Show the search menu item.',
'Menu show rules'					=>	'Show the rules menu item.',
'User profile head'					=>	'Perfil de usuario',
'Title settings head'				=>	'Title settings',
'Title in menu'						=>	'Show board title in menu.',
'Title in header'					=>	'Show board title in header.',
'Description in header'				=>	'Mostrar descripción del foro en la cabecera.',
'Description settings head'			=>	'Ajustes de descripción',

//
// Language for email.php
//

'Contact head'						=>	'Contact settings',
'Admin e-mail label'				=>	'Admin email',
'Admin e-mail help'					=>	'The admins email',
'Webmaster e-mail label'			=>	'Webmaster email',
'Webmaster e-mail help'				=>	'The email where the boards mails will be addressed from',
'Subscriptions head'				=>	'Suscripciones',
'Forum subscriptions help'			=>	'Enable users to subscribe to forums.',
'Topic subscriptions help'			=>	'Enable users to subscribe to topics.',
'SMTP head'							=>	'SMTP settings',
'SMTP address label'				=>	'SMTP server address',
'SMTP address help'					=>	'The address of an external SMTP server to send emails with',
'SMTP username label'				=>	'SMTP username',
'SMTP username help'				=>	'Username for SMTP server, only if required',
'SMTP password label'				=>	'SMTP password',
'SMTP change password help'			=>	'Check this if you want to change or delete the currently stored password.',
'SMTP password help'				=>	'Password and confirmation for SMTP server, only when required',
'SMTP SSL help'						=>	'Encrypts the connection to the SMTP server using SSL, only when required and supported.',

//
// Language for features.php
//

'Features head'						=>	'Features settings',
'General'							=>	'General',
'Topics and posts'					=>	'Topics and posts',
'User features'						=>	'User features',
'Search'							=>	'Buscar',
'Advanced'							=>	'Advanced',
'Quick post help'					=>	'Show a quick post form so users can post a reaction from the topic view.',
'Responsive post help'              =>  'Show "Post" and "Preview" button in topic view on small screens, leave quick post enabled when this is disabled to allow small devices to post comments.',
'Users online help'					=>	'Display info on the index page about users currently browsing the board.',
'Censor words help'					=>	'Censor words in posts. See %s for more info.',
'Signatures help'					=>	'Allow users to attach a signature to their posts.',
'User ranks help'					=>	'Use user ranks. See %s for more info.',
'Topic views help'					=>	'Show the number of views for each topic.',
'Has posted help'					=>	'Show a label in front of the topics where users have posted.',
'GZip help'							=>	'Gzip output sent to the browser. This will reduce bandwidth usage, but use some more CPU. This feature requires that PHP is configured with zlib. If you already have one of the Apache modules (mod_gzip/mod_deflate) set up to compress PHP scripts, disable this feature.',
'Enable advanced search'			=>	'Allow users to use the advanced search options.',
'Search all help'					=>	'Allow search only in 1 forum at a time.',

'First run'							=>	'First run',
'General settings'					=>	'Ajustes generales',
'Show first run label'				=>	'Show the first run panel when an user logs in for the first time.',
'Show guests label'					=>	'Show the first run panel to guests with login field and registration button.',
'Welcome text'						=>	'Texto de bienvenida',
'First run help message'			=>	'The introduction to the forum displayed in the middle of the first run panel',

//
// Language for forums.php
//

'Post must be integer message'	=>	'Position must be a positive integer value.',
'New forum'						=>	'Nuevo foro',

//
// Entry page
//

'Add forum'					=>	'Añadir foro',
'Update positions'			=>	'Update positions',
'Confirm delete head'		=>	'Confirm delete forum',
'Confirm delete forum info'	=>	'Are you sure that you want to delete the forum <strong>%s</strong>?',
'Confirm delete forum'		=>	'Warning! Deleting a forum will delete all posts (if any) in that forum!',

//
// Detailed edit page
//

'Edit forum head'			=>	'Editar foro',
'Edit details subhead'		=>	'Editar detalles del foro',
'Forum name label'			=>	'Nombre del foro',
'Forum description label'	=>	'Descripción',
'Category label'			=>	'Category',
'Sort by label'				=>	'Sort topics by',
'Topic start'				=>	'Topic start',
'User groups'				=>	'User groups',
'Redirect label'			=>	'Redirect URL',
'Group permissions subhead'	=>	'Edit group permissions',
'Group permissions info'	=>	'In this form, you can set the forum specific permissions for the different user groups. Administrators always have full permissions. Permission settings that differ from the default permissions for the user group are marked red. Some permissions are disabled under some conditions.',
'Read forum label'			=>	'Leer foro',
'Post replies label'		=>	'Post replies',
'Post topics label'			=>	'Post topics',
'Revert to default'			=>	'Reestablecer',

//
// Language used in groups.php
//

'Title already exists message'	=>	'There is already a group with the title <strong>%s</strong>.',
'Cannot remove default message'	=>	'The default group cannot be removed. In order to delete this group, you must first setup a different group as the default.',

'Add group subhead'				=>	'Add new group',
'Create new group'				=>	'Select a group the new group will be based on.',
'Default group subhead'			=>	'Set default group',
'Default group help'			=>	'The default group in which new users will be placed.',
'Existing groups head'			=>	'Manage groups',
'Edit groups info'				=>	'The pre-defined groups can\'t be removed. However, they can be edited. Please note that in some groups, some options are unavailable. Administrators always have full permissions.',
'Group delete head'				=>	'Group delete',
'Confirm delete info'			=>	'Are you sure that you want to delete the group <strong>%s</strong>?',
'Confirm delete warn'			=>	'<b>Warning:</b> After you deleted a group you cannot restore it.',
'Delete group'					=>	'Delete group',
'Move users info'				=>	'The group <strong>%s</strong> currently has <strong>%s</strong> members. Please select a group to which these members will be assigned upon deletion.',
'Move users label'				=>	'Move users to',

'Group settings head'			=>	'Group settings',
'Group settings subhead'		=>	'Setup group options and permissions',
'Group settings info'			=>	'Below options and permissions are the default permissions for the user group. These options apply if no forum specific permissions are in effect.',
'Group title label'				=>	'Group title',
'User title label'				=>	'User title',
'User title help'				=>	'The title will override the user rank',
'Mod privileges label'			=>	'Moderator privileges',
'Mod privileges help'			=>	'In order for a user to have moderator abilities, they must be assigned to moderate one or more forums. This is done via the user administration page of the user\'s profile.',
'Edit profile label'			=>	'Edit user profiles',
'Edit profile help'				=>	'If moderator privileges are enabled, allow users to edit user profiles.',
'Rename users label'			=>	'Renombrar usuarios',
'Rename users help'				=>	'If moderator privileges are enabled, allow users to rename users.',
'Change passwords label'		=>	'Change passwords',
'Change passwords help'			=>	'If moderator privileges are enabled, allow users to change user passwords.',
'Ban users help'				=>	'If moderator privileges are enabled, allow users to ban users.',
'Read board label'				=>	'Read board',
'Read board help'				=>	'If this is disabled, users will only be able to login and logout.',
'View user info label'			=>	'View user information',
'View user info help'			=>	'Allow users to view the user list and user profiles.',
'Post replies help'				=>	'Allow users to post replies in topics.',
'Post topics help'				=>	'Allow users to post new topics.',
'Edit posts label'				=>	'Edit posts',
'Edit posts help'				=>	'Allow users to edit their own posts.',
'Delete posts help'				=>	'Allow users to delete their own posts.',
'Delete topics help'			=>	'Allow users to delete their own topics (including any replies).',
'Set own title label'			=>	'Set own user title',
'Set own title help'			=>	'Allow users to set their own user title.',
'User search label'				=>	'Use search',
'User search help'				=>	'Allow users to use the search feature.',
'User list search label'		=>	'Search user list',
'User list search help'			=>	'Allow users to search for other users in the user list.',
'Send e-mails label'			=>	'Send e-mails',
'Send e-mails help'				=>	'Allow users to send e-mails to other users.',
'Post flood label'				=>	'Post flood interval',
'Post flood help'				=>	'Time users have to wait between posts',
'Search flood label'			=>	'Search flood interval',
'Search flood help'				=>	'Time users have to wait between searches',
'E-mail flood label'			=>	'Email flood interval',
'E-mail flood help'				=>	'Time users have to wait between emails',
'Report flood label'			=>	'Report flood interval',
'Report flood help'				=>	'Time users have to wait between reports',
'Moderator info'				=>	'Please note that in order for a user to have moderator abilities, they must be assigned to moderate one or more forums. This is done via the user administration page of the user\'s profile.',
'seconds'						=>	'seconds',
'pixels'						=>	'pixels',

//
// Language used in index.php and update.php for Backstage
//

'Luna intro'					=>	'Bienvenido a Luna',
'Backup head'						=>	'Back-up',
'Backup info'						=>	'Crear nueva copia de seguridad de la base de datos.',
'Backup button'						=>	'Create new backup',
'New reports head'					=>	'New reports',
'Statistics head'					=>	'Statistics',
'Updates'							=>	'Updates',
'View all'							=>	'View all',
'posts'								=>	'mensajes',
'replies'							=>	'replies',
'reply'								=>	'reply',
'topics'							=>	'topics',
'views'								=>	'views',
'view'								=>	'view',
'users'								=>	'usuarios',

'Not available'						=>	'Not available',
'NA'								=>	'N/A',
'About head'						=>	'Sobre Luna',
'Luna version label'			=>	'Luna version',
'Luna version data'				=>	'Luna version ',
'Server statistics label'			=>	'Server statistics',
'View server statistics'			=>	'View server statistics',

'Luna software updates'			=>	'Luna software updates',
'Luna updates'					=>	'Luna updates',
'Check for updates'					=>	'Check for updates',
'New version'						=>	'It\'s time to update, a new version is available',
'Latest version'					=>	'Thanks for using the latest version of Luna',
'Development version'				=>	'You\'re using a development release',

//
// Reports
//

'Date and time'						=>	'Date and time',
'No new reports'					=>	'There are no new reports.',

//
// Language for maintenance.php
//

'Rebuild index subhead'			=>	'Rebuild search index',
'Rebuild index info'			=>	'If you changes something about topics and posts in the database you should rebuild the search index. It\'s recommended to activate %s during rebuilding. This can take a while and can increase the server load during the process!',
'Posts per cycle label'			=>	'Posts per cycle',
'Posts per cycle help'			=>	'Number of posts per pageview, this prevents a timeout, 300 recommended',
'Starting post label'			=>	'Starting post ID',
'Starting post help'			=>	'The ID where to start, default is first ID found in database',
'Empty index label'				=>	'Empty index',
'Empty index help'				=>	'Select this if you want the search index to be emptied before rebuilding (see below).',
'Rebuild completed info'		=>	'Be sure to enable JavaScript during the rebuild (to start a new cycle automatically). When you have to abort the rebuilding, remember the last post ID and enter that ID+1 in "Starting post ID" if you want to continue (Uncheck "Empty index").',
'Rebuild index'					=>	'Rebuild index',
'Rebuilding search index'		=>	'Rebuilding search index',
'Rebuilding index info'			=>	'Rebuilding index. This might be a good time to put on some coffee :-)',
'Processing post'				=>	'Processing post <strong>%s</strong> …',
'Click here'					=>	'Click here',
'Javascript redirect failed'	=>	'JavaScript redirect unsuccessful. %s to continue …',
'Posts must be integer message'	=>	'Posts per cycle must be a positive integer value.',
'Days must be integer message'	=>	'Days to prune must be a positive integer value.',
'No old topics message'			=>	'There are no topics that are %s days old. Please decrease the value of "Days old" and try again.',
'Prune subhead'					=>	'Prune old posts',
'Days old label'				=>	'Days old',
'Days old help'					=>	'The number of days old a topic must be to be pruned',
'Prune sticky label'			=>	'Prune sticky topics',
'Prune from label'				=>	'Prune from forum',
'Prune from help'				=>	'What shall we prune?',
'Prune info'					=>	'It\'s recommended to activate %s during pruning.',
'Confirm prune subhead'			=>	'Confirm prune posts',
'Confirm prune info'			=>	'Are you sure that you want to prune all topics older than %s days from %s (%s topics).',
'Confirm prune warn'			=>	'WARNING! Pruning posts deletes them permanently.',

'Prune users head'			=>	'Prune users',
'Prune by'					=>	'Prune by',
'Registed date'				=>	'Registered date',
'Last login'				=>	'Last login',
'Prune by info'				=>	'What should we count to prune?',
'Minimum days'				=>	'Minimum days since registration/last login',
'Minimum days info'			=>	'The minimum amount of days since event specified above',
'Maximum posts'				=>	'Maximum number of posts',
'Maximum posts info'		=>	'How many posts do you require before an users isn\'t pruned',
'Delete admins'				=>	'Delete admins and mods',
'User status'				=>	'User status',
'Delete any'				=>	'Delete any',
'Delete only verified'		=>	'Delete only verified',
'Delete only unverified'	=>	'Delete only unverified',

//
// Language for settings.php
//

'Options head'						=>	'Ajustes globales',

//
// Essentials section
//

'Essentials subhead'				=>	'Essentials',
'Board desc help'					=>	'What\'s this board about?',
'Base URL label'					=>	'URL del foro',
'Base URL problem'					=>  'Your installation does not support automatic conversion of internationalized domain names. As your base URL contains special characters, you <strong>must</strong> use an online converter.',
'Timezone label'					=>	'Default time zone',
'DST help'							=>	'Advance time by 1 hour for daylight saving.',
'Language help'						=>	'Idioma por defecto',

//
// Essentials section timezone options
//

'UTC-12:00'							=>	'(UTC-12:00) International Date Line West',
'UTC-11:00'							=>	'(UTC-11:00) Niue, Samoa',
'UTC-10:00'							=>	'(UTC-10:00) Hawaii-Aleutian, Cook Island',
'UTC-09:30'							=>	'(UTC-09:30) Marquesas Islands',
'UTC-09:00'							=>	'(UTC-09:00) Alaska, Gambier Island',
'UTC-08:30'							=>	'(UTC-08:30) Pitcairn Islands',
'UTC-08:00'							=>	'(UTC-08:00) Pacific',
'UTC-07:00'							=>	'(UTC-07:00) Mountain',
'UTC-06:00'							=>	'(UTC-06:00) Central',
'UTC-05:00'							=>	'(UTC-05:00) Eastern',
'UTC-04:00'							=>	'(UTC-04:00) Atlantic',
'UTC-03:30'							=>	'(UTC-03:30) Newfoundland',
'UTC-03:00'							=>	'(UTC-03:00) Amazon, Central Greenland',
'UTC-02:00'							=>	'(UTC-02:00) Mid-Atlantic',
'UTC-01:00'							=>	'(UTC-01:00) Azores, Cape Verde, Eastern Greenland',
'UTC'								=>	'(UTC) Western European, Greenwich',
'UTC+01:00'							=>	'(UTC+01:00) Central European, West African',
'UTC+02:00'							=>	'(UTC+02:00) Eastern European, Central African',
'UTC+03:00'							=>	'(UTC+03:00) Eastern African',
'UTC+03:30'							=>	'(UTC+03:30) Iran',
'UTC+04:00'							=>	'(UTC+04:00) Moscow, Gulf, Samara',
'UTC+04:30'							=>	'(UTC+04:30) Afghanistan',
'UTC+05:00'							=>	'(UTC+05:00) Pakistan',
'UTC+05:30'							=>	'(UTC+05:30) India, Sri Lanka',
'UTC+05:45'							=>	'(UTC+05:45) Nepal',
'UTC+06:00'							=>	'(UTC+06:00) Bangladesh, Bhutan, Yekaterinburg',
'UTC+06:30'							=>	'(UTC+06:30) Cocos Islands, Myanmar',
'UTC+07:00'							=>	'(UTC+07:00) Indochina, Novosibirsk',
'UTC+08:00'							=>	'(UTC+08:00) Greater China, Australian Western, Krasnoyarsk',
'UTC+08:45'							=>	'(UTC+08:45) Southeastern Western Australia',
'UTC+09:00'							=>	'(UTC+09:00) Japan, Korea, Chita, Irkutsk',
'UTC+09:30'							=>	'(UTC+09:30) Australian Central',
'UTC+10:00'							=>	'(UTC+10:00) Australian Eastern',
'UTC+10:30'							=>	'(UTC+10:30) Lord Howe',
'UTC+11:00'							=>	'(UTC+11:00) Solomon Island, Vladivostok',
'UTC+11:30'							=>	'(UTC+11:30) Norfolk Island',
'UTC+12:00'							=>	'(UTC+12:00) New Zealand, Fiji, Magadan',
'UTC+12:45'							=>	'(UTC+12:45) Chatham Islands',
'UTC+13:00'							=>	'(UTC+13:00) Tonga, Phoenix Islands, Kamchatka',
'UTC+14:00'							=>	'(UTC+14:00) Line Islands',

//
// Timeout Section
//

'Timeouts subhead'					=>	'Time and timeouts',
'PHP manual'						=>	'Manual PHP',
'Time format help'					=>	'Now: %s. See %s for more info',
'Date format help'					=>	'Now: %s. See %s for more info',
'Visit timeout label'				=>	'Visit timeout',
'Visit timeout help'				=>	'Time before a visit ends',
'Online timeout label'				=>	'Online timeout',
'Online timeout help'				=>	'Time before someone isn\'t online anymore',

//
// Feeds section
//

'Feed subhead'						=>	'Syndication',
'Default feed label'				=>	'Default feed type',
'Default feed help'					=>	'Select a feed',
'None'								=>	'None',
'RSS'								=>	'RSS',
'Atom'								=>	'Atom',
'Feed TTL label'					=>	'Duration to cache feeds',
'Feed TTL help'						=>	'Reduce sources by caching feeds',
'No cache'							=>	'Don\'t cache',
'Minutes'							=>	'%d minutes',

//
// Reports section
//

'Reporting method label'			=>	'Reporting method',
'Internal'							=>	'Internal',
'Both'								=>	'Both',
'Reporting method help'				=>	'How should we handle reports?',
'Mailing list label'				=>	'Mailing list',
'Mailing list help'					=>	'A comma separated list of subscribers who get e-mails when new reports are made',

//
// Avatars section
//

'Avatars subhead'					=>	'Avatars',
'Use avatars label'					=>	'Use avatars',
'Use avatars help'					=>	'Enable so users can upload avatars.',
'Upload directory label'			=>	'Upload directory',
'Upload directory help'				=>	'Where avatars will be stored relative to Lunas root, write permission required',
'Max width label'					=>	'Max width',
'Max height label'					=>	'Max height',
'Max size label'					=>	'Tamaño máximo',

//
// Registration Section
//

'Allow new label'					=>	'Allow new registrations',
'Allow new help'					=>	'Allow new users to be made by people.',
'Verify label'						=>	'Verify registrations',
'Verify help'						=>	'Send a random password to users to verify their email address.  ',
'Report new label'					=>	'Report new registrations',
'Report new help'					=>	'Notify people on the mailing list when new user registers.  ',
'Use rules label'					=>	'User forum rules',
'Use rules help'					=>	'Require users to agree with the rules. This will also enable a "Rules" link in the navigation bar.',
'Rules label'						=>	'Enter your rules here',
'Rules help'						=>	'Enter rules or useful information, required when rules are enabled',
'E-mail default label'				=>	'Default email setting',
'E-mail default help'				=>	'Default privacy setting for new registrations',
'Display e-mail label'				=>	'Display email address to other users.',
'Hide allow form label'				=>	'Hide email address but allow form e-mail.',
'Hide both label'					=>	'Hide email address and disallow form email.',

//
// Announcement Section
//

'Announcements'						=>	'Announcements',
'Display announcement help'			=>	'Enable this to display the below message in the board.',

//
// Maintenance Section
//

'Maintenance mode help'				=>	'Activar el modo mantenimiento, el foro solo estará disponible para administradores. ¡No cierres sesión cuando esta función esté activada!',
'Maintenance message help'			=>	'The message to tell users about the maintenance',
'Cache'								=>	'Caché',
'Cache info'						=>	'Remove all cache files so the database has to return up-to-date values',
'Clear cache'						=>	'Limpiar caché',

//
// Language for permissions.php
//

'All caps'					=>	'All caps',
'Posting subhead'			=>	'Posting',
'BBCode help'				=>	'Allow BBCode in posts (recommended).',
'Image tag help'			=>	'Allow the BBCode [img] tag in posts.',
'All caps message help'		=>	'Allow a message to contain only capital letters.',
'All caps subject help'		=>	'Allow a subject to contain only capital letters.',
'Require e-mail help'		=>	'Require guests to supply an email address when posting.',
'Signatures subhead'		=>	'Firmas',
'BBCode sigs help'			=>	'Allow BBCode in user signatures.',
'Image tag sigs help'		=>	'Allow the BBCode [img] tag in user signatures (not recommended).',
'All caps sigs help'		=>	'Allow a signature to contain only capital letters.',
'Max sig length label'		=>	'Maximum signature length',
'Max sig length help'		=>	'Maximum amount of characters a signature can have',
'Max sig lines label'		=>	'Maximum signature lines',
'Max sig lines help'		=>	'Maximum amount of lines a signature can have',
'Banned e-mail help'		=>	'Allow users to use a banned email address, mailing list will be warned when this happens.',
'Duplicate e-mail help'		=>	'Allow users to use an email address that is already used, mailing list will be warned when this happens.',

//
// Language for ranks.php
//

'Must be integer message'	=>	'Minimum posts must be a positive integer value.',
'Dupe min posts message'	=>	'There is already a rank with a minimun posts value of %s.',
'Add rank subhead'			=>	'Add rank',
'Ranks disabled'			=>	'<strong>User ranks is disabled in %s.</strong>',
'Rank title label'			=>	'Rank title',
'Minimum posts label'		=>	'Minimum posts',
'Edit remove subhead'		=>	'Edit/remove ranks',
'No ranks in list'			=>	'No ranks in list',

//
// Language for reports.php
//

'Deleted user'				=>	'Deleted user',
'Deleted'					=>	'Deleted',
'Post ID'					=>	'Post #%s',
'Reported by'				=>	'Reported by',
'Actions'					=>	'Actions',
'Zap'						=>	'Mark as read',
'Last 10 head'				=>	'10 last read reports',
'Readed by'					=>	'Marked as read by',
'No zapped reports'			=>	'There are no read reports.',

//
// Language for statistics.php
//

'PHPinfo disabled message'			=>	'La función PHP phpinfo() ha sido deshabilitada en este servidor.',
'Server statistics head'			=>	'Server statistics',
'Server load label'					=>	'Carga del servidor',
'Server load data'					=>	'%s - %s usuario(s) online',
'Environment label'					=>	'Entorno',
'Environment data OS'				=>	'Sistema operativo: %s',
'Show info'							=>	'Show info',
'Environment data version'			=>	'PHP: %s - %s',
'Environment data acc'				=>	'Accelerator: %s',
'Turck MMCache'						=>	'Turck MMCache',
'Turck MMCache link'				=>	'turck-mmcache.sourceforge.net/',
'ionCube PHP Accelerator'			=>	'ionCube PHP Accelerator',
'ionCube PHP Accelerator link'		=>	'www.php-accelerator.co.uk/',
'Alternative PHP Cache (APC)'		=>	'Alternative PHP Cache (APC)',
'Alternative PHP Cache (APC) link'	=>	'www.php.net/apc/',
'Zend Optimizer'					=>	'Zend Optimizer',
'Zend Optimizer link'				=>	'www.zend.com/products/guard/zend-optimizer/',
'eAccelerator'						=>	'eAccelerator',
'eAccelerator link'					=>	'www.eaccelerator.net/',
'XCache'							=>	'XCache',
'XCache link'						=>	'xcache.lighttpd.net/',
'Database label'					=>	'Base de datos',
'Database data rows'				=>	'Filas %s',
'Database data size'				=>	'Tamaño: %s',

//
// Language for users.php
//

'Non numeric message'		=>	'You entered a non-numeric value into a numeric only column.',
'Invalid date time message'	=>	'You entered an invalid date/time.',
'Not verified'				=>	'Not verified',

//
// Actions: mass delete/ban etc.
//

'No users selected'			=>	'No users selected.',
'No move admins message'	=>	'For security reasons, you are not allowed to move multiple administrators to another group. If you want to move these administrators, you can do so on their respective user profiles.',
'No delete admins message'	=>	'Administrators cannot be deleted. In order to delete administrators, you must first move them to a different user group.',
'No ban admins message'		=>	'Administrators cannot be banned. In order to ban administrators, you must first move them to a different user group.',
'No ban mods message'		=>	'Moderators cannot be banned. In order to ban moderators, you must first move them to a different user group.',
'Move users'				=>	'Change user group',
'New group label'			=>	'New group',
'New group help'			=>	'Select a new user group',
'Invalid group message'		=>	'Invalid group ID.',
'Delete users'				=>	'Borrar usuarios',
'Ban users'					=>	'Expulsar usuarios',
'Ban IP label'				=>	'Ban IP addresses',
'Ban IP help'				=>	'Also ban the IP addresses of the banned users to make registering a new account more difficult for them.',

'E-mail address label'		=>	'Email address',
'Real name label'			=>	'Nombre',
'Signature'					=>	'Firma',
'Posts more than label'		=>	'Number of posts greater than',
'Posts less than label'		=>	'Number of posts less than',
'Last post after label'		=>	'Last post is after',
'Last post before label'	=>	'Last post is before',
'Last visit after label'	=>	'Last visit is after',
'Last visit before label'	=>	'Last visit is before',
'Registered after label'	=>	'Registrado después',
'Registered before label'	=>	'Registrado antes',
'Order by posts'			=>	'Number of posts',
'Order by last visit'		=>	'Última visita',
'Order by registered'		=>	'Registrado',
'All groups'				=>	'All groups',
'Unverified users'			=>	'Unverified users',
'IP search head'			=>	'IP search',
'IP address label'			=>	'IP address',
'IP address help'			=>	'The IP address to search for in the post database.',
'Find IP address'			=>	'Find IP address',

'Results title head'		=>	'Title/Status',
'Results posts head'		=>	'Posts',
'Results last used head'	=>	'Last used',
'Results times found head'	=>	'Times found',
'Results find more link'	=>	'Find more users for this ip',
'Results no posts found'	=>	'There are currently no posts by that user in the forum.',
'Ban'						=>	'Ban',
'Change group'				=>	'Change group',
'Bad IP message'			=>	'The supplied IP address is not correctly formatted.',
'Results view IP link'		=>	'IP stats',
'Results no IP found'		=>	'The supplied IP address could not be found in the database.',

//
// Create new user
//

'Add user head'				=>	'Add user',
'Random password info'		=>	'Generate a random password, this will be emailed to the above address. When checked, leave "Password" empty.',

//
// Common language used in /backstage/
// Main menu
//

'Content'				=>	'Contenido',
'Forums'				=>	'Foros',
'Forum settings'		=>	'Ajustes del foro',
'Categories'			=>	'Categories',
'Board'					=>	'Board',
'Board structure'		=>	'Board structure',
'Censoring'				=>	'Censoring',
'Reports'				=>	'Reports',
'Users'					=>	'Usuarios',
'Ranks'					=>	'Ranks',
'Groups'				=>	'Groups',
'Permissions'			=>	'Permissions',
'Bans'					=>	'Bans',
'Settings'				=>	'Ajustes',
'Global'				=>	'Global',
'Registration'			=>	'Registro',
'Email'					=>	'Email',
'Database'				=>	'Database management',
'Extensions'			=>	'Extensions',

//
// Others
//

'Prune'					=>	'Limpiar',
'Server statistics'		=>  'Server statistics',

//
// Update service
//

'Available'				=>	'¡La versión %s de Luna está disponible, %s!',
'update now'			=>	'update now',
'Development'			=>	'You are running version %s, the latest stable release is version %s.',
'Download'				=>	'Download v%s',
'Changelog'				=>	'Changelog',

//
// General actions and more
//

'Admin'					=>	'Admin',
'Go back'				=>	'Volver',
'Update'				=>	'Update',
'Add'					=>	'Add',
'Remove'				=>	'Remove',
'Yes'					=>	'Yes',
'No'					=>	'No',
'here'					=>	'here',
'Action'				=>	'Action',
'Maintenance mode'		=>	'maintenance mode', // Used for link text in more than one file

// Cookie bar
'Cookie bar'			=>	'Cookie bar',
'Cookie info'			=>	'We use cookies to give you the best experience on this board.',
'More info'				=>	'More info',
'Cookie set info'		=>	'Show a bar with information about cookies at the bottom of the page.',

//
// Admin loader
//

'No plugin message'		=>	'There is no plugin called %s in the plugin directory.',
'Plugin failed message'	=>	'Loading of the plugin - <strong>%s</strong> - failed.',


// Common
'Login required'		=>	'You must be logged in to use the privates messages system',
'Disabled PM'			=>	'You have disable the privates messages system',
'Private Messages'		=>	'Private Messages',
'PM'					=>	'<acronym title="Private Message">PM</acronym>',
'Quick message'			=>	'Send private message',
'Write message'			=>	'Send new message',
'Inbox'					=>	'Inbox',
'Outbox'				=>	'Sent',
'Contacts'				=>	'Contacts',
'Delete'				=>	'Borrar',
'Please confirm'		=>	'Please confirm',
'New message'			=>	'You have a private message not read!',
'New messages'			=>	'You have %s privates messages not read!',
'See new'				=>	'See the new message',
'See news'				=>	'See the new messages',
'No new'				=>	'No new message',
'Full boxes'			=>	'Your private message boxes are full!',
'Empty boxes'			=>	'Your private message boxes are empty.',
'Full to'				=>	'Private message boxes full to %s',
'Select'				=>	'Seleccionar',
'For select'			=>	'For the selection:',
'Messages'				=>	'Messages',
'OK'					=>	'Aceptar',
'PM Menu'				=>	'Private messaging',
'Sending lists'			=>	'Sending lists',

// List a box
'Date'					=>	'Date',
'Subject'				=>	'Asunto',
'Sender'				=>	'Sender',
'Receiver'				=>	'Receiver(s)',
'Mark as read select'	=>	'Mark as read',
'Read redirect'			=>	'Messages marked as read. Redirecting...',
'Mark as unread select'	=>	'Mark as unread',
'Unread redirect'		=>	'Messages marked as unread. Redirecting...',
'Mark all'				=>	'Mark all messages as read',
'Read all redirect'		=>	'All messages marked as read. Redirecting...',
'Must select'			=>	'You must select some messages',
'No messages'			=>	'No messages',
'Unknown'				=>	'Unknown',

// View a message
'View'					=>	'View a private discussion',
'Reply'					=>	'Reply',
'Quote'					=>	'Citar',
'Deleted User'			=>	'Deleted User',
'Deleted'				=>	'Deleted',
'With'					=>	'with',

// Send a message
'Send a message'		=>	'Send a message',
'Send to'				=>	'Send to',
'Send multiple'			=>	'You can send the message to several receivers by separating them by commas. Maximum: ',
'Save message'			=>	'Save message in "Sent" box',
'Send'					=>	'Send',
'Sent redirect'			=>	'Messages sent to user, redirecting...',
'No user'				=>	'There\'s no user with the username "%s".',
'Dest full'				=>	'%s inbox is full, you can not send you message to this user.',
'Sender full'			=>	'Can\'t save message, your boxes are full.',
'Flood'					=>	'At least % seconds have to pass between sends. Please wait a little while and try send the message again.',
'Must receiver'			=>	'You must give at least one receiver',
'Too many receiver'		=>	'You can send a message at the same time only to %s receivers maximum.',
'User blocked'			=>	'%s refuses the private messages.',
'User disable PM'		=>	'%s disabled the private messages.',
'User left'				=>	'%s has left the conversation.',
'Others'				=>	'Others',
'RE'					=>	'RE: ',
'Shared message'		=>	'If you have entered more than one receiver, check this box if you want to start a shared discussion (together)',

// Multidelete
'Multidelete'			=>	'Delete multiple messages',
'Delete messages comply'=>	'Are you sure you want to delete the selected messages?',
'Deleted redirect'		=>	'Messages deleted. Redirecting ...',

// Delete
'Delete message'		=>	'Delete message',
'Delete message comply'	=>	'Are you sure you want to delete the message?',
'Del redirect'			=>	'Message deleted, redirecting...',
'Topic warning info'	=>	'The topic will be deleted from your inbox, but it will stays in the others receivers\' boxes.',
'Delete for everybody'	=>	'If you tick this checkbox, you will delete the message (or the topic) for all the receivers (available only for admins &amp; mods)',

// Contacts
'Contacts list'			=>	'Contacts list',
'Rights contact'		=>	'Contacts rights',
'Authorized messages'	=>	'Authorized messages',
'Authorize'				=>	'Authorize',
'Authorize from'		=>	'Authorize %s to send you private message',
'Refused messages'		=>	'Refused messages',
'Refuse'				=>	'Refuse',
'Refuse from'			=>	'Refused private messages from %s',
'Refuse user'			=>	'Refuse privates messages coming from this contact',
'Add to contacts'		=>	'Add to contacts',
'Add contact'			=>	'Add a contact',
'Contact name'			=>	'Contact name',
'User already contact'	=>	'This user is already in your contacts list',
'User cannot use'		=>	'User can not use private message system.',
'User not exists'		=>	'User does not seems to exists.',
'Added contact redirect'=>	'Contact added. Redirecting...',
'Add'					=>	'Add',
'Quick message x'		=>	'Send private message to %s',
'Status redirect'		=>	'Contact status edited. Redirecting...',
'Multiples status redirect'=>	'Contacts status edited. Redirecting...',
'No contacts'			=>	'No contact',
'Must select contacts'	=>	'You must select some contacts',

// Multidelete contacts
'Multidelete contacts'	=>	'Delete multiple contacts',
'Delete contacts comply'=>	'Are you sure you want to delete the selected contacts?',
'Deleted contacts redirect'=>	'Contacts deleted. Redirecting ...',

// Delete contact
'Delete x'				=>	'Delete contact %s',
'Delete contact confirm'=>	'Are you sure you want to delete this contact?',
'Deleted contact redirect'=>	'Contact deleted. Redirecting...',

// Sending lists
'List name'				=>	'List name',
'List usernames'		=>	'List usernames',
'No sending lists'		=>	'No sending lists',
'Add a list'			=>	'Add a list',
'Multidelete lists'		=>	'Delete multiple lists',
'Delete list confirm'	=>	'Are you sure you want to delete this sending list?',
'Delete lists comply'	=>	'Are you sure you want to delete the selected lists?',
'Deleted list redirect'	=>	'Sending list deleted. Redirecting...',
'Must select lists'		=>	'You must select some lists',
'Select a list'			=>	'Select a list',
'Delete this list'		=>	'Delete this list',
'List usernames comma'	=>	'List usernames (separated by commas)',
'JS required'			=>	'JavaScript is required in order to use the sending lists.',
'Yourself'				=>	'You cannot add yourself to a sending list.',

// me.php
'use_pm_option'			=>	'Enable privates messages system',
'email_option_infos'	=>	'With this enabled, an e-mail will be sent for all new private message.',
'email_option'			=>	'Privates messages notification by e-mail',
'email_option_full'		=>	'Include private messages content',

//
// Email templtes
//

// Email - activate_email.tpl
'activate_email.tpl'          =>
'Subject: Change email address requested

Hello <username>,

You have requested to have a new email address assigned to your account in the discussion forum at <base_url>. If you did not request this or if you do not want to change your email address you should just ignore this message. Only if you visit the activation page below will your email address be changed. In order for the activation page to work, you must be logged in to the forum.

To change your email address, please visit the following page:
<activation_url>

--
<board_mailer> Mailer
(Do not reply to this message)',

//
// Email - activate_password.tpl
//
'activate_password.tpl'          =>
'Subject: New password requested

Hello <username>,

You have requested to have a new password assigned to your account in the discussion forum at <base_url>. If you did not request this or if you do not want to change your password you should just ignore this message. Only if you visit the activation page below will your password be changed.

Your new password is: <new_password>

To change your password, please visit the following page:
<activation_url>

--
<board_mailer> Mailer
(Do not reply to this message)',

// Email - banned_email_change.tpl
'banned_email_change.tpl'          =>
'Subject: Alert - Banned email detected

User "<username>" changed to banned email address: <email>

User profile: <profile_url>

--
<board_mailer> Mailer
(Do not reply to this message)',

// Email - banned_email_post.tpl
'banned_email_post.tpl'          =>
'Subject: Alert - Banned email detected

User "<username>" posted with banned email address: <email>

Post URL: <post_url>

--
<board_mailer> Mailer
(Do not reply to this message)',

// Email - banned_email_register.tpl
'banned_email_register.tpl'          =>
'Subject: Alert - Banned email detected

User "<username>" registered with banned email address: <email>

User profile: <profile_url>

--
<board_mailer> Mailer
(Do not reply to this message)',

// Email - dupe_email_change.tpl
'dupe_email_change.tpl'          =>
'Subject: Alert - Duplicate email detected

User "<username>" changed to an email address that also belongs to: <dupe_list>

User profile: <profile_url>

--
<board_mailer> Mailer
(Do not reply to this message)',

// Email - dupe_email_register.tpl
'dupe_email_register.tpl'          =>
'Subject: Alert - Duplicate email detected

User "<username>" registered with an email address that also belongs to: <dupe_list>

User profile: <profile_url>

--
<board_mailer> Mailer
(Do not reply to this message)',

// Email - form_email.tpl
'form_email.tpl'          =>
'Subject: <mail_subject>

<sender> from <board_title> has sent you a message. You can reply to <sender> by replying to this email.

The message reads as follows:
-----------------------------------------------------------------------

<mail_message>

-----------------------------------------------------------------------

--
<board_mailer> Mailer',

// Email - new_reply.tpl
'new_reply.tpl'          =>
'Subject: Reply to topic: "<topic_subject>"

<replier> has replied to the topic "<topic_subject>" to which you are subscribed. There may be more new replies, but this is the only notification you will receive until you visit the board again.

The post is located at <post_url>

You can unsubscribe by going to <unsubscribe_url>

--
<board_mailer> Mailer
(Do not reply to this message)',

// Email - new_reply_full.tpl
'new_reply_full.tpl'          =>
'Subject: Reply to topic: "<topic_subject>"

<replier> has replied to the topic "<topic_subject>" to which you are subscribed. There may be more new replies, but this is the only notification you will receive until you visit the board again.

The post is located at <post_url>

The message reads as follows:
-----------------------------------------------------------------------

<message>

-----------------------------------------------------------------------

You can unsubscribe by going to <unsubscribe_url>

--
<board_mailer> Mailer
(Do not reply to this message)',

// Email - new_report.tpl
'new_report.tpl'          =>
'Subject: Report(<forum_id>) - "<topic_subject>"

User "<username>" has reported the following message: <post_url>

Reason: <reason>

--
<board_mailer> Mailer
(Do not reply to this message)',

// Email - new_topic.tpl
'new_topic.tpl'          =>
'Subject: New topic in forum: "<forum_name>"

<poster> has posted a new topic "<topic_subject>" in the forum "<forum_name>", to which you are subscribed.

The topic is located at <topic_url>

You can unsubscribe by going to <unsubscribe_url>

--
<board_mailer> Mailer
(Do not reply to this message)',

// Email - new_topic_full.tpl
'new_topic_full.tpl'          =>
'Subject: New topic in forum: "<forum_name>"

<poster> has posted a new topic "<topic_subject>" in the forum "<forum_name>", to which you are subscribed.

The topic is located at <topic_url>

The message reads as follows:
-----------------------------------------------------------------------

<message>

-----------------------------------------------------------------------

You can unsubscribe by going to <unsubscribe_url>

--
<board_mailer> Mailer
(Do not reply to this message)',

// Email - new_user.tpl
'new_user.tpl'          =>
'Subject: Alert - New registration

User "<username>" registered in the forums at <base_url>

User profile: <profile_url>

To administer this account, please visit the following page:
<admin_url>

--
<board_mailer> Mailer
(Do not reply to this message)',

// Email - rename.tpl
'rename.tpl'          =>
'Subject: User account renamed

During an upgrade to the forums at <base_url> it was determined your username is too similar to an existing user. Your username has been changed accordingly.

Old username: <old_username>
New username: <new_username>

We apologise for any inconvenience caused.

--
<board_mailer> Mailer
(Do not reply to this message)',

// Email - welcome.tpl
'welcome.tpl'          =>
'Subject: Welcome to <board_title>!

Thank you for registering in the forums at <base_url>. Your account details are:

Username: <username>
Password: <password>

Login at <login_url> to activate the account.

--
<board_mailer> Mailer
(Do not reply to this message)',

);