<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ajustes Razonables</title>
    <link rel="shortcut icon" type="image/jpg" href="/assets/imgs/favicon.png">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/ajustes.css">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-204214874-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-204214874-1');

        // function handleOutboundLinkClicks(event){
        //     gtag('event', 'Descargas', {
        //         'event_category' : 'Clic',
        //         'event_label' : 'Libro Ajustes Razonables'
        //     });
        // }

        var handleOutboundLinkClicks = function(url){
            gtag('event', 'Clic', {
                'event_category': 'Descargas',
                'event_label': 'Libro Ajustes Razonables',
                'transport_type': 'beacon',
                'event_callback': function(){document.location = url;}
            });
        }

    </script>

</head>
<body>

    <div class="container">
        <div class="raw">
            <div class="col-12  text-center pb-5"><h1 class="card__title">AJUSTES RAZONABLES</h1></div>
        </div>
    </div>

    <div class="wrapper">

        <!-- Using an img TAG -->
        <a target="_blank" href="/assets/pdf/ajustes_razonables/Ajustes_Razonables_Ed_Epecial.pdf" onclick="handleOutboundLinkClicks('/assets/pdf/ajustes_razonables/Ajustes_Razonables_Ed_Epecial.pdf'); return false;">
            <div class="card">
                <!-- The background image -->
                <figure class="card__thumbnail">
                    <img src="assets/pdf/ajustes_razonables/ajustes_razonables_portada.jpg">
                </figure>
            </div>
        </a>

    </div>

    <div class="container mb-5">
        <div class="row justify-content-center">
            <a class="btn btn-primary" target="_blank" href="/assets/pdf/ajustes_razonables/Ajustes_Razonables_Ed_Epecial.pdf" onclick="handleOutboundLinkClicks('/assets/pdf/ajustes_razonables/Ajustes_Razonables_Ed_Epecial.pdf'); return false;">Descargar</a>
        </div>
    </div>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="js/ajustes.js"></script>
</body>
</html>
