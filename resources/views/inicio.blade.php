<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Casa de cambio</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="/css/estilo.css">

    <script src="/vuejs/vue.js"></script>

    <script>
        function RecuperarTipoCambioHoy()
        {
            fetch(`http://localhost/api/tipo-cambio/recuperar-tipo-cambio-fecha/2026-05-29`,
            {        
                headers: {
                    "token": 'TOKEN',
                }
            })
            .then(response => response.json())
            .then(data => {
                
            })
            .catch(error => {
                console.error('Error al recuperar tipo cambio:', error);
            });
        }

        RecuperarTipoCambioHoy();
        
    </script>
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
                <ul class="informacion-compra-venta">
                    <!--
                    <li>
                        <img src="billetes.png" />
                    </li>
                    -->
                    <ul>
                        <li class="titulo-informacion">Cambia Dólares a Soles</li>
                        <li class="sub-titulo-informacion">Bastante Fácil</li>
                        <li class="text-informacion">Compra o vende Dólares con nosotros, con seguridad y muy fácil,
                            desde donde estes.</li>
                    </ul>
                </ul>
                <ul class="formulario-compra-venta">
                    <ul class="cabecera-formulario-compra-venta">
                        <li>
                            <!--
                            <img class="logo-formulario"
                                src="https://dollarclick.com.pe/storage/2022/01/Logo-e1641415724988.png" />
                                -->
                            <svg class="logo-formulario" width="1200" height="1200" viewBox="0 0 1200 1200" fill="none"
                                xmlns="http://www.w3.org/2000/svg">

                                <!-- Background -->
                                <rect width="1200" height="1200" fill="white" />

                                <!-- Circular Finance Symbol -->
                                <circle cx="600" cy="250" r="140" stroke="#0A2A73" stroke-width="3" opacity="0.25" />

                                <!-- Gold Arrow -->
                                <path d="M520 190
                    A110 110 0 0 1 690 180" stroke="#D4A62A" stroke-width="22" stroke-linecap="round" fill="none" />

                                <polygon points="685,160 730,180 695,205" fill="#D4A62A" />

                                <!-- Blue Arrow -->
                                <path d="M680 310
                    A110 110 0 0 1 520 300" stroke="#0A2A73" stroke-width="22" stroke-linecap="round" fill="none" />

                                <polygon points="525,325 485,295 535,285" fill="#0A2A73" />

                                <!-- Statistics Bars -->
                                <rect x="560" y="250" width="22" height="45" fill="#0A2A73" />
                                <rect x="595" y="220" width="22" height="75" fill="#0A2A73" />
                                <rect x="630" y="190" width="22" height="105" fill="#0A2A73" />

                                <!-- Decorative Orbit Dots -->
                                <circle cx="470" cy="200" r="8" fill="#D4A62A" />
                                <circle cx="735" cy="315" r="8" fill="#0A2A73" />
                                <circle cx="685" cy="110" r="8" fill="#D4A62A" />

                                <!-- MYREN -->
                                <text x="600" y="540" text-anchor="middle" font-family="Cinzel, serif" font-size="120"
                                    letter-spacing="6">

                                    <tspan fill="#0A2A73">MY</tspan>
                                    <tspan fill="#D4A62A">REN</tspan>
                                </text>

                                <!-- SAC -->
                                <line x1="340" y1="610" x2="470" y2="610" stroke="#D4A62A" stroke-width="3" />

                                <text x="600" y="635" text-anchor="middle" font-family="Montserrat, sans-serif"
                                    font-size="48" letter-spacing="14" fill="#0A2A73">
                                    SAC
                                </text>

                                <line x1="730" y1="610" x2="860" y2="610" stroke="#D4A62A" stroke-width="3" />

                                <!-- ONLINE -->
                                <rect x="365" y="700" rx="28" ry="28" width="470" height="85" fill="#0A2A73" />

                                <text x="600" y="755" text-anchor="middle" font-family="Montserrat, sans-serif"
                                    font-size="48" letter-spacing="18" fill="white">
                                    ONLINE
                                </text>

                                <!-- Slogan -->
                                <text x="600" y="870" text-anchor="middle" font-family="Montserrat, sans-serif"
                                    font-size="28" letter-spacing="7" fill="#0A2A73">
                                    SEGURIDAD • DISCRECIÓN • CONFIANZA
                                </text>

                                <!-- Bottom Lines -->
                                <line x1="420" y1="940" x2="540" y2="940" stroke="#D4A62A" stroke-width="3" />

                                <line x1="660" y1="940" x2="780" y2="940" stroke="#D4A62A" stroke-width="3" />

                                <!-- Shield -->
                                <path d="M600 920
                    L630 935
                    L630 980
                    Q600 1010 570 980
                    L570 935 Z" fill="white" stroke="#D4A62A" stroke-width="5" />

                                <!-- Lock -->
                                <rect x="583" y="948" width="34" height="28" rx="5" fill="#0A2A73" />

                                <path d="M590 948
                    V938
                    A10 10 0 0 1 610 938
                    V948" stroke="#0A2A73" stroke-width="5" fill="none" />

                                <!-- M inside lock -->
                                <text x="600" y="968" text-anchor="middle" font-family="Montserrat, sans-serif"
                                    font-size="18" font-weight="bold" fill="white">
                                    M
                                </text>

                            </svg>
                        </li>
                        <li class="subtitulo-formulario-compra-venta">Aprovecha la mejor tasa de cambio del momento</li>
                    </ul>
                    <ul class="cuerpo-formulario-compra-venta">
                        <ul class="botones-compra-venta">
                            <li class="boton-iniciar-compra-venta compra">
                                <span>Compra</span>
                            </li>
                            <li class="boton-iniciar-compra-venta">
                                <span>Venta</span>
                            </li>
                        </ul>
                        <li class="texto-cuerpo-formulario-compra-venta">
                            <span>Precio por Dolar:3.390</span>
                        </li>
                        <ul class="texto-inferior-cuerpo-formulario-compra-venta">
                            <li>
                                <span>¿Cuántos Dólares Tienes?</span>
                            </li>
                            <li>
                                <input value="1000">
                            </li>
                        </ul>
                    </ul>
                    <ul class="pie-formulario-compra-venta">
                        <div class="boton-iniciar-compra-venta boton-recibe-formulario">
                            <span>Recibes</span>
                            <span>S/</span>
                            <span>32000</span>
                        </div>
                    </ul>
                </ul>
            </div>
        </section>

        <section class="seccion-pagina">
            <div class="contenedor-seccion">
                <ul class="pagina-informacion-1">
                    <li>
                        <img width="566" height="320"
                            src="https://dollarclick.com.pe/storage/2022/01/Mesa-de-trabajo-1-copia-5.png"
                            srcset="https://dollarclick.com.pe/storage/2022/01/Mesa-de-trabajo-1-copia-5.png 566w, https://dollarclick.com.pe/storage/2022/01/Mesa-de-trabajo-1-copia-5-300x170.png 300w">
                    </li>
                    <ul class="pagina-informacion-1-texto">
                        <li>
                            <p>Somos una casa de cambio Online, Fintech. Estamos registrados y supervisados por la SBS
                                con
                                resolución Nº 02253-2021. Nuestro objetivo es brindarle el servicio de compra y venta de
                                dólares
                                de manera segura, rápida y al mejor tipo de cambio del mercado</p>
                        </li>
                        <li>
                            <a href="#" class="boton">Deseo Conocerlos</a>
                        </li>
                    </ul>
                </ul>
            </div>
        </section>
        <section class="seccion-pagina">
            <div class="contenedor-seccion">
                <ul>
                    <h2 class="titulo-seccion">Tenemos el proceso de cambio mas sencillo</h2>
                </ul>
                <ul>
                    <h2 class="sub-titulo-seccion">con la mayor seguridad para que tus operaciones sean confiables y
                        puedas
                        contar con nosotros siempre</h2>
                </ul>
                <ul class="lista-elementos-1">
                    <ul class="elemento-lista-elementos-1">
                        <li><i class="bi bi-0-circle" style="font-size: 2rem;"></i></li>
                        <li class="lista-elementos-1-titulo">Registrate</li>
                        <li>Accede en nuestro portal e ingresa tus datos, luego podrás con toda la seguridad que te
                            ofrecemos realizar las operaciones que desees.</li>
                    </ul>
                    <ul class="elemento-lista-elementos-1">
                        <li><i class="bi bi-0-circle" style="font-size: 2rem;"></i></li>
                        <li class="lista-elementos-1-titulo">Registrate</li>
                        <li>Accede en nuestro portal e ingresa tus datos, luego podrás con toda la seguridad que te
                            ofrecemos realizar las operaciones que desees.</li>
                    </ul>
                    <ul class="elemento-lista-elementos-1">
                        <li><i class="bi bi-0-circle" style="font-size: 2rem;"></i></li>
                        <li class="lista-elementos-1-titulo">Registrate</li>
                        <li>Accede en nuestro portal e ingresa tus datos, luego podrás con toda la seguridad que te
                            ofrecemos realizar las operaciones que desees.</li>
                    </ul>
                    <ul class="elemento-lista-elementos-1">
                        <li><i class="bi bi-0-circle" style="font-size: 2rem;"></i></li>
                        <li class="lista-elementos-1-titulo">Registrate</li>
                        <li>Accede en nuestro portal e ingresa tus datos, luego podrás con toda la seguridad que te
                            ofrecemos realizar las operaciones que desees.</li>
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
        <section class="seccion-pagina">
            <div class="contenedor-seccion">
                <ul class="importante-horarios">
                    <ul class="es-importante">
                        <li>
                            <h2 class="titulos-seccion-es-importante-horario">Es importante</h2>
                        </li>
                        <ul>
                            <ul class="lista-es-importante">
                                <ul class="elemento-es-importante">
                                    <ul class="informacion-es-imporante">
                                        <li class="lista-elementos-1-titulo">Transferencias inmediatas</li>
                                        <li>Montos hasta 10,000 dólares (10-20 minutos apróximadamente). Montos mayores
                                            a
                                            10,000 dólares (20-40 minutos apróximadamente).</li>
                                    </ul>
                                    <li class="informacion-es-imporante">
                                        <img class="imagen-es-importante"
                                            src="https://dollarclick.com.pe/storage/2022/01/banco-de-credito-del-peru-bcp-logo-vector-1-pgl5uj86jbyoushvws490hlnpej7vb7ajbwj64jtrw.png">
                                    </li>
                                </ul>
                                <ul class="elemento-es-importante">
                                    <ul class="informacion-es-imporante">
                                        <li class="lista-elementos-1-titulo">Transferencias inmediatas</li>
                                        <li>Montos hasta 10,000 dólares (10-20 minutos apróximadamente). Montos mayores
                                            a
                                            10,000 dólares (20-40 minutos apróximadamente).</li>
                                    </ul>
                                    <li class="informacion-es-imporante">
                                        <img class="imagen-es-importante"
                                            src="https://dollarclick.com.pe/storage/2022/01/banco-de-credito-del-peru-bcp-logo-vector-1-pgl5uj86jbyoushvws490hlnpej7vb7ajbwj64jtrw.png">
                                    </li>
                                </ul>
                            </ul>
                        </ul>
                    </ul>
                    <ul class="seccion-horarios">
                        <li>
                            <h2 class="titulos-seccion-es-importante-horario">Nuestro horario</h2>
                        </li>
                        <ul class="horario-dia-semana">
                            <li class="horario-dia-semana-dia">Lunes</li>
                            <li class="horario-dia-semana-horas">09:00 AM 06:00 PM</li>
                        </ul>
                        <ul class="horario-dia-semana">
                            <li class="horario-dia-semana-dia">Martes</li>
                            <li class="horario-dia-semana-horas">09:00 AM 06:00 PM</li>
                        </ul>
                        <ul class="horario-dia-semana">
                            <li class="horario-dia-semana-dia">Miercoles</li>
                            <li class="horario-dia-semana-horas">09:00 AM 06:00 PM</li>
                        </ul>
                        <ul class="horario-dia-semana">
                            <li class="horario-dia-semana-dia">Jueves</li>
                            <li class="horario-dia-semana-horas">09:00 AM 06:00 PM</li>
                        </ul>
                        <ul class="horario-dia-semana">
                            <li class="horario-dia-semana-dia">Viernes</li>
                            <li class="horario-dia-semana-horas">09:00 AM 06:00 PM</li>
                        </ul>
                        <ul class="horario-dia-semana">
                            <li class="horario-dia-semana-dia">Sabado</li>
                            <li class="horario-dia-semana-horas">09:00 AM 06:00 PM</li>
                        </ul>
                        <ul class="horario-dia-semana">
                            <li class="horario-dia-semana-dia-no-laborable">Domingo</li>
                            <li class="horario-dia-semana-horas-cerrado">Cerrado</li>
                        </ul>
                    </ul>
                </ul>
            </div>
        </section>
    </div>
    <div class="footer">
        <ul>
            <li>
                <p>©2026 MYREN. Todos los derechos reservados. RUC: 20606251000</p>
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