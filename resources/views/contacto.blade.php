<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Contacto</title>
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




        .iconos-formulario-contacto {
            display: grid;
            grid-template-columns: 1fr 1fr;
        }

        .elemento-icono-informacion svg {
            width: 50px;
            height: 50px;
        }

        .lista-iconos-informacion {
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            justify-content: center;
            row-gap: 48px;
        }

        .elemento-icono-informacion {
            width: 255px;
            display: flex;
            flex-direction: column;
            row-gap: 12px;
            color: #249b33;
            font-weight: 600;
        }

        label {
            display: block;
            font-weight: 700;
            font-size: 16px;
            float: none;
            line-height: 1.3;
            ;
        }

        input {
            background-color: #fff;
            border-radius: 2px;
            color: #333;
            display: block;
            float: none;
            font-size: 16px;
            border: 1px solid #ccc;
            padding: 6px 10px;
            height: 38px;
            width: 100%;
            line-height: 1.3;
        }

        .campo-formulario {
            display: flex;
            flex-direction: column;
            row-gap: 6px;
            text-align: justify;
            width: 100%;
        }

        .fila-campos {
            display: flex;
            flex-direction: row;
            column-gap: 24px;
            justify-content: space-between;
        }

        .formulario {
            display: flex;
            flex-direction: column;
            row-gap: 24px;
        }

        .formulario button {
            background-color: #eee;
            border: 1px solid #ddd;
            color: #333;
            font-size: 16px;
            padding: 10px 15px;
        }

        .pie-formulario {
            display: flex;
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
                    <h1>Contáctanos</h1>
                </ul>
            </div>
        </section>


        <section class="seccion-pagina">
            <div class="contenedor-seccion">
                <ul class="iconos-formulario-contacto">
                    <ul class="lista-iconos-informacion">
                        <ul class="elemento-icono-informacion">
                            <li>
                                <svg aria-hidden="true" class="e-font-icon-svg e-fas-phone-square-alt"
                                    viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M400 32H48A48 48 0 0 0 0 80v352a48 48 0 0 0 48 48h352a48 48 0 0 0 48-48V80a48 48 0 0 0-48-48zm-16.39 307.37l-15 65A15 15 0 0 1 354 416C194 416 64 286.29 64 126a15.7 15.7 0 0 1 11.63-14.61l65-15A18.23 18.23 0 0 1 144 96a16.27 16.27 0 0 1 13.79 9.09l30 70A17.9 17.9 0 0 1 189 181a17 17 0 0 1-5.5 11.61l-37.89 31a231.91 231.91 0 0 0 110.78 110.78l31-37.89A17 17 0 0 1 299 291a17.85 17.85 0 0 1 5.91 1.21l70 30A16.25 16.25 0 0 1 384 336a17.41 17.41 0 0 1-.39 3.37z">
                                    </path>
                                </svg>
                            </li>
                            <ul>
                                <li>01-7737491</li>
                            </ul>
                        </ul>
                        <ul class="elemento-icono-informacion">
                            <li>
                                <svg aria-hidden="true" class="e-font-icon-svg e-fab-whatsapp" viewBox="0 0 448 512"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z">
                                    </path>
                                </svg>
                            </li>
                            <ul>
                                <li>938 579 148</li>
                            </ul>
                        </ul>
                        <ul class="elemento-icono-informacion">
                            <li>
                                <svg aria-hidden="true" class="e-font-icon-svg e-fas-map-marker-alt"
                                    viewBox="0 0 384 512" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961 85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0zM192 272c44.183 0 80-35.817 80-80s-35.817-80-80-80-80 35.817-80 80 35.817 80 80 80z">
                                    </path>
                                </svg>
                            </li>
                            <ul>
                                <li>Av. Precursores 1192</li>
                                <li>Oficina 504 San miguel - Lima</li>
                            </ul>
                        </ul>
                    </ul>
                    <ul>
                        <li>
                            <form>
                                <ul class="formulario">
                                    <ul class="fila-campos">
                                        <ul class="campo-formulario">
                                            <li><label>Nombres</label></li>
                                            <li>
                                                <input type="text" />
                                            </li>
                                        </ul>
                                        <ul class="campo-formulario">
                                            <li><label>Apellidos</label></li>
                                            <li>
                                                <input type="text" />
                                            </li>
                                        </ul>
                                    </ul>
                                    <ul class="fila-campos">
                                        <ul class="campo-formulario">
                                            <li><label>Numero de Telefono</label></li>
                                            <li>
                                                <input type="text" />
                                            </li>
                                        </ul>
                                    </ul>
                                    <ul class="fila-campos">
                                        <ul class="campo-formulario">
                                            <li><label>Describe su consulta</label></li>
                                            <li>
                                                <input type="text" />
                                            </li>
                                        </ul>
                                    </ul>
                                    <li class="pie-formulario">
                                        <button>Consultar</button>
                                    </li>
                                </ul>
                            </form>
                        </li>
                    </ul>
                </ul>
            </div>
        </section>
        <section>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d31211.047403311008!2d-76.9949696!3d-12.0860539!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2spe!4v1779802375916!5m2!1ses-419!2spe"
                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
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