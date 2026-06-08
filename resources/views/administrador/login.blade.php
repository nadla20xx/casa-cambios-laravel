<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
                
        <title>Inicio de session</title>

        <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/sign-in/">

        <link href="https://getbootstrap.com/docs/5.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

        <!-- Favicons -->
        <link rel="apple-touch-icon" href="https://getbootstrap.com/docs/5.2/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
        <link rel="icon" href="https://getbootstrap.com/docs/5.2/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
        <link rel="icon" href="https://getbootstrap.com/docs/5.2/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
        <link rel="manifest" href="https://getbootstrap.com/docs/5.2/assets/img/favicons/manifest.json">
        <link rel="mask-icon" href="https://getbootstrap.com/docs/5.2/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
        <link rel="icon" href="https://getbootstrap.com/docs/5.2/assets/img/favicons/favicon.ico">
        <meta name="theme-color" content="#712cf9">

        <script src="/jquery/jquery-3.5.1.slim.min.js"></script>
    <script src="/jquery/jquery-3.5.1.min.js"></script>
    
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">

        <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
            font-size: 3.5rem;
            }
        }

        .b-example-divider {
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }

        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }

        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }
        </style>
        
        <!-- Custom styles for this template -->
        <link href="https://getbootstrap.com/docs/5.2/examples/sign-in/signin.css" rel="stylesheet">

        <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.min.js"></script>

        <link rel="stylesheet" href="//unpkg.com/element-plus/dist/index.css" />        
    </head>
    <body class="text-center">
        <div id="inicio_session" class="form-signin w-100 m-auto">
            <form @keyup.enter="VeriricarAccesos()">
                <h1 class="h3 mb-3 fw-normal">Inicio de sesión</h1>
                <div class="form-floating">
                    <input type="email" v-model="usuario.email" class="form-control" id="floatingInput" placeholder="name@example.com" :disabled="procesando">
                    <label for="floatingInput">Dirección email</label>
                </div>
                <div class="form-floating">
                    <input type="password" v-model="usuario.password" class="form-control" id="floatingPassword" placeholder="Password" :disabled="procesando">
                    <label for="floatingPassword">Contraseña</label>
                </div>
                
                <el-button type="primary" class="w-100 btn btn-lg btn-primary" :loading="procesando" @click="VeriricarAccesos()">Ingresar</el-button>
                <p class="mt-5 mb-3 text-muted">&copy; 2026</p>

            </form>
        </div>
        <script>
        var app = new Vue({
            el: '#inicio_session',
            data: {
                usuario:{email:'',password:''},
                procesando:false
            },
            directives: {

            },
            mounted: function (){
                this.$nextTick(function () {
                    
                });
            },
            watch: {
                
            },
            computed: {
                
            },
            updated:function(){
                
            },
            created: function () {
                //document.title = 'Explora - ' + TITULO_WEB;
            },
            methods: {                
                ExisteError:function (id){
                    let existe = false;

                    this.errores.forEach((error) => {
                        if (error==id) {
                            existe = true;
                        }
                    });

                    return existe;
                },
                FormularioValido:function(){
                    this.errores = [];

                    if (!this.usuario.email) {
                        this.errores.push('email');
                    }

                    if (!this.usuario.password) {
                        this.errores.push('password');
                    }

                    return this.errores.length === 0;
                },
                VeriricarAccesos:function(){
                    if(this.FormularioValido()){                        
                        fetch('/api/verificar-accesos',
                            {
                                method: "POST",
                                headers: {
                                    "token": 'TOKEN',
                                    'Content-Type': 'application/json',
                                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')
                                },
                                body: JSON.stringify(this.usuario)
                            })
                            .then(response => response.json())
                            .then(response => {
                                if (response.success) {
                                    location.href = "<?php echo route("administrador-tipos-cambio")?>";
                                } else {
                                    alert(response.mensaje);

                                    console.log("Error:" + response.mensaje);
                                }
                            })
                            .catch(error => {
                                console.log("Error:" + error);
                            })
                            .then(() => {
                                this.procesando = false;
                            });
                        
                    }
                }
            }
        });
    </script>
    </body>
    
</html>