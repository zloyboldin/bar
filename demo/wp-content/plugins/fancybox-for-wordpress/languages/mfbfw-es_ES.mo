��    �      �  �   \	      p  �   q  �   �  �   �  �   R  �     7   �  7     2   G    z  y   }  /   �  /   '  �   W  U     �   V  ,  )     V     u     �  (   �  ;   �  
     
     <   $  �   a     2  $   E  <   j  	   �     �     �  S   �  N     Q   b  Y   �  d     	   s     }  @   �  �   �     �  6   �  F     C   O     �     �     �     �     �       
   "     -  �   @     �  :   �  N     ;   T     �  ,   �     �  	   �     �  >   �  #   ;  :   _  �   �  	      :   '      b   +   o   ,   �   ,   �   t   �      j!  '   }!  �   �!  �   �"  
   N#    Y#  �   t$  �   &%  �  
&  [  �'  7   )     R)     W)     c)  K   t)  8   �)     �)  E   �)  �  D*     �+  L   �+  3   4,  �   h,     �,     �,     -  1  $-  @   V.  8   �.     �.     �.     �.     �.  $   �.  Y   /     t/     �/     �/     �/  -   �/  a   �/     D0  [   M0     �0     �0  (   �0     1  N   *1  Z   y1  ?   �1  @   2     U2  6   ]2  O   �2  1   �2  �   3  i   �3  �   4  W   �4     �4  #   �4      5     .5  6   >5  6   u5     �5     �5  L   �5  �   "6  	   �6  )   �6  �   7  s   �7     48  �  A8  �   �9  �   �:     u;  �   �;  �   �<  6   �=  5   �=  E   )>  �   o>  w   g?  1   �?  1   @  �   C@  0  �@  �   B  �   �B  7   �C  '   �C     D  5   8D  A   nD     �D  
   �D  A   �D  �   	E     �E  1   �E  D   F     HF     WF     ]F  d   cF  m   �F  S   6G  l   �G  i   �G     aH     oH  A   �H    �H     �I  F   �I  B   2J  S   uJ     �J  "   �J  !   K     .K  -   IK     wK     �K     �K  �   �K     SL  B   hL  L   �L  B   �L  0   ;M  6   lM     �M  	   �M     �M  D   �M  $   
