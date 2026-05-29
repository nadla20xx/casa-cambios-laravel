<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Nosotros</title>
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

        .iconos-contenidos {
            display: grid;
            grid-template-columns: 1fr 1fr;
            column-gap: 24px;
            row-gap: 24px;
        }

        .iconos-contenidos svg {
            height: 80px;
            width: 70px;
            fill: #04244c;
        }

        .iconos-contenidos .icono-contenido {
            text-align: center;
            padding: 30px;
            border-radius: 6px;
            cursor: pointer;
            border: 1px solid rgba(151, 163, 184, 0.2);
            box-shadow: 0 5px 8px -5px rgba(151, 163, 184, 0.5), 0 15px 16px -15px rgba(151, 163, 184, 0.5), 0 25px 32px -25px rgba(151, 163, 184, 0.5);
            transition: all .2s ease-in;
        }

        .iconos-contenidos-informacion {
            display: grid;
            grid-template-columns: 1fr 1fr;
            column-gap: 36px;
        }

        .informacion-nosotros {
            display: flex;
            flex-direction: column;
            justify-content: center;
            text-align: left;
            row-gap: 12px;
        }

        .area-informaciones-nosotros {
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .titulo-informacion-nosotros {
            font-size: 24px;
            font-weight: 700;
            color: rgb(13, 9, 37);
        }

        .icono-contenido:hover>svg {
            transform: rotate(45deg);
            transition: all .2s ease-in;
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
                        <a href="#">Preguntas frecuentes</a>
                    </li>
                    <li class="elemento-menu">
                        <a href="contacto">Contactanos</a>
                    </li>
                </ul>
            </ul>
        </ul>
    </div>
    <div class="pagina">
        <section class="seccion-pagina parte-superior">
            <div class="contenedor-parte-superior">
                <ul class="contenedor-seccion">
                    <h1>Nosotros</h1>
                </ul>
            </div>
        </section>


        <section class="seccion-pagina">
            <div class="contenedor-seccion">
                <ul>
                    <li>
                        <img src="https://dollarclick.com.pe/storage/2022/01/Logo-e1641415724988.png" />
                    </li>
                    <ul class="iconos-contenidos-informacion">
                        <ul class="iconos-contenidos">
                            <li class="icono-contenido">
                                <svg aria-hidden="true" class="e-font-icon-svg e-fas-atlas" viewBox="0 0 448 512"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M318.38 208h-39.09c-1.49 27.03-6.54 51.35-14.21 70.41 27.71-13.24 48.02-39.19 53.3-70.41zm0-32c-5.29-31.22-25.59-57.17-53.3-70.41 7.68 19.06 12.72 43.38 14.21 70.41h39.09zM224 97.31c-7.69 7.45-20.77 34.42-23.43 78.69h46.87c-2.67-44.26-15.75-71.24-23.44-78.69zm-41.08 8.28c-27.71 13.24-48.02 39.19-53.3 70.41h39.09c1.49-27.03 6.53-51.35 14.21-70.41zm0 172.82c-7.68-19.06-12.72-43.38-14.21-70.41h-39.09c5.28 31.22 25.59 57.17 53.3 70.41zM247.43 208h-46.87c2.66 44.26 15.74 71.24 23.43 78.69 7.7-7.45 20.78-34.43 23.44-78.69zM448 358.4V25.6c0-16-9.6-25.6-25.6-25.6H96C41.6 0 0 41.6 0 96v320c0 54.4 41.6 96 96 96h326.4c12.8 0 25.6-9.6 25.6-25.6v-16c0-6.4-3.2-12.8-9.6-19.2-3.2-16-3.2-60.8 0-73.6 6.4-3.2 9.6-9.6 9.6-19.2zM224 64c70.69 0 128 57.31 128 128s-57.31 128-128 128S96 262.69 96 192 153.31 64 224 64zm160 384H96c-19.2 0-32-12.8-32-32s16-32 32-32h288v64z">
                                    </path>
                                </svg>
                            </li>
                            <li class="icono-contenido">
                                <svg aria-hidden="true" class="e-font-icon-svg e-fas-hands-helping"
                                    viewBox="0 0 640 512" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M488 192H336v56c0 39.7-32.3 72-72 72s-72-32.3-72-72V126.4l-64.9 39C107.8 176.9 96 197.8 96 220.2v47.3l-80 46.2C.7 322.5-4.6 342.1 4.3 357.4l80 138.6c8.8 15.3 28.4 20.5 43.7 11.7L231.4 448H368c35.3 0 64-28.7 64-64h16c17.7 0 32-14.3 32-32v-64h8c13.3 0 24-10.7 24-24v-48c0-13.3-10.7-24-24-24zm147.7-37.4L555.7 16C546.9.7 527.3-4.5 512 4.3L408.6 64H306.4c-12 0-23.7 3.4-33.9 9.7L239 94.6c-9.4 5.8-15 16.1-15 27.1V248c0 22.1 17.9 40 40 40s40-17.9 40-40v-88h184c30.9 0 56 25.1 56 56v28.5l80-46.2c15.3-8.9 20.5-28.4 11.7-43.7z">
                                    </path>
                                </svg>
                            </li>
                            <li class="icono-contenido">
                                <svg aria-hidden="true" class="e-font-icon-svg e-far-chart-bar" viewBox="0 0 512 512"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M396.8 352h22.4c6.4 0 12.8-6.4 12.8-12.8V108.8c0-6.4-6.4-12.8-12.8-12.8h-22.4c-6.4 0-12.8 6.4-12.8 12.8v230.4c0 6.4 6.4 12.8 12.8 12.8zm-192 0h22.4c6.4 0 12.8-6.4 12.8-12.8V140.8c0-6.4-6.4-12.8-12.8-12.8h-22.4c-6.4 0-12.8 6.4-12.8 12.8v198.4c0 6.4 6.4 12.8 12.8 12.8zm96 0h22.4c6.4 0 12.8-6.4 12.8-12.8V204.8c0-6.4-6.4-12.8-12.8-12.8h-22.4c-6.4 0-12.8 6.4-12.8 12.8v134.4c0 6.4 6.4 12.8 12.8 12.8zM496 400H48V80c0-8.84-7.16-16-16-16H16C7.16 64 0 71.16 0 80v336c0 17.67 14.33 32 32 32h464c8.84 0 16-7.16 16-16v-16c0-8.84-7.16-16-16-16zm-387.2-48h22.4c6.4 0 12.8-6.4 12.8-12.8v-70.4c0-6.4-6.4-12.8-12.8-12.8h-22.4c-6.4 0-12.8 6.4-12.8 12.8v70.4c0 6.4 6.4 12.8 12.8 12.8z">
                                    </path>
                                </svg>
                            </li>
                            <li class="icono-contenido">
                                <svg aria-hidden="true" class="e-font-icon-svg e-fas-ring" viewBox="0 0 512 512"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M256 64C110.06 64 0 125.91 0 208v98.13C0 384.48 114.62 448 256 448s256-63.52 256-141.87V208c0-82.09-110.06-144-256-144zm0 64c106.04 0 192 35.82 192 80 0 9.26-3.97 18.12-10.91 26.39C392.15 208.21 328.23 192 256 192s-136.15 16.21-181.09 42.39C67.97 226.12 64 217.26 64 208c0-44.18 85.96-80 192-80zM120.43 264.64C155.04 249.93 201.64 240 256 240s100.96 9.93 135.57 24.64C356.84 279.07 308.93 288 256 288s-100.84-8.93-135.57-23.36z">
                                    </path>
                                </svg>
                            </li>
                        </ul>
                        <ul class="area-informaciones-nosotros">
                            <ul class="informacion-nosotros">
                                <li>Misión</li>
                                <li class="titulo-informacion-nosotros">Siempre queremos lo mejor</li>
                                <li>Poder implementar servicios monetarios que sean fáciles de manejar y comprender para
                                    nuestros clientes, lo que permitirá revolucionar la forma en la que se relacionan
                                    con el dinero y puedan acceder a ello de forma fácil y segura.</li>
                            </ul>
                        </ul>
                    </ul>
                </ul>
            </div>
        </section>
        <section class="seccion-pagina seccion-altas-exigencias" style="color:white">
            <div class="contenedor-seccion contenedor-altas-exigencias">
                <ul>
                    <li>
                        <h2 class="titulo-seccion" style="color:white">cumplimos con las mas altas exigencias</h2>
                    </li>
                    <li>
                        <h2 class="sub-titulo-seccion">A diario nuestros clientes disfrutan la calidad de nuestros
                            servicios
                        </h2>
                    </li>
                </ul>
                <ul class="informacion-altas-exigencias">
                    <li>
                        <img class="imagen-1-altas-exigencias"
                            src="https://dollarclick.com.pe/storage/2022/01/Chico-01-1.png" />
                    </li>
                    <ul class="parte-derecha-altas-exigencias">
                        <li>
                            <img class="imagen-2-altas-exigencias"
                                src="https://dollarclick.com.pe/storage/2022/01/sasass-1024x291-1-e1642457935448.png" />
                        </li>
                        <ul class="elementos-porcentajes">
                            <li>Operaciones Diarias</li>
                            <ul class="barra-base-elemento-porcentaje">
                                <li class="barra-porcentaje-activo"></li>
                                <li class="valor-porcentaje-activo">35%</li>
                            </ul>
                        </ul>
                        <ul class="elementos-porcentajes">
                            <li>Operaciones Diarias</li>
                            <ul class="barra-base-elemento-porcentaje">
                                <li class="barra-porcentaje-activo"></li>
                                <li class="valor-porcentaje-activo">35%</li>
                            </ul>
                        </ul>
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