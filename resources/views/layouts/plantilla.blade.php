<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Congreso ITCA</title>
        <link href="/css/bootstrap.min.css" rel="stylesheet">
        <link href="/css/modo_dark.css" rel="stylesheet">
        <link rel="stylesheet" href="/css/font-awesome.min.css"> <!-- FontAwesome 4-->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    </head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-DS7K3BEJGG"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-DS7K3BEJGG');
    </script>
    <body id="cuerpo">
        <div class="container">
            <header class="row">
                <div class="col-12 mb-3 mt-3">
                    <a href="https://www.gob.mx/" target="_blank">
                        <img src="/img/logo_mex.png" width="220" height="60" class="img-fluid me-2" alt="Logo gobierno de M&eacute;xico">
                    </a>
                    <a href="https://www.sep.gob.mx/" target="_blank">
                        <img src="/img/logo_educacion.png" width="200" height="60" class="img-fluid me-2" alt="logo">
                    </a>
                    <a href="https://www.tecnm.mx/" target="_blank">
                        <img src="/img/logo_tecnm.png" class="img-fluid me-2" alt="logo">
                    </a>
                    <a href="https://cdaltamirano.tecnm.mx/" target="_blank">
                        <img src="/img/logo_itca.png" class="img-fluid me-2" alt="logo">
                    </a>
                    <a href="https://congreso.itcaltamirano.edu.mx/" target="_blank">
                        <img src="/img/logo_congreso.png" width="320" height="60" class="img-fluid me-2" alt="logo">
                    </a>
                </div>
            </header>
            <div class="row">
                <div class="col-12">
                    @yield('menu')
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    @yield('carrusel')
                </div>
            </div>

            <div class="row">
                <div class="col-12">

                </div>
            </div>

            <div class="row">
                @yield('contenido')
                @yield('publicidad')
            </div>

            <div class="row">
                <div class="col-xs-12 col-md-12 col-lg-12">
                    <footer class="mt-3 mb-3 d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
                        <div class="col-md-6 d-flex align-items-center">
                            <span class="mb-3 mb-md-0 text-muted">Copyright 2023 Todos los derechos reservados. All rights reserved.<br>Instituto Tecnol&oacute;gico de Cd. Altamirano<br>Dise&ntilde;ado por: <a href="mailto:leonel.gv@cdaltamirano.tecnm.mx" target="_blank"> L3oNeT</a><br>
                        </div>

                        <ul class="nav col-md-6 justify-content-end list-unstyled d-flex">
                            <li class="ms-3"><a class="text-muted" href="mailto:congreso@cdaltamirano.tecnm.mx" target="_blank"><svg fill="#000000" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/><path d="M0 0h24v24H0z" fill="none"/></svg></a></li>
                            <li class="ms-3"><a class="text-muted" href="https://youtube.com/@ITCAltamirano" target="_blank"><svg class="youtube" fill="#000000" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M10,16.5V7.5L16,12M20,4.4C19.4,4.2 15.7,4 12,4C8.3,4 4.6,4.19 4,4.38C2.44,4.9 2,8.4 2,12C2,15.59 2.44,19.1 4,19.61C4.6,19.81 8.3,20 12,20C15.7,20 19.4,19.81 20,19.61C21.56,19.1 22,15.59 22,12C22,8.4 21.56,4.91 20,4.4Z" /></svg></a></li>
                            <li class="ms-3"><a class="text-muted" href="https://twitter.com/ITCAltamirano" target="_blank"><svg class="twitter" fill="#000000" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M22.46,6C21.69,6.35 20.86,6.58 20,6.69C20.88,6.16 21.56,5.32 21.88,4.31C21.05,4.81 20.13,5.16 19.16,5.36C18.37,4.5 17.26,4 16,4C13.65,4 11.73,5.92 11.73,8.29C11.73,8.63 11.77,8.96 11.84,9.27C8.28,9.09 5.11,7.38 3,4.79C2.63,5.42 2.42,6.16 2.42,6.94C2.42,8.43 3.17,9.75 4.33,10.5C3.62,10.5 2.96,10.3 2.38,10C2.38,10 2.38,10 2.38,10.03C2.38,12.11 3.86,13.85 5.82,14.24C5.46,14.34 5.08,14.39 4.69,14.39C4.42,14.39 4.15,14.36 3.89,14.31C4.43,16 6,17.26 7.89,17.29C6.43,18.45 4.58,19.13 2.56,19.13C2.22,19.13 1.88,19.11 1.54,19.07C3.44,20.29 5.7,21 8.12,21C16,21 20.33,14.46 20.33,8.79C20.33,8.6 20.33,8.42 20.32,8.23C21.16,7.63 21.88,6.87 22.46,6Z" /></svg></a></li>
                            <li class="ms-3"><a class="text-muted" href="https://instagram.com/ITCAltamirano" target="_blank"><svg class="instagram" fill="#000000" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M7.8,2H16.2C19.4,2 22,4.6 22,7.8V16.2A5.8,5.8 0 0,1 16.2,22H7.8C4.6,22 2,19.4 2,16.2V7.8A5.8,5.8 0 0,1 7.8,2M7.6,4A3.6,3.6 0 0,0 4,7.6V16.4C4,18.39 5.61,20 7.6,20H16.4A3.6,3.6 0 0,0 20,16.4V7.6C20,5.61 18.39,4 16.4,4H7.6M17.25,5.5A1.25,1.25 0 0,1 18.5,6.75A1.25,1.25 0 0,1 17.25,8A1.25,1.25 0 0,1 16,6.75A1.25,1.25 0 0,1 17.25,5.5M12,7A5,5 0 0,1 17,12A5,5 0 0,1 12,17A5,5 0 0,1 7,12A5,5 0 0,1 12,7M12,9A3,3 0 0,0 9,12A3,3 0 0,0 12,15A3,3 0 0,0 15,12A3,3 0 0,0 12,9Z" /></svg></a></li>
                            <li class="ms-3"><a class="text-muted" href="https://facebook.com/ITCAltamirano" target="_blank"><svg class="facebook" fill="#000000" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M19,4V7H17A1,1 0 0,0 16,8V10H19V13H16V20H13V13H11V10H13V7.5C13,5.56 14.57,4 16.5,4M20,2H4A2,2 0 0,0 2,4V20A2,2 0 0,0 4,22H20A2,2 0 0,0 22,20V4C22,2.89 21.1,2 20,2Z" /></svg></a></li>
                        </ul>
                    </footer>
                </div>
            </div>

        </div>
        <script src="/js/bootstrap.bundle.min.js"></script>
        <script src="/js/modo_dark.js"></script>
        <script src="https://kit.fontawesome.com/b6945f50f8.js" crossorigin="anonymous"></script>
        <script>
            const myCarousel = document.getElementById('myCarousel')

            myCarousel.addEventListener('slide.bs.carousel', event => {
            // do something...
            })
        </script>
        @stack('scripts')
        @yield('scripts')
    </body>
</html>