N  F   /N  �   vN  	   O  >   )O     hO  +   yO  -   �O  ,   �O  �    P     �P  +   �P  �   �P  �   �Q     �R  ,  �R  �   �S    qT  �  �U  O  &W  B   vX     �X     �X     �X  b   �X  :   QY  	   �Y  e   �Y  �  �Y  '   �[  `   �[  V   \  �   o\     ]      !]     B]  B  Y]  F   �^  8   �^     _     "_     )_     =_  0   D_  p   u_     �_     �_     `     ,`  T   <`     �`     a  X   a  (   sa  3   �a  6   �a  *   b  {   2b  l   �b  B   c  C   ^c     �c  L   �c  U   �c  4   Md  �   �d  l   0e  �   �e  �   -f     �f  '   �f     �f     �f  ;   g  :   Gg     �g     �g  ]   �g  �   �g     �h  1   �h  �   i  �   �i     qj     {   N   O   y          �   V       K   J   �   U          h   |   w       }   �                /   m   .           q   �          D   5   _           ]   k          �   �          Q   [   	               f   (   v   ;   �   e      l      A      L   R   I   �   2   c       �       9   o   b       g   G   0           $      
   3   �       -   1   ^       \          Z   z   �   ~   Y      '      F              x   8                t   u   W   #   :   E          d   =      @   !   ,   a   +   �           C   i              7   �   <           B               �       j   �          s          �   �          �   T   p       �       `       6   r       M   )   S   �   �   >       &   H   %       X   "      *   n                4       ?       P        &middot; If you want to do it manually you can use something like <code>jQuery("a:has(img)[href$='.jpg']")</code> or whatever works for you. &middot; The custom expression has to apply <code>class="fancybox"</code> to the links where you want to use FancyBox. Do not call the <code>fancybox()</code> function here, the plugin does this for you. &middot; The jQuery <code>addClass()</code> function is a good way to add the class to the desired links conserving any existing class. &middot; You can use <code>getTitle()</code> in your expression to copy the title attribute from the <code>IMG</code> tag to the <code>A</code> tag, so that FancyBox can show captions. &middot; You can use <code>jQuery(thumbnails)</code> like in the example expression to apply FancyBox to thumbnails that link to these extensions: BMP, GIF, JPG, JPEG, PNG (both lowercase and uppercase). (Requires closing transition type to be set to elastic) (Requires opening transition type to be set to elastic) (Should contrast with the padding color set above) (There are 30 different easing methods, the first ones are the most boring. You can test them <a href="http://commadot.com/jquery/easing.php" target="_blank">here</a> or <a href="http://hosted.zeh.com.br/mctween/animationtypes.html" target="_blank">here</a>) (This should be left on #FFFFFF (white) if you want to display anything other than images, like inline or framed content) (Will load one additional javascript file, 3KB) (Will load one additional javascript file, 8KB) (You may want to leave this off if you display iframed or inline content that containts clickable elements - for example: play buttons for movies, links to other pages) <a target="_blank" href="http://fancybox.net">FancyBox</a> developed by <a target="_blank" href="http://fancybox.net">Janis Skarnelis</a>, ported to WordPress by <a target="_blank" href="http://josepardilla.com/">Jos&eacute; Pardilla</a>. Licensed under the <a target="_blank" href="http://en.wikipedia.org/wiki/MIT_License">MIT License</a>. <strong>Note:</strong> Having a cache plugin may prevent changes from taking effect immidiately, if this happens clear cache after saving changes here or deactivate cache until you finish editing these options. <strong>Note:</strong> If update to version 3.0.0 breaks fancybox on your blog you will probably have to reset your settings (with the white button below). I have tested this issue on several WordPress installations and it always worked, so it might depend on the server. Sorry for the inconvinience. Activate easing (default: off) Add overlay (default: on) Additional FancyBox Calls Additional FancyBox Calls (default: off) Animation Settings <span style="color:green">(basic)</span> Animations Appearance Appearance Settings <span style="color:green">(basic)</span> As you can see, this plugin has many options you can edit, but have no fear, you can leave everything as it is if you don't want to get your hands dirty, since the default options should be a good start... :) Auto Resize to Fit Auto detect dimensions (default: on) Behavior Settings <span style="color:orange">(medium)</span> Behaviour Border Bottom Callback on <strong>Cancel</strong> event: Will be called after loading is canceled Callback on <strong>CleanUp</strong> event: Will be called just before closing Callback on <strong>Closed</strong> event: Will be called once FancyBox is closed Callback on <strong>Complete</strong> event: Will be called once the content is displayed Callback on <strong>Start</strong> event: Will be called right before attempting to load the content Callbacks Center on Scroll Change content transparency during zoom animations (default: on) Change them one at a time and test to see if they help. Remember that having a cache plugin may prevent changes from taking effect immidiately, so clear cache after saving changes here or deactivate cache until you finish editing these options. Close Button Close FancyBox by clicking on the image (default: off) Close FancyBox by clicking on the overlay sorrounding it (default: on) Close FancyBox when &quot;Escape&quot; key is pressed (default: on) Close button position: Close on Content Click Close on Overlay Click Close with &quot;Esc&quot; Custom expression guidelines: Cyclic Galleries Dimensions Do not call jQuery Do not group images in gallery automatically (use this if you want to make galleries manually with the <code>REL</code> attribute) Easing Easing method when closing FancyBox. (default: easeInBack) Easing method when navigating through gallery items. (default: easeInOutQuart) Easing method when opening FancyBox. (default: easeOutBack) Enable callbacks (default: off) Enabling this will show additional settings. Example: Examples: Extra Calls Extra FancyBox Calls <span style="color:red">(advanced)</span> Fancybox for WordPress (version %s) Follow me on Twitter for more WordPress Plugins and Themes For information on the options available you can use here see <a href="http://fancybox.net/api">FancyBox's API & Options page</a>. Galleries Gallery Settings <span style="color:red">(advanced)</span> Gallery Type HTML color of the border (default: #BBBBBB) HTML color of the overlay (default: #666666) HTML color of the padding (default: #FFFFFF) Height for iframe and swf content. Also set for inline content if <em>autoDimensions</em> is disabled (default: 340) Help with Fancybox Help with Fancybox for WordPress plugin Here you can add as many additional calls to fancybox as you want, with different settings. For example, if you want to use fancybox with iframes or ajax on any specific link, you can configure those calls here without affecting the settings for images. Here you can choose if you want the plugin to group all images into a gallery, or make a gallery for each post. You can also define you own jQuery expression if you like. IMPORTANT: If the plugin doesn't seem to work, first you should check for other plugins that may be conflicting with this one, especially other Lightbox, Slimbox, etc. Make sure all your plugins and WordPress itself are up to date (this plugin has only been tested in WordPress 2.7 and above). If you are an advanced user you can <a target="_blank" href="https://github.com/moskis/fancybox-for-wordpress">follow the plugin in Github</a>, fork it or help submitting fixes! If you are having trouble with this plugin take a look at this <a target="_blank" href="http://plugins.josepardilla.com/fancybox-for-wordpress/faq">FAQ</a> where i will try to cover the most common problems and their solutions. If you have problems or questions about FancyBox itself (and not this WordPress plugin), please start with these links: <a target="_blank" href="http://fancybox.net/howto">How-To</a> & <a target="_blank" href="http://fancybox.net/faq">FAQ</a>.<br />If that does not help, go to <a href="http://groups.google.com/group/fancybox">the FancyBox Google Group</a>, use the <strong>Search</strong> option, and if necesary, post your question. If you still can not get the plugin to work, <a target="_blank" href="http://wordpress.org/support/plugin/fancybox-for-wordpress#postform">write a post in the WordPress Support forums</a> explaining the problem or take a look and the <a target="_blank" href="http://wordpress.org/support/plugin/fancybox-for-wordpress">already posted messages</a>. If you use FancyBox and like it, buy the author a beer! Info Information Inside (default) Keep image in the center of the browser window when scrolling (default: on) Leave empty any speciic callbacks you don't need to use. Left Lets visitors navigate galleries with the mouse wheel  (default: off) Like many other plugins, FancyBox for WordPress stores its settings on your WordPress' options database table. Actually, these settings are not using more than a couple of kilobytes of space, but if you want to completely uninstall this plugin, check the option below, then save changes, and <strong>when you deactivate the plugin</strong>, all its settings will be removed from the database. Load JavaScript in Footer Loads JavaScript at the end of the blog's HTML (experimental) (default: off) Make a gallery for all images on the page (default) Make a gallery for each post (will only work if your theme uses <code>class="post"</code> on each post, which is common in WordPress Miscellaneous Mouse Wheel Navigation Navigation Arrows Only works with <strong>Ajax</strong> and <strong>Inline</strong> content! Flash dimensions won't be autodetected so specify them below if necessary. If you want to insert several pieces of flash content with different dimensions you will have to use the <strong>Additional FancyBox Calls</strong> option. Opacity of overlay. 0 is transparent, 1 is opaque (default: 0.3) Other Settings <span style="color:red">(advanced)</span> Outside Over Overlay Options Padding Padding size in pixels (default: 10) Remove Settings when plugin is deactivated from the "Manage Plugins" page. (default: off) Remove settings Revert to defaults Right (default) Save Changes Scale images to fit in viewport (default: on) See the <a href="http://docs.jquery.com/" target="_blank">jQuery Documentation</a> for more help. Settings Settings in this section should only be changed if you are having problems with the plugin! Show Border (default: off) Show Close button (default: on) Show the navigation arrows (default: on) Show the title (default: on) Skip jQuery call. Use this only if jQuery is being loaded twice (default: off) Speed in miliseconds of the animation when navigating thorugh gallery items (default: 300) Speed in miliseconds of the zooming-in animation (default: 500) Speed in miliseconds of the zooming-out animation (default: 500) Support The author of this WordPress Plugin also likes beer :P The following settings should be left alone unless you know what you are doing. These are additional settings for advanced users. These setting control how Fancybox looks, they let you tweak color, borders and position of elements, like the image title and closing buttons. These settings control the animations when opening and closing Fancybox, and the optional easing effects. This option won't be recognized if you use <strong>Parallel Load</strong> plugin. In that case, you can do this from Parallel Load's options. This will make galleries cyclic, allowing you to keep pressing next/back (default: off) Title Title text color (default: #333333) Top (default) Transition Type Transition type when closing FancyBox. (default: fade) Transition type when opening FancyBox. (default: fade) Troubleshooting Troubleshooting Settings Try reverting the plugin's settings to their defaults with the button below. Try to localize the problem (switch your theme and deactivate plugins until you find the source of the problem). You can also try the Troubleshooting settings of this plugin if necesary. Uninstall Use a custom expression to apply FancyBox When posting your problem please provide a link to your blog and the page where the error is found, and all relevant information you can, especially your theme, plugins, etc. Width for iframe and swf content. Also set for inline content if <em>autoDimensions</em> is disabled (default: 560) Zoom Options Project-Id-Version: FancyBox for WordPress Español
Report-Msgid-Bugs-To: http://wordpress.org/tag/fancybox-for-wordpress
POT-Creation-Date: 2012-07-03 15:24:31+00:00
PO-Revision-Date: 
Last-Translator: Jose Pardilla <info@josepardilla.com>
Language-Team: Moskis <jose@moskis.net>
MIME-Version: 1.0
Content-Type: text/plain; charset=UTF-8
Content-Transfer-Encoding: 8bit
X-Poedit-Language: Spanish
X-Poedit-Country: SPAIN
 &middot; Si prefieres hacerlo manualmente puedes usar algo como <code>jQuery("a:has(img)[href$='.jpg']")</code> o lo que m&aacute;s se ajuste a tu blog. &middot; La expresión personalizada tiene que aplicar el atributo <code>class="fancybox"</code> a los enlaces en los que quieras usar FancyBox. No llames a la funci&oacute;n <code>fancybox()</code> aqu&iacute;, de eso ya se encarga el plugin. &middot; La funci&oacute;n <code>addClass()</code> de jQuery es una buena forma de a&ntilde;adir el class a los links deseados. &middot; Puedes usar <code>getTitle()</code> en tu expresi&oacute;n para copiar el atributo title desde el tag <code>IMG</code> al tag <code>A</code>, para que FancyBox pueda mostrar el t&iacute;tulo de la imagen. &middot; Puedes usar <code>jQuery(thumbnails)</code> como en el ejemplo para aplicar FancyBox a las miniaturas de im%aacute;genes que enlazen a estas extensiones: BMP, GIF, JPG, JPEG, PNG tanto en min&uacute;scula como en may&uacute;scula). (Requiere el tipo de transición de cerrado elástico) (Requiere el tipo de transición de inicio elástico) (Debería contrastar con el color del margen establecido más arriba) (Hay 30 efectos diferentes, los primeros son los más aburridos. Puedes probarlos <a href="http://commadot.com/jquery/easing.php" target="_blank">aquí</a> o <a href="http://hosted.zeh.com.br/mctween/animationtypes.html" target="_blank">aquí</a>) (Esta opción debería dejarse en #FFFFFF (blanco) si vas a mostrar algo que no sean imágenes, como contenido anidado) (Ejecutará un archivo JavaScript adicional, 3KB) (Ejecutará un archivo JavaScript adicional, 8KB) (Puedes que quieras dejar esta opción desactivada si vas a usar contendido anidado que incluya enlaces - for ejemplo: botones de play, enlaces a otras páginas) <a href="http://fancybox.net">FancyBox</a> desarrollado por <a href="http://fancybox.net">Janis Skarnelis</a>, adaptado a WordPress por <a href="http://http://josepardilla.com/">Jos&eacute; Pardilla</a>. Licenciado bajo <a target="_blank" href="http://en.wikipedia.org/wiki/MIT_License">Licencia MIT</a>. <strong>Nota:</strong> Usar un plugin de caché puede hacer que los cambios no surjan efecto inmediatamente, si esto ocurre vacía el cache después de guardar los cambios o desactívalo hasta que termines de ajustar estas opciones. <strong>Nota:</strong> Si la actualización a la versión 3.0.0 estropea FancyBox en tu blog, posiblemente tengas que reestablecer las opciones del plugin (desde el botón blanco de abajo). Activar efecto de animación (por defecto: desactivado) Añadir overlay (por defecto: activado) Llamadas Extra de FancyBox Llamadas Extra de FancyBox (por defecto: desactivado) Opciones de Animación <span style="color:green">(básico)</span> Animaciones Apariencia Opciones de Apariencia <span style="color:green">(básico)</span> Como puedes ver, este plugin te permite editar muchas opciones, pero no te preocupes, puedes dejarlo todo como está, ya que las opciones predefinidas no están mal para empezar... :) Ajustar Tamaño Auto detectar dimensiones (por defecto: activado) Opciones de Comportamiento <span style="color:orange">(medio)</span> Comportamiento Borde Abajo Retrollamada en evento <strong>Cancelar</strong>: Se ejecutará tras cancelar la carga del contenido Retrollamada en evento <strong>Limpieza</strong>: Se ejecutará justo antes de empezar a ocultar el contenido Retrollamada en evento <strong>Cerrado</strong>: Se ejecutará tras cerrar FancyBox Retrollamada en evento <strong>Completado</strong>: Se ejecutará una vez se termine de mostrar el contenido Retrollamada en evento <strong>Inicio</strong>: Se ejecutará justo antes de intentar cargar el contenido Retrollamadas Centrar al hacer Scroll Animar opacidad durante el efecto de zoom (por defecto: activado) Cámbialas de una en una y comprueba si solucionan tu problema. Recuqerda que usar un plugin de caché puede hacer que los cambios no surjan efecto inmediatamente, vacía el cache después de guardar los cambios or desactivalo hasta que termines de ajustar estas opciones. Botón de Cerrar Cerrar FancyBox al hacer click en la imagen (por defecto: desactivado) Cerrar FancyBox al hacer click en el fondo (por defecto: activado) Cerrar Fancybox cuando se pulse la tecla &quot;Escape&quot; (por defecto: activado) Posición del Botón de Cerrar: Cerrar al hacer click en contenido Cerrar al hacer click en el fondo Cerrar con &quot;Esc&quot; Indicaciones para expresiones personalizadas: Galerías Cíclicas Dimensiones No cargar jQuery No agrupar im&aacute;genes en galer&iacute;as autom&aacute;ticamente (usa esta opci&oacute;n si quieres agrupar las imagenes manualmente con el atributo <code>REL</code>) Efecto de Animación Efecto de animación al cerrar FancyBox. (por defecto: easeInBack) Efecto de animación al navegar por galerías. (por defecto: easoInOutQuart) Efecto de animación al abrir FancyBox. (por defecto: easeOutBack) Activar retrollamadas (por defecto: desactivado) Activar esta opcíón mostrará opociones adicionales. Ejemplo: Ejemplos: Llamadas Extra Llamadas Extra de FancyBox <span style="color:red">(avanzado)</span> Fancybox for WordPress (versión %s) S&iacute;gueme en Twitter para m&aacute;s Plugins y Temas de WordPress Para más información acerca de las opciones que puedes usar en este campo, lee esta página sobre la <a href="http://fancybox.net/api">API y Opciones de FancyBox</a>. Galerías Opciones de Galería <span style="color:red">(avanzado)</span> Tipo de Galería Color HTML del borde (por defecto: #BBBBBB) Color HTML del overlay (por defecto: #666666) Color HTML del margen (por defecto: #FFFFFF) Alto para iframes y contenido Flash. También afecta a contenido en línea si <em>Auto detectar dimensiones</em> está desactivado (por defecto: 340) Ayuda sobre ancyBox Ayuda para el plugin Fancybox for WordPress Aquí  puedes añadir todas las llamadas adicionales a FancyBox que quieras, con distintas opciones. Por ejemplo, si quieres usar FancyBox con iframes o con Ajax en cualquier enlace concreto, aquí puedes configurarlo sin afectar al resto de opciones. Aquí puedes elegir si quieres que el plugin agrupe las imágenes en una galería, o hacer una galería para cada entrada. También puedes definir tu propia expresión en jQuery. IMPORTANTE: Si el plugin no funciona, lo primero que deberías hacer es comprobar que no haya un conflicto con otros plugins, especialmente otro tipo de Lightbox, Slimbox, etc. Asegúrate de que todos tus plugins y tu WordPress están actualizados (este plugin solo se ha testado con WordPress 2.7 y superiores). Si eres un usuario avanzado, puedes <a target="_blank" href="https://github.com/moskis/fancybox-for-wordpress">seguir el plugin en Github</a>, y colaborar aportando correcciones! Si tienes problemas para hacer funcionar este plugin echa un vistazo a esta página de <a target="_blank" href="http://plugins.josepardilla.com/fancybox-for-wordpress/faq">Preguntas Frecuentes</a> donde intentaré explicar los problemas más habituales y cómo resolverlos. Si tienes problemas o dudas acerca de FancyBox (y no este plugin en sí), por favor visita estos enlaces (en inglés): <a href="http://fancybox.net/howto">How-To</a> & <a href="http://fancybox.net/faq">FAQ</a>.<br />Si eso no ayuda, ves al <a href="http://groups.google.com/group/fancybox">Grupo de Google de FancyBox</a>, usa la opción de <strong>Búsqueda</strong>, y si no encuentras lo que buscas, pregunta allí. Si aún no puedes hacer funcionar el plugin, <a target="_blank" href="http://wordpress.org/support/plugin/fancybox-for-wordpress#postform">escribe en el foro de Soporte de WordPress</a> o echa un vistazo a <a target="_blank" href=""http://wordpress.org/support/plugin/fancybox-for-wordpress">los mensajes ya escritos en dicho foro</a>. Si usas FancyBox y te gusta, c&oacute;mprale una cerveza al autor! Informaci&oacute;n Información Dentro (por defecto) Mantiene la imagen en el centro de la ventana del naegador al hacer scroll (por defecto: activado) Deja en blanco cualquier Retrollamada que no quieras usar. Izquierda Permita a los visitantes navegar por las galerías con la rueda del ratón (por defecto: desactivado) Al igual que otros plugins, FancyBox for WordPress guarda sus opciones en la tabla de opciones de la base de datos de WordPress. En realidad, estas opcines no ocupam más que unos kilobytes de espacio, pero si quieres eliminar el plugin por completo, activa la siguiente opción, guarda los cambios, y <strong>cuando desactives el plugin</strong>, todas las opciones se eliminarán de la base de datos. Cargar JavaScript en el Pié de página Carga el JavaScript al final del código HTML del blog (experimental) (por defecto: desactivado) Incluir todas las imágenes de la página en una única galería (opción por defecto) Hacer una galer&iacute;a para cada post (solo funcionar&aacute; si el tema usa <code>class="post"</code> en cada post, que es lo m&aacute;s com&uacute;n en WordPress Miscelánea Navegación por rueda del ratón Flechas de Navegación Sólo funciona con <strong>Ajax</strong> y  <strong>Contenido en línea</strong>! Las dimenciones de elementos Flash no se autodetectan así que especifícalas aquí debajo si lo necesitas. Si necesitas insertar varios elementos Flash de tamaños distintos tendrás que usar el apartado de <strong>Llamadas Extra</strong>. Opacidad del overlay. 0 es transparente, 1 es opaco (por defecto: 0.3) Otras Opciones <span style="color:red">(avanzado)</span> Fuera Encima Opciones de Overlay Margen Tamaño del margen en píxeles (por defecto: 10) Eliminar opciones cuando se desactive el plugin desde la página "Gestionar Plugins". (por defecto: desactivado) Eliminar Opciones Restaurar valores por defecto Derecha (por defecto) Guardar Cambios Ajusta el tamaño de las imagenes a la ventana del navegador (por defecto: activado) Visita la <a href="http://docs.jquery.com/" target="_blank">Documentaci&oacute;n de jQuery</a> para encontrar m&aacute;s ayuda. Opciones Las opciones de esta sección solo deben ser editadas si tienes problemas con el plugin! Mostrar Borde (por defecto: desactivado) Mostrar el Botón de Cerrar (por defecto: activado) Mostrar flechas de navegación (por defecto: activado) Mostrar el título (por defecto: activado) Omitir llamada a jQuery. Usa esta opción sólo si jQuery se está cargando dos veces por error. (por defecto: desactivado) Velocidad en milisegundos de la animación al navegar entre los elementos de una galería (por defecto: 300) Velocidad en milisegundos del efecto de Zoom In (por defecto: 500) Velocidad en milisegundos del efecto de Zoom Out (por defecto: 500) Soporte Al autor de este plugin para WordPress tambi&eacute;n le gusta la cerveza :P Las siguientes opciones sólo deberían ser editadas si sabes lo que estás haciendo. Las siguientes opciones son para usuarios avanzados. Estas opciones controlan el aspecto general de FancyBox, te permiten ajustar los colores, bordes y posición de elementos como el título de la imagen y el botón de cerrar. Estas opciones controlan las animaciones al abrir y cerrar Fancybox, y los efectos opcionales de animación. Esta opción será ignorada si el plugin <strong>Parallel Load</strong> está instalado. Si es así, usa las opciones del plugin Parallel Load. Esta oción generará galerías cíclicas, permitíendote pulsar los botones de navegación indefinidamene (por defecto: desactivado) Título Color del título (por defecto #333333) Arriba (por defecto) Tio de Transición Tipo de transición al cerrar FancyBox. (por defecto: fade) Tipo de transición al abrir FancyBox. (por defecto: fade) Ayuda Resolución de Problemas Prueba a resetear las opciones a sus valores originales con el botón al pie de esta página. Intenta localizar la fuente del problema (cambia de tema y/o desactiva plugins hasta que encuentres lo que causa el problema). También puedes usar las optiones de Resolución de Errores que hay al final de esta página. Desinstalar Aplicar FancyBox con una expresión personalizada Cuando expliques tu problema, por favor deja un enlace a tu blog y una página donde FancyBox falla, así como cualquier información reelevante, como el tema de WordPress y plugins que usas. Ancho para iframes y contenido Flash. También afecta a contenido en línea si <em>Auto detectar dimensiones</em> está desactivado (por defecto: 560) Opciones de Zoom 