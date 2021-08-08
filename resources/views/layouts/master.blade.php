<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
{{--    fonts--}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;500;600;800;900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Neucha&family=Poppins:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="css/style.css">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-F90XM3LSXJ"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-F90XM3LSXJ');
    </script>

    <title>Inicio</title>
</head>
<body>
<header>
    <div class="max-w">
        <nav class="nav-one">
            <ol>
                <li>
                    <a id="inicio" onclick="first()" href="{{route('index')}}">Inicio</a>
                </li>
                <!-- <li>
                    <a href="#">Sobre Nosotros</a>
                </li> -->
                <!-- <li>
                    <a href="#">Libros</a>
                </li> -->
                <!-- <li>
                    <a href="#">Recursos</a>
                </li> -->
            </ol>
        </nav>
        <div class="hamburger">
            <div class="_layer -top"></div>
            <div class="_layer -mid"></div>
            <div class="_layer -bottom"></div>
        </div>
        <nav class="menuppal">
            <ul>
                <li>
                    <a onclick="first()" href="{{route('index')}}">Inicio</a>
                </li>

            </ul>
        </nav>
        <div class="logo">
            <a onclick="first()" href="{{route('index')}}">
                <img src="./assets/imgs/logo.png" alt="Logo de Brain Up">
            </a>
        </div>
        <div class="cta">
            <!-- <button>Escanear QR</button> -->
        </div>
    </div>
</header>

<main>

    <!-- Modal Aviso de Privacidad-->
    <div class="modal fade" id="avisoDePrivacidad" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><b>AVISO DE PRIVACIDAD</b></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-justify">

                    De conformidad con lo establecido en la Ley Federal de Protección de Datos Personales en Posesión de los Particulares, <b>Brainup</b> pone a su disposición el siguiente aviso de privacidad. <b>Brainup</b> es responsable del uso y protección de sus datos personales, en este sentido y atendiendo las obligaciones legales establecidas en la Ley Federal de Protección de Datos Personales en Posesión de los Particulares, a través de este instrumento se informa a los titulares de los datos, la información que de ellos se recaba y los fines que se le darán a dicha información.
                    <br> <br>
                    Además de lo anterior, informamos a usted que <b>Brainup</b>, tiene su domicilio ubicado en: Privada Cannes 24, Urbi Quinta Montecarlo, Cuautitlán Izcalli, Estado de México, C.P. 54719.
                    <br><br>
                    Los datos personales que recabamos de usted serán utilizados para las siguientes finalidades, las cuales son necesarias para concretar nuestra relación con usted, así como para atender los servicios que solicite: <b>para conocer la utilización de la consulta de libros y materiales didácticos educativos en general.</b>
                    <br><br>
                    Para llevar a cabo las finalidades descritas en el presente aviso de privacidad, utilizaremos los siguientes datos personales: Nombre, Escuela y Grado de estudios proporcionados por usted que serán utilizados para las siguientes finalidades, las cuales son necesarias para concretar nuestra relación con usted, así como para atender los servicios y/o pedidos que solicite: <b>para conocer la utilización de la consulta de libros y material didáctico y educativo de todos los niveles.</b>
                        <br><br>
                    Para llevar a cabo las finalidades descritas en el presente aviso de privacidad, utilizaremos los siguientes datos personales: Nombre, Escuela y Grado de estudios.
                    <br><br>
                    Por otra parte, informamos a usted, que sus datos personales no serán compartidos con ninguna autoridad, empresa, organización o persona distintas a nosotros y serán utilizados exclusivamente para los fines señalados.
                    <br><br>
                    Usted tiene en todo momento el derecho a conocer qué datos personales tenemos de usted, para qué los utilizamos y las condiciones del uso que les damos (Acceso). Asimismo, es su derecho solicitar la corrección de su información personal en caso de que esté desactualizada, sea inexacta o incompleta (Rectificación); de igual manera, tiene derecho a que su información se elimine de nuestros registros o bases de datos cuando considere que la misma no está siendo utilizada adecuadamente (Cancelación); así como también a oponerse al uso de sus datos personales para fines específicos (Oposición). Estos derechos se conocen como derechos ARCO.
                    <br><br>
                    Para el ejercicio de cualquiera de los derechos ARCO, se deberá presentar la solicitud respectiva a través del  siguiente correo electrónico:  <b>AtencionaClientes@brainup.mx</b>
                    <br><br>
                    Lo anterior también servirá para conocer el procedimiento y requisitos para el ejercicio de los derechos ARCO, no obstante, la solicitud de ejercicio de estos derechos debe contener la siguiente información: Nombre, Escuela y Grado de Estudios.
                    <br><br>
                    La respuesta a la solicitud se dará en el siguiente plazo: 20 días, y se comunicará de la siguiente manera: A través de correo electrónico.
                    <br><br>
                    Los datos de contacto de la persona o departamento de datos personales, que está a cargo de dar trámite a las solicitudes de derechos ARCO, son los siguientes: <b>Nombre del responsable: Soporte@Brainup.mx,  Teléfono: 5517572787.</b>
                    <br><br>
                    Cabe mencionar, que en cualquier momento usted puede revocar su consentimiento para el uso de sus datos personales. Del mismo modo, usted puede revocar el consentimiento que, en su caso, nos haya otorgado para el tratamiento de sus datos personales.
                    <br><br>
                    Asimismo, usted deberá considerar que para ciertos fines la revocación de su consentimiento implicará que no podamos seguir prestando el servicio que nos solicitó, o la conclusión de su relación con nosotros.
                    <br><br>
                    Para revocar el consentimiento que usted otorga en este acto o para limitar su divulgación, usted deberá presentar su solicitud al correo electrónico AtenciónaClientes@brainup.mx.
                    <br><br>
                    Del mismo modo, podrá solicitar la información para conocer el procedimiento y requisitos para la revocación del consentimiento, así como limitar el uso y divulgación de su información personal.
                    <br><br>
                    En cualquier caso, la respuesta a las peticiones se dará a conocer en el siguiente plazo: 20 dias de cambios en nuestro modelo de negocio, o por otras causas, por lo cual, nos comprometemos a mantenerlo informado sobre los cambios que pueda sufrir el presente aviso de privacidad, sin embargo, usted puede solicitar información sobre si el mismo ha sufrido algún cambio a través de la siguiente dirección electrónica: <b>www.brainup.mx/aviso_de_privacidad</b>
                    <br><br>
                    Última actualización: <b>17/05/2021</b>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Términos y condiciones-->
    <div class="modal fade" id="terminosYCondiciones" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLabel"><b>TÉRMINOS Y CONDICIONES</b></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-justify">
                    Este contrato describe los términos y condiciones generales (en adelante únicamente "TÉRMINOS Y CONDICIONES") aplicables al uso de los contenidos, productos y servicios ofrecidos a través del sitio www.brainup.mx (en adelante, "SITIO WEB"), del cual es titular <b>Jaque&Charlie familiar SA de CV</b> (en adelante, "TITULAR"). Cualquier persona que desee acceder o hacer uso del sitio o los servicios que en él se ofrecen, podrá hacerlo sujetándose a los presentes TÉRMINOS Y CONDICIONES, así como a políticas y principios incorporados al presente documento.
                    <br><br>
                    En todo caso, cualquier persona que no acepte los presentes términos y condiciones, deberá abstenerse de utilizar el SITIO WEB o los productos y servicios que en su caso pudieran ser ofrecidos.
                    <br><br>

                    <h5>I. DEL OBJETO.</h5>

                    <br><br>
                    El objeto de los presentes TÉRMINOS Y CONDICIONES es regular el acceso y la utilización del SITIO WEB, entendiendo por este cualquier tipo de contenido, producto o servicio que se encuentre a disposición del público en general dentro del dominio: www.brainup.mx.
                    <br><br>
                    El TITULAR se reserva la facultad de modificar en cualquier momento y sin previo aviso, la presentación, los contenidos, la funcionalidad, los productos, los servicios, y la configuración que pudiera estar contenida en el SITIO WEB; en este sentido, el USUARIO reconoce y acepta que <b>Brainup</b> en cualquier momento podrá interrumpir, desactivar o cancelar cualquiera de los elementos que conforman el SITIO WEB o el acceso a los mismos. El acceso al SITIO WEB por parte del USUARIO tiene carácter libre y, por regla general es gratuito sin que el USUARIO tenga que proporcionar una contraprestación para poder disfrutar de ello, salvo en lo referente al costo de la conexión a internet suministrada por el proveedor de este tipo de servicios que hubiere contratado el mismo USUARIO.
                    <br><br>
                    El acceso a parte de los contenidos y servicios del SITIO WEB podrá realizarse previo registro opcional del USUARIO.
                    <br><br>
                    El SITIO WEB se encuentra dirigido toda de persona, sin importar su edad y principalmente a alumnos, maestros y USUARIOS residentes en la República Mexicana, por lo cual, <b>Brainup</b> no asegura que el SITIO WEB cumpla total o parcialmente con la legislación de otros países, de forma que, si el USUARIO reside o tiene su domicilio establecido en otro país y decide acceder o utilizar el SITIO WEB lo hará bajo su propia responsabilidad y deberá asegurarse de que tal acceso y navegación cumple con la legislación local que le es aplicable, no asumiendo <b>Brainup</b> ninguna responsabilidad que se pueda derivar de dicho acto.
                    <br><br>
                    Se hace del conocimiento del USUARIO que el TITULAR podrá administrar o gestionar el SITIO WEB de manera directa o a través de un tercero, lo cual no modifica en ningun sentido lo establecido en los presentes TÉRMINOS Y CONDICIONES.
                    <br><br>

                    <h5>II. DEL USUARIO.</h5>

                    <br><br>

                    El acceso o utilización del SITIO WEB, confiere la condición de USUARIO del SITIO WEB, por lo que quedará sujeto a los presentes TÉRMINOS Y CONDICIONES, así como a sus ulteriores modificaciones, sin perjuicio de la aplicación de la legislación aplicable, por tanto, se tendrán por aceptados desde el momento en el que se accede al SITIO WEB. Dada la relevancia de lo anterior, se recomienda al usuario revisar los presentes TÉRMINOS Y CONDICIONES.
                    <br><br>
                    Queda prohibida la utilización de cualquier tipo de software que automatice la interacción o descarga de los contenidos o servicios proporcionados a través del SITIO WEB. Además, el USUARIO se compromete a utilizar la información, contenidos o servicios ofrecidos a través del SITIO WEB de manera lícita, sin contravenir lo dispuesto en los presentes TÉRMINOS Y CONDICIONES, la moral o el orden público, y se abstendrá de realizar cualquier acto que pueda suponer una afectación a los derechos de terceros, o perjudique de algún modo el funcionamiento del SITIO WEB. Así mismo, el usuario se compromete a proporcionar información lícita y veraz en los formularios habilitados en el SITIO WEB, en los cuales el usuario tenga que proporcionar ciertos datos o información para el acceso a algún contenido, producto o servicio ofrecido por el propio SITIO WEB. En todo caso, el USUARIO notificará de forma inmediata al TITULAR acerca de cualquier hecho que permita suponer el uso indebido de la información registrada en dichos formularios, tales como, robo, extravío, o acceso no autorizado a cuentas y/o contraseñas, con el fin de proceder a su inmediata cancelación. El sólo acceso al SITIO WEB no supone el establecimiento de ningún tipo de relación entre el TITULAR y el USUARIO.
                    <br><br>

                    <h5>III. DEL ACCESO Y NAVEGACIÓN EN EL SITIO WEB.</h5>

                    <br><br>
                    El TITULAR no garantiza de ningún modo la continuidad y disponibilidad de los contenidos, productos o servicios ofrecidos a través del SITIO WEB, no obstante, el TITULAR llevará a cabo las acciones que de acuerdo a sus posibilidades le permitan mantener el buen funcionamiento del SITO WEB, sin que esto suponga alguna responsabilidad de parte de <b>Brainup</b>.
                    <br><br>
                    De igual forma <b>Brainup</b> no será responsable ni garantiza que el contenido o software al que pueda accederse a través del SITIO WEB, se encuentre libre de errores, software malicioso, o que pueda causar algún daño a nivel de software o hardware en el equipo a través del cual el USUARIO accede al SITIO WEB.
                    <br><br>
                    El TITULAR tampoco se hace responsable de los daños que pudiesen ocasionarse por un uso inadecuado del SITIO WEB. En ningún caso <b>Brainup</b> será responsable por las pérdidas, daños o perjuicios de cualquier tipo que surjan por el sólo acceso o utilización del SITIO WEB.
                    <br><br>

                    <h5>IV. POLÍTICA DE PRIVACIDAD Y PROTECCIÓN DE DATOS.</h5>

                    <br><br>
                    De conformidad con lo establecido en la Ley Federal de Protección de Datos Personales en Posesión de Particulares, el TITULAR se compromete a adoptar las medidas necesarias que estén a su alcance para asegurar la privacidad de los datos personales recabados de forma que se garantice su seguridad, se evite su alteración, pérdida o tratamiento no autorizado.
                    <br><br>
                    Además, a efecto de dar cumplimiento a lo establecido en la Ley Federal de Protección de Datos Personales en Posesión de Particulares, todo dato personal que sea recabado a través del SITIO WEB, será tratado de conformidad con los principios de licitud, calidad, finalidad, lealtad, y responsabilidad. Todo tratamiento de datos personales quedará sujeto al consentimiento de su titular. En todo caso, la utilización de datos financieros o patrimoniales, requerirán de autorización expresa de sus titulares, no obstante, esta podrá darse a través del propio SITIO WEB utilizando los mecanismos habilitados para tal efecto, y en todo caso se dará la mayor diligencia y cuidado a este tipo de datos. Lo mismo ocurrirá en el caso de datos personales sensibles, considerando por estos aquellos que debido a una utilización indebida puedan dar origen a discriminación o su divulgación conlleve un riesgo para el titular.
                    <br><br>
                    En todo momento se procurará que los datos personales contenidos en las bases de datos o archivos que en su caso se utilicen, sean pertinentes, correctos y actualizados para los fines para los cuales fueron recabados. El tratamiento de datos personales se limitará al cumplimiento de las finalidades previstas en el Aviso de Privacidad el cual se encontrará disponible en la siguiente dirección electrónica: <b>www.brainup.mx/aviso_de_privacidad</b>
                    <br><br>
                    El SITIO WEB podrá incluir hipervínculos o enlaces que permitan acceder a páginas web de terceros distintos de Brainup. Los titulares de dichos sitios web dispondrán de sus propias políticas de privacidad y protección de datos, por lo cual Brainup no asume ningún tipo de responsabilidad por los datos que san facilitados por el USUARIO a través de cualquier sitio web distinto a través de cualquier sitio web distinto a <b>www.brainup.mx</b>
                    <br>
                    <b>Brainup</b> se reserva el derecho a modificar su Política de Privacidad, de acuerdo a sus necesidades o derivado de algún cambio en la legislación. El acceso o utilización del SITIO WEB después de dichos cambios, implicará la aceptación de estos cambios.
                    <br><br>
                    Por otra parte, el acceso al SITIO WEB puede implicar la utilización de cookies, las cuales, son pequeñas cantidades de información que se almacenan en el navegador utilizado por el USUARIO. Las cookies facilitan la navegación, la hacen más amigable, y no dañan el dispositivo de navegación, para ello, pueden recabar información para ingresar al SITIO WEB, almacenar las preferencias del USUARIO, así como la interacción que este tenga con el SITIO WEB, como por ejemplo: la fecha y hora en la que se accede al SITIO WEB, el tiempo que se ha hecho uso de este, los sitios visitados antes y después del mismo, el número de páginas visitadas, la dirección IP de la cual accede el usuario, la frecuencia de visitas, etc.
                    <br><br>
                    Este tipo de información será utilizada para mejorar el SITIO WEB, detectar errores, y posibles necesidades que el USUARIO pueda tener, lo anterior a efecto de ofrecer a los USUARIOS servicios y contenidos de mejor calidad. En todo caso, la información que se recopile será anónima y no se identificará a usuarios individuales. En caso de que el USUARIO no desee que se recopile este tipo de información deberá deshabilitar, rechazar, restringir y/o eliminar el uso de cookies en su navegador de internet. Los procedimientos para realiza estas acciones pueden diferir de un navegador a otro; en consecuencia, se sugiere revisar las instrucciones facilitadas por el desarrollador del navegador. En el supuesto de que rechace el uso de cookies (total o parcialmente) el podrá continuar haciendo uso del SITIO WEB, aunque podrían quedar deshabilitadas algunas de las funciones de este. Es posible que en el futuro estas políticas respecto a las cookies cambien o se actualicen, por ello es recomendable revisar las actualizaciones que se realicen a los presentes TÉRMINOS Y CONDICIONES, con objetivo de estar adecuadamente informado sobre cómo y para qué utilizamos las cookies que se generan al ingresar o hacer uso del SITIO WEB.
                    <br><br>

                    <h5>V. POLÍTICA DE ENLACES.</h5>
                    <br><br>

                    El SITIO WEB puede contener enlaces, contenidos, servicios o funciones, de otros sitios de internet pertenecientes y/o gestionados por terceros, como por ejemplo imágenes, videos, comentarios, motores de búsqueda, etc. La utilización de estos enlaces, contenidos, servicios o funciones, tiene por objeto mejorar la experiencia del USUARIO al hacer uso del SITIO WEB, sin que pueda considerarse una sugerencia, recomendación o invitación para hacer uso de sitios externos. <b>Brainup</b> en ningún caso revisará o controlará el contenido de los sitios externos, de igual forma, no hace propios los productos, servicios, contenidos, y cualquier otro material existente en los referidos sitios enlazados, por lo cual, tampoco se garantizará la disponibilidad, exactitud, veracidad, validez o legalidad de los sitios externos a los que se pueda tener acceso a través del SITIO WEB. Así mismo, el TITULAR no asume ninguna responsabilidad por los daños y perjuicios que pudieran producirse por el acceso o uso, de los contenidos, productos o servicios disponibles en los sitios web no gestionados por Jaque&Charlie familiar SA de CV a los que se pueda acceder mediante el SITIO WEB.
                    <br><br>

                    <h5>VI. POLÍTICA EN MATERIA DE PROPIEDAD INTELECTUAL E INDUSTRIAL.</h5>
                    <br><br>

                    <b>Brainup</b> por sí o como parte cesionaria, es titular de todos los derechos de propiedad intelectual e industrial del SITIO WEB, entendiendo por este el código fuente que hace posible su funcionamiento, así como las imágenes, archivos de audio o video, logotipos, marcas, combinaciones de colores, estructuras, diseños y demás elementos que lo distinguen. Serán, por consiguiente, protegidas por la legislación mexicana en materia de propiedad intelectual e industrial, así como por los tratados internacionales anticables Por consiguiente queda expresamente prohibida lareproducción, distribución, o difusión de los contenidos del SITIO WEB, con fines comerciales, en cualquier soporte y por cualquier medio, sin la autorización de <b>Brainup</b>.
                    <br><br>
                    El USUARIO se compromete a respetar los derechos de propiedad intelectual e industrial del TITULAR. No obstante, además de poder visualizar los elementos del SITIO WEB podrá <b>imprimirlos, copiarlos o almacenarlos</b>, siempre y cuando sea exclusivamente para su uso estrictamente personal. Por otro lado, el USUARIO, se abstendrá de suprimir, alterar, o manipular cualquier elemento, archivo, o contenido, del SITIO WEB, y por ningún motivo realizará actos tendientes a vulnerar la seguridad, los archivos o bases de datos que se encuentren protegidos, ya sea a través de un acceso restringido mediante un usuario y contraseña, o porque no cuente con los permisos para visualizarlos, editarlos o manipularlos.
                    <br><br>
                    En caso de que el USUARIO o algún tercero consideren que cualquiera de los contenidos del SITIO WEB suponga una violación de los derechos de protección de la propiedad industrial o intelectual, deberá comunicarlo inmediatamente a <b>Brainup</b> a través de los datos de contacto disponibles en el propio SITIO WEB y/o a través del siguiente medio: <b>Correo electrónico: AtencionaClientes@brainup.mx</b>
                    <br><br>

                    <h5>VII. LEGISLACIÓN Y JURISDICCIÓN APLICABLE.</h5>
                    <br><br>
                    <b>Brainup</b> se reserva la facultad de presentar las acciones civiles o penales que considere necesarias por la utilización indebida del SITIO WEB, sus contenidos, productos o servicios, o por el contenidos, productos o servicios, o por el incumplimiento de los presentes TÉRMINOS Y CONDICIONES.
                    <br><br>
                    La relación entre el USUARIO Brainup se regirá por la legislación vigente en México, específicamente en la <b>Ciudad de México</b>. De surgir cualquier controversia en relación con la interpretación y/o a la aplicación de los presentes TÉRMINOS Y CONDICIONES, las partes se someterán a la jurisdicción ordinaria de los tribunales que correspondan conforme a derecho en el estado al que se hace referencia.


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    @yield('content')



</main>

<footer>
    <div class="footer-border">
        <div class="border-left">

        </div>
        <div class="border-middle">

        </div>
        <div class="border-right">

        </div>
    </div>

    <!-- Footer -->
    <div class="max-w">
        <div class="footer-up">
            <div class="brand">
                <div class="logo-footer">
                    <img src="./assets/imgs/logo.png" alt="Logo BrainUp">
                </div>
                <p>Copyright © 2021. Brain Up. Derechos <br> Reservados.</p>
                <br> <br> <br> <br>
                <p>Desarrollado por <a target="_blank" style="color: red; text-decoration: none" href="https://smartbis.com.mx/">Smartbis</a>.</p>
            </div>


            <div class="links">
                <div class="links-left">

                </div>
                <div class="links-right">
                    <h4>Información</h4>
                    <ol>
                        <li>
                            <a style="text-decoration: none; cursor: pointer" data-toggle="modal" data-target="#avisoDePrivacidad">Aviso de privacidad</a>
                        </li>
                        <li>
                            <a style="text-decoration: none; cursor: pointer" data-toggle="modal" data-target="#terminosYCondiciones">Términos y condiciones</a>
                        </li>
                    </ol>
                </div>
            </div>

        </div>
        <div class="footer-down">
{{--            <h4>No te pierdas las <br> últimas noticias</h4>--}}
{{--            <div class="contain-email">--}}
{{--                <input type="email" placeholder="Email">--}}
{{--                <button type="button"><img src="./assets/icons/right.svg" alt="icon righta"></button>--}}
{{--            </div>--}}
        </div>
        <a href="#" class="cta-up">
            <img src="./assets/icons/up.svg" alt="Fecha hacia arriba">
        </a>
        <div class="rrss-footer">
            <a href="#">
                <img src="./assets/icons/facebook.svg" alt="Icono Facebook">
            </a>
            <a href="#">
                <img src="./assets/icons/twitter.svg" alt="Icono Twitter">
            </a>
        </div>
    </div>

</footer>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="js/script.js"></script>
</body>
</html>
