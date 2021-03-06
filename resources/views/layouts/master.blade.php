<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" type="image/jpg" href="assets/imgs/favicon.png">
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
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-204214874-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-204214874-1');
    </script>

    <title>Brainup</title>
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

                    De conformidad con lo establecido en la Ley Federal de Protecci??n de Datos Personales en Posesi??n de los Particulares, <b>Brainup</b> pone a su disposici??n el siguiente aviso de privacidad. <b>Brainup</b> es responsable del uso y protecci??n de sus datos personales, en este sentido y atendiendo las obligaciones legales establecidas en la Ley Federal de Protecci??n de Datos Personales en Posesi??n de los Particulares, a trav??s de este instrumento se informa a los titulares de los datos, la informaci??n que de ellos se recaba y los fines que se le dar??n a dicha informaci??n.
                    <br> <br>
                    Adem??s de lo anterior, informamos a usted que <b>Brainup</b>, tiene su domicilio ubicado en: Privada Cannes 24, Urbi Quinta Montecarlo, Cuautitl??n Izcalli, Estado de M??xico, C.P. 54719.
                    <br><br>
                    Los datos personales que recabamos de usted ser??n utilizados para las siguientes finalidades, las cuales son necesarias para concretar nuestra relaci??n con usted, as?? como para atender los servicios que solicite: <b>para conocer la utilizaci??n de la consulta de libros y materiales did??cticos educativos en general.</b>
                    <br><br>
                    Para llevar a cabo las finalidades descritas en el presente aviso de privacidad, utilizaremos los siguientes datos personales: Nombre, Escuela y Grado de estudios proporcionados por usted que ser??n utilizados para las siguientes finalidades, las cuales son necesarias para concretar nuestra relaci??n con usted, as?? como para atender los servicios y/o pedidos que solicite: <b>para conocer la utilizaci??n de la consulta de libros y material did??ctico y educativo de todos los niveles.</b>
                        <br><br>
                    Para llevar a cabo las finalidades descritas en el presente aviso de privacidad, utilizaremos los siguientes datos personales: Nombre, Escuela y Grado de estudios.
                    <br><br>
                    Por otra parte, informamos a usted, que sus datos personales no ser??n compartidos con ninguna autoridad, empresa, organizaci??n o persona distintas a nosotros y ser??n utilizados exclusivamente para los fines se??alados.
                    <br><br>
                    Usted tiene en todo momento el derecho a conocer qu?? datos personales tenemos de usted, para qu?? los utilizamos y las condiciones del uso que les damos (Acceso). Asimismo, es su derecho solicitar la correcci??n de su informaci??n personal en caso de que est?? desactualizada, sea inexacta o incompleta (Rectificaci??n); de igual manera, tiene derecho a que su informaci??n se elimine de nuestros registros o bases de datos cuando considere que la misma no est?? siendo utilizada adecuadamente (Cancelaci??n); as?? como tambi??n a oponerse al uso de sus datos personales para fines espec??ficos (Oposici??n). Estos derechos se conocen como derechos ARCO.
                    <br><br>
                    Para el ejercicio de cualquiera de los derechos ARCO, se deber?? presentar la solicitud respectiva a trav??s del  siguiente correo electr??nico:  <b>AtencionaClientes@brainup.mx</b>
                    <br><br>
                    Lo anterior tambi??n servir?? para conocer el procedimiento y requisitos para el ejercicio de los derechos ARCO, no obstante, la solicitud de ejercicio de estos derechos debe contener la siguiente informaci??n: Nombre, Escuela y Grado de Estudios.
                    <br><br>
                    La respuesta a la solicitud se dar?? en el siguiente plazo: 20 d??as, y se comunicar?? de la siguiente manera: A trav??s de correo electr??nico.
                    <br><br>
                    Los datos de contacto de la persona o departamento de datos personales, que est?? a cargo de dar tr??mite a las solicitudes de derechos ARCO, son los siguientes: <b>Nombre del responsable: Soporte@Brainup.mx,  Tel??fono: 5517572787.</b>
                    <br><br>
                    Cabe mencionar, que en cualquier momento usted puede revocar su consentimiento para el uso de sus datos personales. Del mismo modo, usted puede revocar el consentimiento que, en su caso, nos haya otorgado para el tratamiento de sus datos personales.
                    <br><br>
                    Asimismo, usted deber?? considerar que para ciertos fines la revocaci??n de su consentimiento implicar?? que no podamos seguir prestando el servicio que nos solicit??, o la conclusi??n de su relaci??n con nosotros.
                    <br><br>
                    Para revocar el consentimiento que usted otorga en este acto o para limitar su divulgaci??n, usted deber?? presentar su solicitud al correo electr??nico Atenci??naClientes@brainup.mx.
                    <br><br>
                    Del mismo modo, podr?? solicitar la informaci??n para conocer el procedimiento y requisitos para la revocaci??n del consentimiento, as?? como limitar el uso y divulgaci??n de su informaci??n personal.
                    <br><br>
                    En cualquier caso, la respuesta a las peticiones se dar?? a conocer en el siguiente plazo: 20 dias de cambios en nuestro modelo de negocio, o por otras causas, por lo cual, nos comprometemos a mantenerlo informado sobre los cambios que pueda sufrir el presente aviso de privacidad, sin embargo, usted puede solicitar informaci??n sobre si el mismo ha sufrido alg??n cambio a trav??s de la siguiente direcci??n electr??nica: <b>www.brainup.mx/aviso_de_privacidad</b>
                    <br><br>
                    ??ltima actualizaci??n: <b>17/05/2021</b>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal T??rminos y condiciones-->
    <div class="modal fade" id="terminosYCondiciones" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLabel"><b>T??RMINOS Y CONDICIONES</b></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-justify">
                    Este contrato describe los t??rminos y condiciones generales (en adelante ??nicamente "T??RMINOS Y CONDICIONES") aplicables al uso de los contenidos, productos y servicios ofrecidos a trav??s del sitio www.brainup.mx (en adelante, "SITIO WEB"), del cual es titular <b>Jaque&Charlie familiar SA de CV</b> (en adelante, "TITULAR"). Cualquier persona que desee acceder o hacer uso del sitio o los servicios que en ??l se ofrecen, podr?? hacerlo sujet??ndose a los presentes T??RMINOS Y CONDICIONES, as?? como a pol??ticas y principios incorporados al presente documento.
                    <br><br>
                    En todo caso, cualquier persona que no acepte los presentes t??rminos y condiciones, deber?? abstenerse de utilizar el SITIO WEB o los productos y servicios que en su caso pudieran ser ofrecidos.
                    <br><br>

                    <h5>I. DEL OBJETO.</h5>

                    <br><br>
                    El objeto de los presentes T??RMINOS Y CONDICIONES es regular el acceso y la utilizaci??n del SITIO WEB, entendiendo por este cualquier tipo de contenido, producto o servicio que se encuentre a disposici??n del p??blico en general dentro del dominio: www.brainup.mx.
                    <br><br>
                    El TITULAR se reserva la facultad de modificar en cualquier momento y sin previo aviso, la presentaci??n, los contenidos, la funcionalidad, los productos, los servicios, y la configuraci??n que pudiera estar contenida en el SITIO WEB; en este sentido, el USUARIO reconoce y acepta que <b>Brainup</b> en cualquier momento podr?? interrumpir, desactivar o cancelar cualquiera de los elementos que conforman el SITIO WEB o el acceso a los mismos. El acceso al SITIO WEB por parte del USUARIO tiene car??cter libre y, por regla general es gratuito sin que el USUARIO tenga que proporcionar una contraprestaci??n para poder disfrutar de ello, salvo en lo referente al costo de la conexi??n a internet suministrada por el proveedor de este tipo de servicios que hubiere contratado el mismo USUARIO.
                    <br><br>
                    El acceso a parte de los contenidos y servicios del SITIO WEB podr?? realizarse previo registro opcional del USUARIO.
                    <br><br>
                    El SITIO WEB se encuentra dirigido toda de persona, sin importar su edad y principalmente a alumnos, maestros y USUARIOS residentes en la Rep??blica Mexicana, por lo cual, <b>Brainup</b> no asegura que el SITIO WEB cumpla total o parcialmente con la legislaci??n de otros pa??ses, de forma que, si el USUARIO reside o tiene su domicilio establecido en otro pa??s y decide acceder o utilizar el SITIO WEB lo har?? bajo su propia responsabilidad y deber?? asegurarse de que tal acceso y navegaci??n cumple con la legislaci??n local que le es aplicable, no asumiendo <b>Brainup</b> ninguna responsabilidad que se pueda derivar de dicho acto.
                    <br><br>
                    Se hace del conocimiento del USUARIO que el TITULAR podr?? administrar o gestionar el SITIO WEB de manera directa o a trav??s de un tercero, lo cual no modifica en ningun sentido lo establecido en los presentes T??RMINOS Y CONDICIONES.
                    <br><br>

                    <h5>II. DEL USUARIO.</h5>

                    <br><br>

                    El acceso o utilizaci??n del SITIO WEB, confiere la condici??n de USUARIO del SITIO WEB, por lo que quedar?? sujeto a los presentes T??RMINOS Y CONDICIONES, as?? como a sus ulteriores modificaciones, sin perjuicio de la aplicaci??n de la legislaci??n aplicable, por tanto, se tendr??n por aceptados desde el momento en el que se accede al SITIO WEB. Dada la relevancia de lo anterior, se recomienda al usuario revisar los presentes T??RMINOS Y CONDICIONES.
                    <br><br>
                    Queda prohibida la utilizaci??n de cualquier tipo de software que automatice la interacci??n o descarga de los contenidos o servicios proporcionados a trav??s del SITIO WEB. Adem??s, el USUARIO se compromete a utilizar la informaci??n, contenidos o servicios ofrecidos a trav??s del SITIO WEB de manera l??cita, sin contravenir lo dispuesto en los presentes T??RMINOS Y CONDICIONES, la moral o el orden p??blico, y se abstendr?? de realizar cualquier acto que pueda suponer una afectaci??n a los derechos de terceros, o perjudique de alg??n modo el funcionamiento del SITIO WEB. As?? mismo, el usuario se compromete a proporcionar informaci??n l??cita y veraz en los formularios habilitados en el SITIO WEB, en los cuales el usuario tenga que proporcionar ciertos datos o informaci??n para el acceso a alg??n contenido, producto o servicio ofrecido por el propio SITIO WEB. En todo caso, el USUARIO notificar?? de forma inmediata al TITULAR acerca de cualquier hecho que permita suponer el uso indebido de la informaci??n registrada en dichos formularios, tales como, robo, extrav??o, o acceso no autorizado a cuentas y/o contrase??as, con el fin de proceder a su inmediata cancelaci??n. El s??lo acceso al SITIO WEB no supone el establecimiento de ning??n tipo de relaci??n entre el TITULAR y el USUARIO.
                    <br><br>

                    <h5>III. DEL ACCESO Y NAVEGACI??N EN EL SITIO WEB.</h5>

                    <br><br>
                    El TITULAR no garantiza de ning??n modo la continuidad y disponibilidad de los contenidos, productos o servicios ofrecidos a trav??s del SITIO WEB, no obstante, el TITULAR llevar?? a cabo las acciones que de acuerdo a sus posibilidades le permitan mantener el buen funcionamiento del SITO WEB, sin que esto suponga alguna responsabilidad de parte de <b>Brainup</b>.
                    <br><br>
                    De igual forma <b>Brainup</b> no ser?? responsable ni garantiza que el contenido o software al que pueda accederse a trav??s del SITIO WEB, se encuentre libre de errores, software malicioso, o que pueda causar alg??n da??o a nivel de software o hardware en el equipo a trav??s del cual el USUARIO accede al SITIO WEB.
                    <br><br>
                    El TITULAR tampoco se hace responsable de los da??os que pudiesen ocasionarse por un uso inadecuado del SITIO WEB. En ning??n caso <b>Brainup</b> ser?? responsable por las p??rdidas, da??os o perjuicios de cualquier tipo que surjan por el s??lo acceso o utilizaci??n del SITIO WEB.
                    <br><br>

                    <h5>IV. POL??TICA DE PRIVACIDAD Y PROTECCI??N DE DATOS.</h5>

                    <br><br>
                    De conformidad con lo establecido en la Ley Federal de Protecci??n de Datos Personales en Posesi??n de Particulares, el TITULAR se compromete a adoptar las medidas necesarias que est??n a su alcance para asegurar la privacidad de los datos personales recabados de forma que se garantice su seguridad, se evite su alteraci??n, p??rdida o tratamiento no autorizado.
                    <br><br>
                    Adem??s, a efecto de dar cumplimiento a lo establecido en la Ley Federal de Protecci??n de Datos Personales en Posesi??n de Particulares, todo dato personal que sea recabado a trav??s del SITIO WEB, ser?? tratado de conformidad con los principios de licitud, calidad, finalidad, lealtad, y responsabilidad. Todo tratamiento de datos personales quedar?? sujeto al consentimiento de su titular. En todo caso, la utilizaci??n de datos financieros o patrimoniales, requerir??n de autorizaci??n expresa de sus titulares, no obstante, esta podr?? darse a trav??s del propio SITIO WEB utilizando los mecanismos habilitados para tal efecto, y en todo caso se dar?? la mayor diligencia y cuidado a este tipo de datos. Lo mismo ocurrir?? en el caso de datos personales sensibles, considerando por estos aquellos que debido a una utilizaci??n indebida puedan dar origen a discriminaci??n o su divulgaci??n conlleve un riesgo para el titular.
                    <br><br>
                    En todo momento se procurar?? que los datos personales contenidos en las bases de datos o archivos que en su caso se utilicen, sean pertinentes, correctos y actualizados para los fines para los cuales fueron recabados. El tratamiento de datos personales se limitar?? al cumplimiento de las finalidades previstas en el Aviso de Privacidad el cual se encontrar?? disponible en la siguiente direcci??n electr??nica: <b>www.brainup.mx/aviso_de_privacidad</b>
                    <br><br>
                    El SITIO WEB podr?? incluir hiperv??nculos o enlaces que permitan acceder a p??ginas web de terceros distintos de Brainup. Los titulares de dichos sitios web dispondr??n de sus propias pol??ticas de privacidad y protecci??n de datos, por lo cual Brainup no asume ning??n tipo de responsabilidad por los datos que san facilitados por el USUARIO a trav??s de cualquier sitio web distinto a trav??s de cualquier sitio web distinto a <b>www.brainup.mx</b>
                    <br>
                    <b>Brainup</b> se reserva el derecho a modificar su Pol??tica de Privacidad, de acuerdo a sus necesidades o derivado de alg??n cambio en la legislaci??n. El acceso o utilizaci??n del SITIO WEB despu??s de dichos cambios, implicar?? la aceptaci??n de estos cambios.
                    <br><br>
                    Por otra parte, el acceso al SITIO WEB puede implicar la utilizaci??n de cookies, las cuales, son peque??as cantidades de informaci??n que se almacenan en el navegador utilizado por el USUARIO. Las cookies facilitan la navegaci??n, la hacen m??s amigable, y no da??an el dispositivo de navegaci??n, para ello, pueden recabar informaci??n para ingresar al SITIO WEB, almacenar las preferencias del USUARIO, as?? como la interacci??n que este tenga con el SITIO WEB, como por ejemplo: la fecha y hora en la que se accede al SITIO WEB, el tiempo que se ha hecho uso de este, los sitios visitados antes y despu??s del mismo, el n??mero de p??ginas visitadas, la direcci??n IP de la cual accede el usuario, la frecuencia de visitas, etc.
                    <br><br>
                    Este tipo de informaci??n ser?? utilizada para mejorar el SITIO WEB, detectar errores, y posibles necesidades que el USUARIO pueda tener, lo anterior a efecto de ofrecer a los USUARIOS servicios y contenidos de mejor calidad. En todo caso, la informaci??n que se recopile ser?? an??nima y no se identificar?? a usuarios individuales. En caso de que el USUARIO no desee que se recopile este tipo de informaci??n deber?? deshabilitar, rechazar, restringir y/o eliminar el uso de cookies en su navegador de internet. Los procedimientos para realiza estas acciones pueden diferir de un navegador a otro; en consecuencia, se sugiere revisar las instrucciones facilitadas por el desarrollador del navegador. En el supuesto de que rechace el uso de cookies (total o parcialmente) el podr?? continuar haciendo uso del SITIO WEB, aunque podr??an quedar deshabilitadas algunas de las funciones de este. Es posible que en el futuro estas pol??ticas respecto a las cookies cambien o se actualicen, por ello es recomendable revisar las actualizaciones que se realicen a los presentes T??RMINOS Y CONDICIONES, con objetivo de estar adecuadamente informado sobre c??mo y para qu?? utilizamos las cookies que se generan al ingresar o hacer uso del SITIO WEB.
                    <br><br>

                    <h5>V. POL??TICA DE ENLACES.</h5>
                    <br><br>

                    El SITIO WEB puede contener enlaces, contenidos, servicios o funciones, de otros sitios de internet pertenecientes y/o gestionados por terceros, como por ejemplo im??genes, videos, comentarios, motores de b??squeda, etc. La utilizaci??n de estos enlaces, contenidos, servicios o funciones, tiene por objeto mejorar la experiencia del USUARIO al hacer uso del SITIO WEB, sin que pueda considerarse una sugerencia, recomendaci??n o invitaci??n para hacer uso de sitios externos. <b>Brainup</b> en ning??n caso revisar?? o controlar?? el contenido de los sitios externos, de igual forma, no hace propios los productos, servicios, contenidos, y cualquier otro material existente en los referidos sitios enlazados, por lo cual, tampoco se garantizar?? la disponibilidad, exactitud, veracidad, validez o legalidad de los sitios externos a los que se pueda tener acceso a trav??s del SITIO WEB. As?? mismo, el TITULAR no asume ninguna responsabilidad por los da??os y perjuicios que pudieran producirse por el acceso o uso, de los contenidos, productos o servicios disponibles en los sitios web no gestionados por Jaque&Charlie familiar SA de CV a los que se pueda acceder mediante el SITIO WEB.
                    <br><br>

                    <h5>VI. POL??TICA EN MATERIA DE PROPIEDAD INTELECTUAL E INDUSTRIAL.</h5>
                    <br><br>

                    <b>Brainup</b> por s?? o como parte cesionaria, es titular de todos los derechos de propiedad intelectual e industrial del SITIO WEB, entendiendo por este el c??digo fuente que hace posible su funcionamiento, as?? como las im??genes, archivos de audio o video, logotipos, marcas, combinaciones de colores, estructuras, dise??os y dem??s elementos que lo distinguen. Ser??n, por consiguiente, protegidas por la legislaci??n mexicana en materia de propiedad intelectual e industrial, as?? como por los tratados internacionales anticables Por consiguiente queda expresamente prohibida lareproducci??n, distribuci??n, o difusi??n de los contenidos del SITIO WEB, con fines comerciales, en cualquier soporte y por cualquier medio, sin la autorizaci??n de <b>Brainup</b>.
                    <br><br>
                    El USUARIO se compromete a respetar los derechos de propiedad intelectual e industrial del TITULAR. No obstante, adem??s de poder visualizar los elementos del SITIO WEB podr?? <b>imprimirlos, copiarlos o almacenarlos</b>, siempre y cuando sea exclusivamente para su uso estrictamente personal. Por otro lado, el USUARIO, se abstendr?? de suprimir, alterar, o manipular cualquier elemento, archivo, o contenido, del SITIO WEB, y por ning??n motivo realizar?? actos tendientes a vulnerar la seguridad, los archivos o bases de datos que se encuentren protegidos, ya sea a trav??s de un acceso restringido mediante un usuario y contrase??a, o porque no cuente con los permisos para visualizarlos, editarlos o manipularlos.
                    <br><br>
                    En caso de que el USUARIO o alg??n tercero consideren que cualquiera de los contenidos del SITIO WEB suponga una violaci??n de los derechos de protecci??n de la propiedad industrial o intelectual, deber?? comunicarlo inmediatamente a <b>Brainup</b> a trav??s de los datos de contacto disponibles en el propio SITIO WEB y/o a trav??s del siguiente medio: <b>Correo electr??nico: AtencionaClientes@brainup.mx</b>
                    <br><br>

                    <h5>VII. LEGISLACI??N Y JURISDICCI??N APLICABLE.</h5>
                    <br><br>
                    <b>Brainup</b> se reserva la facultad de presentar las acciones civiles o penales que considere necesarias por la utilizaci??n indebida del SITIO WEB, sus contenidos, productos o servicios, o por el contenidos, productos o servicios, o por el incumplimiento de los presentes T??RMINOS Y CONDICIONES.
                    <br><br>
                    La relaci??n entre el USUARIO Brainup se regir?? por la legislaci??n vigente en M??xico, espec??ficamente en la <b>Ciudad de M??xico</b>. De surgir cualquier controversia en relaci??n con la interpretaci??n y/o a la aplicaci??n de los presentes T??RMINOS Y CONDICIONES, las partes se someter??n a la jurisdicci??n ordinaria de los tribunales que correspondan conforme a derecho en el estado al que se hace referencia.


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
                <p>Copyright ?? 2021. Brain Up. Derechos <br> Reservados.</p>
                <br> <br>
            </div>


            <div class="links">
                <div class="links-left">

                </div>
                <div class="links-right">
                    <h4>Informaci??n</h4>
                    <ol>
                        <li>
                            <a style="text-decoration: none; cursor: pointer" data-toggle="modal" data-target="#avisoDePrivacidad">Aviso de privacidad</a>
                        </li>
                        <li>
                            <a style="text-decoration: none; cursor: pointer" data-toggle="modal" data-target="#terminosYCondiciones">T??rminos y condiciones</a>
                        </li>
                    </ol>
                </div>
            </div>

        </div>
        <div class="footer-down">
{{--            <h4>No te pierdas las <br> ??ltimas noticias</h4>--}}
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
