<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Servicios</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="/css/estilo.css">
    <style>
        .pagina>.seccion-pagina:nth-child(even) {
            background-color: white;
            background-image: linear-gradient(180deg, white 0%, white 100%);
            color: rgb(78, 74, 103);
            transition: all .3s;
            opacity: 1;
            transition-delay: .7s;
            font-family: Roboto, sans-serif;
            font-size: 16px;
            font-weight: 400;
            line-height: 24px;
            ;
        }

        .pagina>.seccion-pagina:nth-child(odd) {
            background-color: transparent;
            background-image: linear-gradient(180deg, #04244c 0%, #043169 100%);
            color: white;

        }

        .parte-superior {
            background-image: url(https://dollarclick.com.pe/storage/2022/01/Slider-01-1.png) !important;
            height: 50px;
            background-position: 50%;
            background-size: cover;
            height: 140px;
            width: 100%;
            padding: 0 !important;
        }

        .parte-superior>.contenedor-parte-superior {
            background-color: #04244c;
            height: 100%;
            width: 100%;
            opacity: 85%;
            justify-content: flex-start;
            color: white;
        }



        .servicio img {
            border-radius: 20px;
            width: 335px;
        }

        .servicio {
            display: flex;
            column-gap: 24px;
        }

        .servicio .informacion-servicio {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: flex-start;
            text-align: left;
        }

        .informacion-servicio h1 {
            text-transform: uppercase;
            line-height: 1;
            margin: 0;
        }

        .lista-servicios {
            display: flex;
            flex-direction: column;
            row-gap: 60px;
        }
    </style>
</head>

<body>
    <div class="cabecera">
        <ul class="cabecera-parte-superior">
            <li>
                <img class="logo-empresa" src="/imagenes/logo3.png">
            </li>
            <ul class="parte-superior-izquierda">
                <ul class="menus">
                    <li class="elemento-menu">
                        <a href="/">Inicio</a>
                    </li>
                    <li class="elemento-menu">
                        <a href="nosotros">Nosotros</a>
                    </li>
                    <li class="elemento-menu">
                        <a href="servicios">Servicios</a>
                    </li>
                    <li class="elemento-menu">
                        <a href="contacto">Contactanos</a>
                    </li>
                    <li class="elemento-menu">
                        <a href="/login">Login</a>
                    </li>
                </ul>
            </ul>
        </ul>
    </div>
    <div class="pagina">
        <section class="seccion-pagina parte-superior">
            <div class="contenedor-parte-superior">
                <ul class="contenedor-seccion">
                    <h1>Servicios</h1>
                </ul>
            </div>
        </section>


        <section class="seccion-pagina">
            <div class="contenedor-seccion">
                <ul class="lista-servicios">
                    <ul class="servicio">
                        <li>
                            <img
                                src="https://dollarclick.com.pe/storage/2022/01/sasun-bughdaryan-GQ5uX_BlfmY-unsplash001-e1642897476869.jpg" />
                        </li>
                        <ul class="informacion-servicio">
                            <li>
                                <h1>Compra de Dólares</h1>
                            </li>
                            <li>
                                <p>Adquirimos las divisas que tengas al precio que indica nuestra calculadora
                                    diariamente, con el fin de dinamizar la economía, ofreciendo una tasa de cambio
                                    agradable y competitiva, de esta manera obtienes el mayor beneficio por la cantidad
                                    de divisas que posees.</p>
                            </li>
                        </ul>
                    </ul>

                    <ul class="servicio">
                        <ul class="informacion-servicio">
                            <li>
                                <h1>Compra de Dólares</h1>
                            </li>
                            <li>
                                <p>Adquirimos las divisas que tengas al precio que indica nuestra calculadora
                                    diariamente, con el fin de dinamizar la economía, ofreciendo una tasa de cambio
                                    agradable y competitiva, de esta manera obtienes el mayor beneficio por la cantidad
                                    de divisas que posees.</p>
                            </li>
                        </ul>
                        <li>
                            <img
                                src="https://dollarclick.com.pe/storage/2022/01/sasun-bughdaryan-GQ5uX_BlfmY-unsplash001-e1642897476869.jpg" />
                        </li>
                    </ul>
                </ul>
            </div>
        </section>
    </div>
    <div class="footer">
        <ul>
            <li>
                <p>©2022 DollarClick. Todos los derechos reservados. RUC: 20607933520</p>
            </li>
        </ul>
        <ul class="elementos-menus-footer">
            <ul class="elemento-acceso-foooter">
                <li>
                    <svg aria-hidden="true" class="iconos-footer e-font-icon-svg e-far-list-alt" viewBox="0 0 512 512"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M464 32H48C21.49 32 0 53.49 0 80v352c0 26.51 21.49 48 48 48h416c26.51 0 48-21.49 48-48V80c0-26.51-21.49-48-48-48zm-6 400H54a6 6 0 0 1-6-6V86a6 6 0 0 1 6-6h404a6 6 0 0 1 6 6v340a6 6 0 0 1-6 6zm-42-92v24c0 6.627-5.373 12-12 12H204c-6.627 0-12-5.373-12-12v-24c0-6.627 5.373-12 12-12h200c6.627 0 12 5.373 12 12zm0-96v24c0 6.627-5.373 12-12 12H204c-6.627 0-12-5.373-12-12v-24c0-6.627 5.373-12 12-12h200c6.627 0 12 5.373 12 12zm0-96v24c0 6.627-5.373 12-12 12H204c-6.627 0-12-5.373-12-12v-24c0-6.627 5.373-12 12-12h200c6.627 0 12 5.373 12 12zm-252 12c0 19.882-16.118 36-36 36s-36-16.118-36-36 16.118-36 36-36 36 16.118 36 36zm0 96c0 19.882-16.118 36-36 36s-36-16.118-36-36 16.118-36 36-36 36 16.118 36 36zm0 96c0 19.882-16.118 36-36 36s-36-16.118-36-36 16.118-36 36-36 36 16.118 36 36z">
                        </path>
                    </svg>
                </li>
                <li>Terminos y condiciones</li>
            </ul>
            <ul class="elemento-acceso-foooter">
                <li>
                    <svg aria-hidden="true" class="iconos-footer e-font-icon-svg e-far-list-alt" viewBox="0 0 512 512"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M464 32H48C21.49 32 0 53.49 0 80v352c0 26.51 21.49 48 48 48h416c26.51 0 48-21.49 48-48V80c0-26.51-21.49-48-48-48zm-6 400H54a6 6 0 0 1-6-6V86a6 6 0 0 1 6-6h404a6 6 0 0 1 6 6v340a6 6 0 0 1-6 6zm-42-92v24c0 6.627-5.373 12-12 12H204c-6.627 0-12-5.373-12-12v-24c0-6.627 5.373-12 12-12h200c6.627 0 12 5.373 12 12zm0-96v24c0 6.627-5.373 12-12 12H204c-6.627 0-12-5.373-12-12v-24c0-6.627 5.373-12 12-12h200c6.627 0 12 5.373 12 12zm0-96v24c0 6.627-5.373 12-12 12H204c-6.627 0-12-5.373-12-12v-24c0-6.627 5.373-12 12-12h200c6.627 0 12 5.373 12 12zm-252 12c0 19.882-16.118 36-36 36s-36-16.118-36-36 16.118-36 36-36 36 16.118 36 36zm0 96c0 19.882-16.118 36-36 36s-36-16.118-36-36 16.118-36 36-36 36 16.118 36 36zm0 96c0 19.882-16.118 36-36 36s-36-16.118-36-36 16.118-36 36-36 36 16.118 36 36z">
                        </path>
                    </svg>
                </li>
                <li>Terminos y condiciones</li>
            </ul>
            <ul class="elemento-acceso-foooter">
                <li>
                    <svg aria-hidden="true" class="iconos-footer e-font-icon-svg e-far-list-alt" viewBox="0 0 512 512"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M464 32H48C21.49 32 0 53.49 0 80v352c0 26.51 21.49 48 48 48h416c26.51 0 48-21.49 48-48V80c0-26.51-21.49-48-48-48zm-6 400H54a6 6 0 0 1-6-6V86a6 6 0 0 1 6-6h404a6 6 0 0 1 6 6v340a6 6 0 0 1-6 6zm-42-92v24c0 6.627-5.373 12-12 12H204c-6.627 0-12-5.373-12-12v-24c0-6.627 5.373-12 12-12h200c6.627 0 12 5.373 12 12zm0-96v24c0 6.627-5.373 12-12 12H204c-6.627 0-12-5.373-12-12v-24c0-6.627 5.373-12 12-12h200c6.627 0 12 5.373 12 12zm0-96v24c0 6.627-5.373 12-12 12H204c-6.627 0-12-5.373-12-12v-24c0-6.627 5.373-12 12-12h200c6.627 0 12 5.373 12 12zm-252 12c0 19.882-16.118 36-36 36s-36-16.118-36-36 16.118-36 36-36 36 16.118 36 36zm0 96c0 19.882-16.118 36-36 36s-36-16.118-36-36 16.118-36 36-36 36 16.118 36 36zm0 96c0 19.882-16.118 36-36 36s-36-16.118-36-36 16.118-36 36-36 36 16.118 36 36z">
                        </path>
                    </svg>
                </li>
                <li>Terminos y condiciones</li>
            </ul>
            <ul class="elemento-acceso-foooter">
                <li>
                    <svg aria-hidden="true" class="iconos-footer e-font-icon-svg e-far-list-alt" viewBox="0 0 512 512"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M464 32H48C21.49 32 0 53.49 0 80v352c0 26.51 21.49 48 48 48h416c26.51 0 48-21.49 48-48V80c0-26.51-21.49-48-48-48zm-6 400H54a6 6 0 0 1-6-6V86a6 6 0 0 1 6-6h404a6 6 0 0 1 6 6v340a6 6 0 0 1-6 6zm-42-92v24c0 6.627-5.373 12-12 12H204c-6.627 0-12-5.373-12-12v-24c0-6.627 5.373-12 12-12h200c6.627 0 12 5.373 12 12zm0-96v24c0 6.627-5.373 12-12 12H204c-6.627 0-12-5.373-12-12v-24c0-6.627 5.373-12 12-12h200c6.627 0 12 5.373 12 12zm0-96v24c0 6.627-5.373 12-12 12H204c-6.627 0-12-5.373-12-12v-24c0-6.627 5.373-12 12-12h200c6.627 0 12 5.373 12 12zm-252 12c0 19.882-16.118 36-36 36s-36-16.118-36-36 16.118-36 36-36 36 16.118 36 36zm0 96c0 19.882-16.118 36-36 36s-36-16.118-36-36 16.118-36 36-36 36 16.118 36 36zm0 96c0 19.882-16.118 36-36 36s-36-16.118-36-36 16.118-36 36-36 36 16.118 36 36z">
                        </path>
                    </svg>
                </li>
                <li>Terminos y condiciones</li>
            </ul>
        </ul>
    </div>
</body>

</html>