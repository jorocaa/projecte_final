<!DOCTYPE html>
<html lang="en">
<head>
    @include('head')
    <title>{{config('app.name')}} - {{config('app.subtitle')}}</title>
    <style>
        img.huechange2 { filter: hue-rotate(330deg); }
        img.huechange { filter: hue-rotate(180deg); }
        hr{
            height: 1px;
            background-color: black;
            border: none;
        }
        .global{
            background-color: #eee;
            border: #505 1px solid;
            opacity: 0.92;
        }
        body{
            /*Firts->background: #513a8b;*/
            /*background: linear-gradient(to bottom right, #513a8b, cadetblue);*/
            background-image: url({{asset('15.jpg')}});
            background-repeat: no-repeat;
            background-size: 115%;
        }
    </style>
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
            integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
            crossorigin=""></script>
    <script src="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.js"></script>
</head>
<body>
    @include('navbarBase')
    <div class="global">
        Nuestros términos y condiciones de uso

        Imagine un mundo en el que cada persona pueda compartir libremente la suma de todo el conocimiento. Ese es nuestro compromiso. – Nuestra visión de los proyectos

        ¡Bienvenido a Wikimedia! La Fundación Wikimedia, Inc. ("nosotros"), es una organización sin ánimo de lucro cuya misión es la de potenciar e involucrar a las personas alrededor del mundo para recopilar y desarrollar contenido disponible bajo una licencia libre, o en el dominio público y difundirlo efectiva y globalmente de manera gratuita.

        Para apoyar a nuestra vibrante comunidad, proporcionamos la infraestructura técnica y organizativa esencial para el desarrollo de proyectos Wiki multilingües y sus ediciones (como se explica aquí) y otros esfuerzos que sirvan a nuestra misión. Nos esforzamos por hacer y mantener disponible en Internet el contenido educativo e informativo de nuestros Proyectos sin costo, a perpetuidad.

        Le damos la bienvenida a usted (en adelante "usted" o "el usuario") como lector, editor, autor o colaborador de los proyectos de Wikimedia y le animamos a unirse a la comunidad de Wikimedia. Antes de que participe, le pedimos que lea atentamente y acepte los siguientes Términos y condiciones de uso (en adelante "Términos y condiciones de uso").

        Resumen
        Estos términos y condiciones de uso explican nuestros servicios públicos en la Fundación Wikimedia, nuestra relación con usted como usuario y los derechos y responsabilidades recíprocos. Queremos que sepa que alojamos una enorme cantidad de contenido educativo e informativo, que ha sido aportado y se ha hecho posible por usuarios como usted. Generalmente no contribuimos, inspeccionamos o eliminamos contenido (con la rara excepción de políticas como los presentes términos de uso o por exigencia legal en el caso de notificaciones DMCA). Esto significa que el control editorial está en sus manos y en las del resto de usuarios, que son quienes crean y gestionan el contenido. Nosotros meramente alojamos dicho contenido.

        La comunidad —la red de usuarios que constantemente construyen y usan los variados sitios o Proyectos— es el principal medio a través del cual se cumplen las metas de la misión. La comunidad contribuye y ayuda a gobernar nuestros sitios. La comunidad se encarga de la función crítica de crear y fiscalizar políticas para las ediciones específicas de Proyectos (como las ediciones en distintos idiomas del Proyecto Wikipedia o la edición multilingüe de Wikimedia Commons).

        Usted es bienvenido para unirse como colaborador, editor o autor, pero debe seguir las políticas que gobiernan cada una de las ediciones independientes de los Proyectos. El mayor de nuestros proyectos es Wikipedia, pero también albergamos otros proyectos, cada uno con distintos objetivos y métodos de trabajo. Cada edición de un Proyecto tiene un equipo de colaboradores, editores o autores que trabajan juntos para crear y gestionar el contenido de esa edición del Proyecto. Usted es bienvenido a unirse a dichos equipos y trabajar con ellos para mejorar los Proyectos. Como nos dedicamos a ofrecer acceso a contenido al público libremente, generalmente requerimos que todo el contenido al que usted contribuya se publique bien bajo una licencia libre o bien se encuentre en el dominio público.

        Por favor, tenga presente que usted es responsable legalmente de todas las contribuciones, ediciones y reuso del contenido de Wikimedia bajo las leyes de los Estados Unidos de América y otras leyes aplicables (que pueden incluir las leyes de donde usted vive o de donde usted ve o edita contenido). Esto significa que que es importante que usted tenga precaución cuando publica contenido. En vista de esta responsabilidad, tenemos algunas reglas sobre lo que usted no puede publicar, la mayor parte de las cuales son o bien para su protección o para la protección de otros usuarios como usted. Por favor, recuerde que el contenido que alojamos es solamente para uso informativo general, por lo que si usted necesita recomendación experta para una cuestión en particular (como asuntos médicos, legales o financieros), usted debe buscar asesoramiento de un profesional. También incluimos otros avisos y limitaciones generales de responsabilidad, de manera que por favor lea estos términos y condiciones de uso por completo.

        Para mayor claridad, otras organizaciones, como capítulos locales de Wikimedia y asociaciones, que compartan la misma misión son de todas maneras legalmente independientes y separadas de la Fundación Wikimedia y no tienen responsabilidad por las operaciones del sitio web o su contenido.


        1. Nuestros servicios
        La Fundación Wikimedia se dedica a fomentar el crecimiento, desarrollo y distribución de contenido libre multilingüe y a albergar el contenido completo de estos Proyectos basados en wiki para el público de manera gratuita. Nuestro rol es albergar algunos de los Proyectos de referencia editados colaborativamente más grandes del mundo, que se encuentran aquí. No obstante, nosotros actuamos solamente como un servicio de alojamiento, manteniendo la infraestructura técnica y organizativa que permite a nuestros usuarios construir los Proyectos Wikimedia mediante la contribución y edición de contenido por sí mismos. Debido a nuestro rol único, hay un par de cosas que usted debe tener presente al considerar nuestra relación con usted, los Proyectos y los demás usuarios:

        No ejercemos un rol editorial: Como los Proyectos de Wikimedia se editan en colaboración, todo el contenido que albergamos lo proveen usuarios como usted, y no ejercemos un rol editorial. Esto significa que generalmente no monitoreamos o editamos el contenido de los sitios web de los Proyectos, y no ejercemos responsabilidad alguna por este contenido. Del mismo modo, no respaldamos ninguna opinión expresada a través de nuestros servicios, y no representamos o garantizamos la veracidad, exactitud o confiabilidad del contenido publicado por la comunidad. En cambio, nosotros simplemente proveemos acceso al contenido que sus usuarios colegas han contribuido y editado.
        Usted es el único responsable de sus actos:' usted es responsable legalmente de sus ediciones y sus contribuciones a los proyectos de Wikimedia. Para su propia protección, usted debe ejercitar la debida diligencia y evitar contribuir en cualquier tipo de contenido que pueda resultar en responsabilidad civil o criminal para usted bajo las leyes aplicables. Para mayor claridad, las leyes aplicables incluyen como mínimo las de los Estados Unidos de América. Aunque puede que no compartamos dichas acciones advertimos a editores y colaboradores que las autoridades podrán intentar aplicar otras leyes a usted, incluyendo leyes locales de donde usted resida, vea o edite el contenido. La Fundación Wikimedia generalmente no puede ofrecer ningún tipo de protección, garantía, inmunidad o indemnización.
        2. Política de protección de datos
        Le pedimos que revise nuestra política de protección de datos, para que se informe de la manera en la que recopilamos y usamos su información. Dado que nuestros servicios son usados por personas alrededor de todo el mundo la información personal que nosotros recopilamos puede ser guardada y procesada en los Estados Unidos de América o en cualquier otro país en el cual nuestros agentes mantengan instalaciones. Usando nuestros servicios usted consiente a dicha transferencia de información fuera de su país.

        3. El contenido que alojamos
        Podrá encontrar material reprobable o erróneo: Como proveemos un amplio rango de contenido producido o recopilado por usuarios colegas, usted podrá encontrar material que que usted encuentre erróneo, engañoso, mal etiquetado, o de otro modo objetable. Por lo tanto, le pedimos que tenga sentido común y buen juicio cuando use nuestros servicios.
        Nuestro contenido es solamente para uso informativo general: Aunque alojamos una gran cantidad de información que refiere a temas profesionales, como asuntos médicos, legales o financieros, este contenido se presenta solamente uso informativo general. No se debería considerar como asesoramiento profesional. Por favor, busque asesoramiento profesional independiente de alguien licenciado o calificado en el área aplicable, en lugar de actuar acorde con cualquier información, opinión o recomendación contenida en alguno de las sitios web de los Proyectos.
        4. Abstenerse de ciertas actividades
        Los Proyectos alojados por la Fundación Wikimedia existen sólo porque hay una vibrante comunidad de usuarios como usted que colaboran en conjunto para escribir, editar y mejorar el contenido. Nosotros, con satisfacción, damos la bienvenida a su participación en esta comunidad. Lo animamos a que sea cívico y educado en sus interacciones con los demás en la comunidad, que actúe de buena fe, y realice ediciones y contribuciones orientadas a fomentar la misión de este Proyecto compartido.

        Ciertas actividades, sean éstas legales o ilegales, pueden ser perjudiciales para otros usuarios o violar nuestras reglas; y otras actividades pueden acarrear para usted responsabilidades. Así pues, para su propia protección y por la de los demás usuarios, usted no debe cometer y/o participar de esas actividades en nuestros proyectos. Ésas actividades incluyen:

        Hostigar y/o acosar a otros
        Participar en hostigamiento, acoso, amenazas, acecho, publicidad (spam) o vandalismo; y
        La transmisión de correo electrónico en cadena, correo basura o correo no deseado a otros usuarios.
        Violar la intimidad de los demás
        Infringir los derechos a la intimidad personal de los demás al amparo de la legislación de los Estados Unidos de América o de otros ordenamientos jurídicos aplicables (que puede incluir el ordenamiento jurídico del país en el que usted viva o donde usted ve o edita el contenido);
        Solicitar información personal identificable con el propósito de hostigar, atacar, explotación, violación de la intimidad o cualquier propósito promocional y/o comercial no aprobado de manera explícita por la Fundación Wikimedia; y
        Solicitar información personal identificable de cualquier persona menor de 18 años para propósitos ilícitos o para violar cualquier ley aplicable en relación a la salud y el bienestar de las personas menores de edad.
        Participar en declaraciones falsas, suplantaciones o fraude
        Publicar de manera intencionada o con conocimiento contenido que constituya injurias o calumnias o sea difamatorio:
        Publicar, con el intento de engañar, contenido que es falso o inexacto.
        Intentar usurpar la identidad de otro usuario o persona, representando de manera falsa su afiliación con cualquier individual o entidad, o usando el nombre de usuario de otro usuario con el propósito de engañar; y
        Realizar o participar en actividades fraudulentas.
        Comisión de infracciones
        Infringir derechos de autor, marcas registradas, patentes u otros derechos propietarios según las leyes aplicables.
        Utilizar de manera indebida nuestros servicios para otras actividades ilícitas
        Publicar pornografía infantil o cualquier otro contenido que viole leyes aplicables relativas a pornografía infantil;
        Publicar o traficar material obsceno que sea ilícito según leyes aplicables; y
        Usar los servicios de manera inconsistente con leyes aplicables.
        Hacer un uso indebido y/o ilegal de nuestros servicios
        Publicar o distribuir contenido que contenga virus, malware, gusanos, caballos de Troya, código malicioso u otros dispositivos que pueda dañar nuestra infraestructura o sistemas técnicos o los de nuestros usuarios;
        Enfrascarse en uso automatizado de nuestro sitio que abuse o trastorne los servicios y no tenga la aprobación de la comunidad de Wikimedia;
        Trastornar los servicios mediante la colocación de una carga indebida en el sitio web de un Proyecto o las redes o servidores conectados al sitio web de un Proyecto;
        Trastornar los servicios mediante el desbordamiento de cualquiera de los sitios web de Proyectos mediante comunicaciones u otro tráfico que no sugiera ningún interés serio en usar el sitio web del Proyecto para su cometido establecido;
        Acceder, manipular o usar a sabiendas cualquiera de nuestras áreas no públicas de nuestros sistemas informáticos sin autorización; y
        Sondear, escanear o probar la vulnerabilidad de cualquiera de nuestros sistemas técnicos o redes, a menos que se cumplan todas las siguientes condiciones:
        que las acciones no abusen o trastornen indebidamente nuestros sistemas técnicos o redes;
        que las acciones no se realicen para ganancia personal (excepto por el crédito de su obra);
        que usted reporte las vulnerabilidades a los desarrolladores de MediaWiki (o las repare usted mismo); y
        que usted no realice dichas acciones con intenciones maliciosas o destructivas.
        Contribuciones remuneradas sin revelar tal circunstancia
        Estos Términos y condiciones de uso prohíben realizar actividades engañosas, como son la tergiversación respecto de la afiliación, la suplantación de identidad y el fraude. Como parte de estas obligaciones, deberá revelar el nombre de su empleador, cliente y relación que mantiene respecto a cualquier contribución por la que haya recibido o espera recibir una remuneración. Dicha información deberá revelarse al menos en una de las siguientes formas:

        una declaración en su página de usuario,
        una declaración en la página de discusión vinculada a cualquier contribución remunerada, o
        una declaración en el resumen de edición vinculado a cualquier contribución remunerada.
        La legislación aplicable o las políticas y directrices de la comunidad y de la Fundación, como son las relativas a los conflictos de intereses, podrán limitar aún más las contribuciones remuneradas o exigir una revelación más detallada de la información.

        La comunidad de un Proyecto de Wikimedia podrá adoptar una política alternativa sobre revelación de información en relación con una contribución remunerada. Si un Proyecto adopta una política alternativa de revelación de información, al realizar una contribución a ese Proyecto, usted puede cumplir dicha política en vez de los requisitos establecidos en esta sección. Una política alternativa de revelación de información sustituirá a estos requisitos únicamente cuando esté aprobada por la correspondiente comunidad del Proyecto e indicada en la página que enlista políticas alternativas de revelación de información.

        Para más información, lea el apartado Preguntas frecuentes sobre revelación de información en contribuciones remuneradas.

        Nos reservamos el derecho de ejercer nuestro juicio de cumplimiento con respecto a los términos y condiciones detallados anteriormente.

        5. Seguridad de las contraseñas
        Usted es el único responsable de la salvaguarda de su contraseña y no debe jamás revelarla a un tercero.

        6. Marcas registradas
        Aunque usted tiene libertades considerables para reusar el contenido de los sitios web de los Proyectos, es importante remarcar que en la Fundación Wikimedia protegemos nuestros derechos a marcas registradas, de manera de poder proteger a nuestros usuarios de impostores fraudulentos. Debido a ello, le pedimos que por favor respete nuestras marcas registradas. Todas las marcas registradas de la Fundación Wikimedia pertenecen a la Fundación Wikimedia, y cualquier uso de nuestros nombres comerciales, marcas registradas, marcas de servicios, logos o nombres de dominios debe cumplir con estos Términos y condiciones de uso y nuestra Política de marcas registradas.

        7. Licencia del contenido
        Para hacer crecer el conocimiento y la cultura libre en común, todos los usuarios que contribuyen a nuestros Proyectos deben otorgar permisos amplios al público para redistribuir y reutilizar sus contribuciones libremente, siempre y cuando ese uso se atribuya adecuadamente y se otorguen las mismas libertades de reutilizar y redistribuir a cualquier obra derivada. Para cumplir con nuestra meta de proveer información libre a la mayor audiencia posible, requerimos que cuando sea necesario todo el contenido que usted contribuya tenga una licencia que permita que cualquiera que le interese acceder a él pueda reutilizarlo libremente.

        Usted acepta adherirse a los siguientes requisitos de licenciamiento:

        Texto del cual usted posee derechos de autor: Cuando usted contribuye texto del cual usted posee derechos de autor, usted acepta publicarlo bajo las siguientes licencias:
        Licencia Creative Commons Atribución-CompartirIgual 3.0 Unported ("CC BY-SA"), y
        Licencia de Documentación Libre de GNU ("GFDL") (sin versión, sin secciones, textos de tapa o contratapa invariantes).
        (Los reutilizadores pueden cumplir cualquiera de las licencias o ambas.)

        La única excepción es si la edición o modalidad de Proyecto requiere una licencia diferente. En ese caso, usted acepta publicar cualquier texto que usted contribuya bajo esa licencia en particular. Por ejemplo, al momento de publicar esta versión de los Términos y condiciones de uso, Wikinews en Inglés requiere que todo el contenido de texto tenga la Licencia Creative Commons Atribución 2.5 Genérica ("CC BY 2.5") y no requiere una licencia dual con GFDL.

        Por favor tenga en cuenta que dichas licencias permiten el uso comercial de sus contribuciones en tanto que dichos usos cumplan con las condiciones.
        Atribución: La atribución es una parte importante de estas licencias. Consideramos que es otorgar crédito cuando corresponde – a autores como usted. Cuando usted contribuye con texto, usted acepta ser atribuido de alguna de las siguientes maneras:
        Mediante un hiperenlace (donde sea posible) o URL al artículo al cual usted contribuyó (dado que cada artículo tiene una página de historia que lista todos los autores y editores);
        Mediante un hiperenlace (donde sea posible) o URL a una copia en línea alternativa y estable que tenga acceso libre, que cumpla con la licencia, y que provea crédito a los autores de manera equivalente al crédito que se otorga en el sitio web del Proyecto; o
        Mediante una lista de todos los autores (pero tenga en cuenta que cualquier lista de autores puede ser filtrada para excluir ediciones muy pequeñas o irrelevantes).
        Importar texto: Usted puede importar texto que encuentre en otro sitio o del que usted sea coautor, pero en esos casos usted debe garantizar que el texto esté disponible bajo términos compatibles con la licencia CC BY-SA 3.0 (o, como se explicó anteriormente, con otra licencia cuando se lo requiera excepcionalmente en la edición o modalidad de Proyecto) ("CC BY-SA"). No se permite contenido disponible solamente bajo la GFDL.
        Usted acepta que, si usted importa texto bajo una licencia CC BY-SA que requiere atribución, usted debe otorgar crédito a los autores de manera razonable. Cuando dicho crédito se otorgue comúnmente mediante historias de páginas (como al copiar internamente en Wikimedia), al importar texto basta con otorgar atribución en el resumen de edición, que se registra en la historia de la página. Los requisitos de atribución a veces son demasiado molestos en circunstancias particulares (más allá de la licencia), y puede haber instancias en las que la comunidad de Wikimedia decida que por esa razón no se pueda importar texto.

        Medios no textuales: Los medios no textuales en los Proyectos están disponibles bajo diferentes licencias que permiten la meta general de permitir reuso y redistribución sin restricciones. Cuando usted contribuye con medios no textuales, usted acepta cumplir con los requisitos de dichas licencias como se describe en nuestra Política de Licencias, y también cumplir con los requisitos de las ediciones o modalidades específicas de Proyectos a las que usted contribuya. Vea también la Política de Licencias de Wikimedia Commons para más información sobre contribución de medios no textuales a ese Proyecto.
        No revocación de licencia: Excepto cuando sea consistente con su licencia, usted acepta que usted no revocará o buscará invalidar unilateralmente cualquier licencia que usted haya otorgado según estos Términos y condiciones de uso a contenido de medios textuales o no textuales contribuido a los proyectos o modalidades de Wikimedia, incluso si usted termina de usar nuestros servicios.
        Contenido de dominio público: ¡Contenido en el dominio público es bienvenido! No obstante, es importante que usted confirme la condición de dominio público del contenido bajo la ley de los Estados Unidos de América así como las leyes de cualquier otro país según se requiera en la edición de Proyecto específica. Cuando usted contribuye con contenido en el dominio público, usted garantiza que el material realmente está en el dominio público, y usted acepta etiquetarlo apropiadamente.
        Reutilización: La reutilización de contenido que alojamos es bienvenido, aunque existen excepciones para contenido contribuido bajo exenciones de "uso razonable" o similares bajo leyes de derechos de autor. Cualquier reutilización debe cumplir con las licencias subyacentes.
        Cuando usted reutiliza o redistribuye una página de texto desarrollada por la comunidad de Wikimedia, usted acepta atribuir los autores de alguna de las siguientes maneras:
        Mediante un hiperenlace (donde sea posible) o URL a la página o páginas que usted está reutilizando (dado que cada página tiene una página de historia que lista todos los autores y editores);
        Mediante un hiperenlace (donde sea posible) o URL a una copia en línea alternativa y estable que tenga acceso libre, que cumpla con la licencia, y que provea crédito a los autores de manera equivalente al crédito que se otorga en el sitio web del Proyecto; o
        Mediante una lista de todos los autores (pero tenga en cuenta que cualquier lista de autores puede ser filtrada para excluir ediciones muy pequeñas o irrelevantes).
        Si el contenido de texto fue importado de otra fuente, es posible que el contenido tenga una licencia compatible CC BY-SA pero no con GFDL (como se describe anteriormente en "Importar texto"). En ese caso, usted acepta cumplir con la licencia compatible CC BY-SA y no tiene la opción de relicenciarlo bajo GFDL. Para determinar la licencia que aplica al contenido que usted busca reutilizar o redistribuir, usted debería revisar el pie de página, la página de historial y la página de discusión.

        Además, por favor tenga presente que el texto originado en fuentes externas e importado a un Proyecto puede tener licencia con requisitos adicionales de atribución. Los usuarios aceptan indicar claramente estos requisitos adicionales de atribución. Dependiendo del Proyecto, dichos requisitos puede aparecer por ejemplo en una barra u otra notación que indique que parte o todo el contenido fue publicado originalmente en otro sitio. Cuando existen estas notaciones visibles, los reutilizadores deben preservarlas.

        Para cualquier medio no textual, usted acepta cumplir con cualquier licencia bajo la que se haya publicado la obra (se puede saber por hacer clic en la obra y observar la sección de licencia en su página de descripción o revisar una página fuente que aplique a esa obra). Cuando reutiliza cualquier contenido que alojamos, usted acepta cumplir con los requisitos de atribución relevantes que correspondan con las licencias subyacentes.
        Modificaciones o añadidos a material que usted reutiliza: Cuando usted modifica o realiza añadidos al texto que usted haya obtenido de un sitio web de un Proyecto, usted acepta publicar el contenido modificado o añadido bajo la licencia CC BY-SA 3.0 o posterior (o, como se explica anteriormente, bajo otra licencia cuando lo requiera excepcionalmente la edición o modalidad específica de Proyecto).
        Cuando usted modifica o realiza añadidos a cualquier medio no textual que usted haya obtenido de un sitio web de Proyecto, usted acepta publicar el contenido modificado o añadido de acuerdo con la licencia bajo la que se haya publicado la obra.

        Tanto con medios textuales como no textuales, usted acepta indicar claramente que la obra original se modificó. Si usted reutiliza contenido de texto en una wiki, basta con indicar en la página de historial que usted realizó un cambio al texto importado. En cada copia o versión modificada que usted distribuya, usted acepta incluir un anuncio de licencia que establezca la licencia bajo la que se publica la obra, junto con o bien un hiperenlace o URL al texto de la licencia, o una copia de la propia licencia.
        8. Cumplimiento con el DMCA (Digital Millenium Copyright Act)
        La Fundación Wikimedia quiere asegurar de que el contenido que alojamos lo pueda reusar otros usuarios sin riesgo de responsabilidad y que no infrinja los derechos propietarios de otros. A decir verdad de nuestros usuarios, así como de otros creadores y titulares de derechos de autor, nuestra política es en respuesta a avisos de presuntas infracciones que cumplen con las formalidades del Digital Millennium Copyright Act (DMCA). En conformidad con el DMCA, nosotros rescindiremos, en circunstancias apropiadas, usuarios y titulares de cuentas de nuestro sistema y red que sean infractores repetidos.

        No obstante, también reconocemos que no todo aviso de remoción es válido o de buena fe. En esos casos, animamos fuertemente a nuestros usuarios a formular oposición cuando crean que una demanda de remoción basada en el DMCA es inválida o incorrecta. Para más información sobre qué hacer si usted piensa que un aviso del DMCA se presentó incorrectamente, puede consultar el sitio web Chilling Effects.

        Si usted es el propietario de contenido que se use inapropiadamente en alguno de los Proyectos sin su permiso puede solicitar que el contenido sea eliminado a tenor de lo dispuesto en el DMCA. Para realizar dicha solicitud, por favor escríbanos a legal@wikimedia.org o contáctese por correo postal con nuestro agente designado a la siguiente dirección.

        Alternativamente usted puede realizar una solicitud a nuestra comunidad, que a menudo resuelve asuntos de infracción a los derechos de autor con mayor celeridad y más efectivamente que lo que ordena el DMCA. En ese caso puede publicar un aviso en el proyecto en cuestión explicando sus intereses de derechos de autor. Para una lista no exhaustiva y autorizada de los procesos relevantes para las distintas ediciones de Proyectos, consulte aquí. Antes de presentar una reclamación amparado en el DMCA, usted también tiene la opción de enviar un correo electrónico a la comunidad a info@wikimedia.org.

        9. Sitios web de terceros y recursos
        Usted es el único responsable por su uso de sitios web o recursos de terceros. Aunque los Proyectos contienen enlaces a sitios webs y recursos de terceros, no respaldamos ni somos responsables por su disponibilidad, precisión o los contenidos, productos o servicios relacionados (incluyendo, sin limitación, cualquier virus u otros elementos destructivos), ni tenemos obligación alguna de monitorear dicho contenido de terceros.

        10. Administración de los sitios web
        La comunidad tiene el rol primario en la creación y fiscalización de políticas que apliquen a las distintas ediciones de Proyectos. En la Fundación Wikimedia, raramente intervenimos en decisiones de la comunidad sobre políticas y su fiscalización. En casos inusuales, puede surgir la necesidad, o la comunidad puede pedirnos, que atendamos la situación de un usuario especialmente problemático debido a disturbios o comportamiento peligroso significativos. En esos casos, nos reservamos el derecho pero no la obligación de:

        Investigar el uso que hace usted de nuestros servicios para (a) determinar si ha existido una violación a estos Términos y condiciones de uso, a alguna política de edición de Proyecto u otra ley o política; o (b) para cumplir cualquier ley o proceso legal aplicable o solicitud gubernamental apropiada;
        Detectar, prevenir, o de cualquier modo abordar casos de fraude, seguridad o problemas técnicos, o responder a solicitudes de asistencia a los usuarios;
        Rechazar, deshabilitar o restringir el acceso a la contribución de cualquier usuario que viole estos términos y condiciones de uso;
        Bloquear a un usuario de editar o contribuir, bloquear la cuenta de un usuario o su acceso por acciones que violen estos Términos y condiciones de uso, incluyendo infracciones repetidas a derechos de autor.
        Tomar medidas legales contra usuarios que violen estos términos y condiciones de uso (incluyendo la presentación de informes a las autoridades policiales), y
        Gestionar de otro modo los sitios web del proyecto de manera de facilitar su buen funcionamiento y proteger los derechos, propiedad y seguridad de nosotros mismos y nuestros usuarios, concesionarios, socios y público en general.
        En el interés de nuestros usuarios y de los Proyectos, en la circunstancia extrema en que cualquier persona tenga bloqueada su cuenta o acceso bajo esta disposición, a dicha persona le queda prohibido crear o usar otra cuenta o intentar acceder al mismo Proyecto, a menos que nosotros tengamos a bien conceder un permiso explícito a tal efecto. Sin limitar la autoridad de la comunidad, la Fundación Wikimedia por sí misma no prohibirá que un usuario edite o contribuya, bloqueará la cuenta o acceso de un usuario solamente por realizar críticas de buena fe que no resulten en acciones que violen estos términos o condiciones de uso o las políticas establecidas por la comunidad.

        La comunidad de Wikimedia y sus miembros también podrán realizar acciones cuando lo permitan las políticas de la comunidad o la Fundación aplicables a la edición específica de Proyecto, incluyendo pero no limitadas a advertir, investigar, bloquear o expulsar a usuarios que violen dichas políticas. Usted acepta cumplir con las decisiones finales de las entidades de resolución de disputas establecidas por la comunidad para las ediciones específicas de Proyectos (como comités de arbitraje); dichas decisiones podrán incluir sanciones como se definan en las políticas de la edición específica del Proyecto.

        Los usuarios cuya cuenta o acceso haya sido bloqueado en múltiples proyectos pueden ser expulsados de todos los proyectos, de acuerdo con la política de expulsión global. A diferencia de las decisiones del Consejo de Administración, las directrices concernientes a las colaboraciones en uno o varios proyectos establecidas por la comunidad de usuarios (tales como la mencionada política de expulsión global) pueden ser modificadas por los usuarios siguiendo los procedimientos acordados por ellos mismos.

        El bloqueo de una cuenta o el acceso o la expulsión de un usuario bajo esta disposición se hará de acuerdo con la sección número 12 de estos términos de uso.

        11. Resoluciones y políticas de los proyectos
        El Patronato de la Fundación Wikimedia elabora políticas oficiales de vez en cuando. Algunas de esas políticas puede que sean obligatorias para determinado Proyecto o edición de Proyecto y cuando lo son, usted acepta cumplirlas.

        12. Finalización de este acuerdo
        Aunque esperamos que usted permanezca y continúe contribuyendo a los Proyectos, usted puede dejar de usar nuestros servicios en cualquier momento. En ciertas circunstancias (esperemos que improbables), puede que sea necesario que tanto nosotros o la comunidad de Wikimedia o sus miembros (como se describe en la sección número 10) finalicemos parte o todos nuestros servicios, concluyamos estos términos de uso, bloqueemos su cuenta o acceso, o lo expulsemos como usuario. Si su cuenta o acceso es bloqueada o concluye de otro modo por cualquier razón, sus contribuciones permanecerán disponibles públicamente (según las políticas aplicables), y a menos que se lo notifiquemos de otro modo, usted podrá seguir accediendo a nuestras páginas públicas para el único motivo de leer contenido disponible públicamente en los Proyectos. En dichas circunstancias, no obstante, puede que usted no tenga acceso a su cuenta o configuraciones. Nos reservamos el derecho de suspender o terminar los servicios en cualquier momento, con o sin causa, y con o sin notificación. Incluso luego de que su uso y participación se bloqueen o suspendan, estos términos de uso seguirán en efecto en relación a las disposiciones relevantes, incluyendo las secciones 1, 3, 4, 6, 7, 9 a 15 y 17.

        13. Disputas y Jurisdicción
        Destacado para enfatizar

        Esperamos que no surjan desacuerdos serios que lo involucren a usted, pero en el evento de que haya una disputa, lo animamos a que busque su resolución a través de los procedimientos o mecanismos de resolución de disputas que provean los Proyectos o ediciones de Proyectos y la Fundación Wikimedia. Si usted busca presentar una reclamación legal en contra de nosotros, usted acepta presentarla y resolverla exclusivamente en una corte estatal o federal ubicada en el Condado de San Francisco, California, Estados Unidos de América. Usted también acepta que las leyes del Estado de California y, en la extensión aplicable, las leyes de los Estados Unidos de América regirán estos Términos de uso, así como cualquier reclamación legal que pueda surgir entre usted y nosotros (sin referencia a principios de conflictos de leyes). Usted acepta presentar a la jurisdicción personal, y acepta que dicho sitio es apropiado, de las cortes ubicadas en el Condado de San Francisco, California, Estados Unidos de América, para cualquier acción o proceso legal relacionado con nosotros o estos Términos de uso.

        Para asegurarnos de que las disputas se atiendan poco después de que surjan, usted acepta que, más allá de cualquier estatuto o ley en contra, cualquier reclamación o causa que usted pueda hacer surgir en relación al uso de nuestros servicios o estos Términos de uso se debe presentar dentro del estatuto de límites aplicable o, si es más temprano, dentro de un (1) año luego de que los hechos pertinentes que lleven a dicha reclamación o causa se hayan descubierto con diligencia razonable (o se impidan para siempre).

        14. Renuncias
        Destacado para enfatizar

        En la Fundación Wikimedia, nos esforzamos al máximo para ofrecer contenidos educativos e informativos para un público muy amplio, pero el uso de nuestros servicios es bajo su propio riesgo. Proveemos estos servicios bajo las cláusulas de "tal y como están" y "como estén disponibles". Por ello renunciamos expresamente a cualquier garantía expresa o implícita de todo tipo, incluyendo pero no limitando, las garantías implícitas de comercialización, idoneidad para un propósito particular y no infracción. No ofrecemos ninguna garantía de que nuestros servicios satisfagan sus necesidades, sean seguros, ininterrumpidos, precisos y sin errores, o que su información estará segura.

        No somos responsables por el contenido, datos o acciones de terceros, y usted libera, a nuestros directores, funcionarios, empleados y agentes de cualquier reclamo y daños, tanto conocidos como desconocidos, que surjan o relacionados de alguna manera con cualquier reclamación que tenga contra cualquier tercero. Ningún consejo o información, ya sea oral o escrita, obtenida por usted de nosotros, través de nuestros servicios, crea ningún tipo de garantía que no esté expresamente establecido en estos Términos y condiciones de uso.

        Cualquier material descargado u obtenido a través del uso de nuestros servicios se realiza bajo su propia discreción y riesgo y usted será el único responsable de cualquier daño a su sistema informático o pérdida de datos que resulte de la descarga de dicho material. Usted acepta que no tenemos ninguna responsabilidad u obligación por la supresión o no almacenamiento o transmisión del contenido o la comunicación mantenida por el servicio. Nos reservamos el derecho a establecer límites sobre el uso y almacenamiento a nuestra discreción en cualquier momento con o sin previo aviso.

        Algunas jurisdicciones no permiten renuncias en esta sección por lo que ésta puede no ser aplicable total o parcialmente para usted dependiendo de la ley que le sea aplicable.

        15. Limitación de responsabilidad
        Destacado para enfatizar

        La Fundación Wikimedia no será responsable ante usted o cualquier otra parte por cualquier daño directo, indirecto, casual, especial, resultante o ejemplar, incluyendo pero no limitado a daños por pérdidas de ganancias, fondos, uso, datos u otras pérdidas intangibles, más allá de si nosotros fuimos advertidos de la posibilidad de dicho daño. Bajo ningún concepto nuestra responsabilidad excederá mil dólares estadounidenses (USD 1.000,00) en total. En el caso de que la ley aplicable no permita la limitación o exclusión de responsabilidad o daños casuales o resultantes, la limitación o exclusión anterior puede que no aplique a usted, aunque nuestra responsabilidad estará limitada al máximo permitido por la ley aplicable.
        16. Modificaciones a estos términos y condiciones de uso
        Así como el aporte de la comunidad de Wikimedia es esencial para el crecimiento y mantenimiento de los Proyectos, creemos que el aporte de la comunidad es esencial para que estos términos de uso sirvan a nuestros usuarios apropiadamente. También es esencial para un contrato justo. Por tanto, nosotros cursaremos notificación a la comunidad de estos términos y condiciones de uso, así como cualquier futura revisión sustancial de estos términos de uso, con al menos treinta (30) días de antelación antes del fin del período de comentarios. Si una futura propuesta de revisión es sustancial, otorgaremos 30 días adicionales para que se efectúen comentarios luego de publicar una traducción de la propuesta de revisión en al menos tres idiomas (elegidos a nuestra discreción). La comunidad será alentada a traducir la propuesta de revisión a otros idiomas según sea apropiado. Para cambios por razones legales o administrativas, para corregir una afirmación imprecisa, o cambios en respuesta a comentarios de la comunidad, nosotros cursaremos un aviso con al menos tres (3) días de antelación.

        Debido a que puede ser necesario modificar estos Términos de uso de vez en cuando, nosotros cursaremos notificación de dichas modificaciones y la oportunidad de comentarlas a través de las páginas web de los Proyectos, y a través de una notificación en WikimediaAnnounce-l (una lista de correo especial para cursar avisos). No obstante, le rogamos que por favor revise periódicamente la versión más actualizada de estos términos y condiciones de uso (disponibles en https://wikimediafoundation.org/wiki/Terms_of_Use/es). El continuar haciendo uso de nuestros servicios luego de que los términos y condiciones de uso nuevos entren en vigor luego de la notificación y período de evaluación constituye una aceptación por su parte de esos términos y condiciones de uso. Para la protección de la Fundación Wikimedia y otros usuarios como usted, si usted no acepta nuestros términos de uso, usted no puede usar nuestros servicios.

        17. Otros términos
        Estos términos de uso no generan una relación laboral, de agencia, sociedad o una unión temporal empresarial entre usted y nosotros (la Fundación Wikimedia). Si usted no firmó un acuerdo con nosotros por separado, estos términos de uso son el acuerdo completo entre usted y la Fundación. Si existiera algún conflicto entre estos términos de uso y un acuerdo escrito firmado por usted y nosotros, el acuerdo hecho por escrito prevalecerá.

        Usted acepta que nosotros podamos proveerle avisos, incluyendo aquellos relacionados con la modificación de los Términos y condiciones de uso, por correo electrónico, correo postal o por medio de publicaciones en sitios web de Proyectos.

        Si en alguna circunstancia nosotros no aplicamos o hacemos cumplir alguna cláusula de estos términos y condiciones de uso ello no significa una renuncia a dicha cláusula.

        Usted comprende que, a menos que haya sido acordado por escrito por nosotros, usted no espera ningún tipo de compensación por cualquier actividad, contribución o idea que haga llegar a nosotros, a la comunidad o los Proyectos o ediciones de Proyectos de Wikimedia.

        No obstante, en el caso de existir cualquier disposición en contrario en estos términos y condiciones de uso, nosotros (la Fundación Wikimedia) y usted nos comprometemos a no modificar los términos y requisitos de ninguna licencia libre que sea empleada en los Proyectos o en cualquier edición cuando dicha licencia libre esté autorizada por estos términos y condiciones de uso.

        Lengua auténtica: Inglés. Estos términos y condiciones de uso ha sido escrito en Inglés (variante de Estados Unidos). Aunque esperamos que las traducciones de estos términos y condiciones de uso sean correctas, en el caso de que existan diferencias de significado entre el texto original en inglés y una versión traducida, la versión original en inglés prevalece sobre cualquier traducción.

        Si cualquier disposición o parte de ellas de estos términos de uso sea ilícita, nula o inaplicable, dicha disposición o parte de la disposición podrá ser separada de estos términos y condiciones de uso y será aplicada en su máxima extensión permitida. Todas las demás disposiciones de estos términos y condiciones de uso permanecerán en total vigor y efecto.

        Gracias
        Apreciamos que usted se haya tomado tiempo para leer estos términos y condiciones de uso, y le agradecemos que usted contribuya a los Proyectos y use nuestros servicios. Mediante sus contribuciones, usted está ayudando a construir algo realmente grande – no solamente una importante colección de Proyectos de referencia editados de manera colaborativa que proveen educación e información a millones de personas quienes de otro modo podrían carecer de acceso a la misma, sino también una vibrante comunidad de pares igualmente involucrados, enfocados en una muy noble meta.</div>
</body>
</html>



