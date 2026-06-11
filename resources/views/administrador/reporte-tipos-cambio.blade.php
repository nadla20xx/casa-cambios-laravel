<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Administrador</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

    <script src="/jquery/jquery-3.5.1.slim.min.js"></script>
    <script src="/jquery/jquery-3.5.1.min.js"></script>
    
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <script src="/vuejs/vue.js"></script>
    <style>
        li,ul{
            padding: 0;
            margin: 0;
            list-style: none;
        }

        .lista-opciones{
            display: flex;
            flex-direction: row;
            justify-content: flex-end;
            padding: 0 12px;
        }
    </style>
  </head>
  <body>
    <nav class="navbar bg-primary" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Administrador</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Tipos de cambio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo route("administrador-usuarios")?>">Usuarios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo route("cerrar-session")?>">Cerrar Sesion</a>
                    </li>
                </ul>
           
            </div>
        </div>
    </nav>
    <div id="contenido">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th class="text-center" scope="col">#</th>
                    <th class="text-center" scope="col">Moneda</th>
                    <th class="text-center" scope="col">Valor en soles</th>
                    <th class="text-center" scope="col">Fecha de cambio</th>
                    <th class="text-center" scope="col">Habilitado</th>
                    <th class="text-center" scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                
                <tr v-for="(tipo_cambio,indice) in tipos_cambios" :key="indice">
                    <th class="text-center" scope="row">@{{ indice + 1 }}</th>
                    <td class="text-center">@{{ tipo_cambio.moneda.codigo }}</td>
                    <td class="text-center">@{{ tipo_cambio.valor }}</td>
                    <td class="text-center">@{{ tipo_cambio.fecha_cambio }}</td>
                    <td class="text-center">@{{ tipo_cambio.habilitado?'Si':'No' }}</td>
                    <td class="text-center">
                        <button class="btn btn-sm btn-outline-primary" @click="RecuperarTipoCambio(tipo_cambio.id_tipo_cambio)">
                            <i class="bi bi-pencil"></i>
                        </button>
                        <button class="btn btn-sm btn-outline-primary" @click="EliminarTipoCambio(tipo_cambio.id_tipo_cambio)">
                            <i class="bi bi-trash"></i>
                        </button>
                    </td>
                </tr>
                
            </tbody>
        </table>

        <div class="modal" tabindex="-1" id="formulario-crear-editar-tipo-cambio">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">@{{ tipo_cambio.id_tipo_cambio ? 'Editar' : 'Nuevo' }} tipo de cambio</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <label for="id-tipo-dispositivo-item-inventario" class="form-label">Moneda</label>
                                    <select v-model="tipo_cambio.id_moneda" class="form-select" id="id-tipo-dispositivo-item-inventario" :disabled="procesando" :class="{ 'border-danger': ExisteError('id_moneda') }">
                                        <option value="" selected>Escoger</option>
                                        @foreach ($monedas as $moneda)
                                            <option value="{{ $moneda->id_moneda }}">{{ $moneda->codigo }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-12 col-md-6">
                                    <label for="item-inventario-codigo" class="form-label">Valor</label>
                                    <input v-model="tipo_cambio.valor" type="number" min="0" step="0.01" class="form-control" id="item-inventario-codigo" placeholder="Valor del tipo de cambio" :disabled="procesando" :class="{ 'border-danger': ExisteError('valor') }">
                                </div>
                                <div class="col-12 col-md-6">
                                    <label for="item-inventario-codigo" class="form-label">Fecha</label>
                                    <input v-model="tipo_cambio.fecha_cambio" type="date" class="form-control" id="item-inventario-codigo" placeholder="Fecha del tipo de cambio" :disabled="procesando" :class="{ 'border-danger': ExisteError('fecha_cambio') }">
                                </div>
                                <div class="col-12 col-md-6">
                                    <label for="estado-item-inventario" class="form-label">Habilitado</label>
                                    <select v-model="tipo_cambio.habilitado" class="form-select" id="estado-item-inventario" :disabled="procesando" :class="{ 'border-danger': ExisteError('habilitado') }">
                                        <option value="1" selected>Si</option>
                                        <option value="0">No</option>
                                    </select>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" :disabled="procesando">Cerrar</button>
                        <button type="button" class="btn btn-primary" @click="GrabarInformacion" :disabled="procesando">Grabar</button>
                    </div>
                </div>
            </div>
        </div>
        <ul class="lista-opciones">
            <li>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" @click="AbrirNuevoTipoCambio">Agregar</button>
            </li>
        </ul>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

    <script>
        var app = new Vue({
            el: '#contenido',
            data: {
                tipo_cambio:{},
                tipos_cambios:[],
                procesando:false,
                errores:[],
            },
            directives: {

            },
            mounted: function (){
                this.$nextTick(function () {
                    this.RecuperarInformacion();
                });
            },
            watch: {
                "lectura.check_fecha_lectura":function (valor) {
                    
                },
                
            },
            computed: {            
                paginas_mostradas:function(){
                    //return PaginasMostradas(this.paginacion);
                },
            },
            updated:function(){
                
            },
            created: function () {
                //document.title = 'Explora - ' + TITULO_WEB;
                
                this.tipo_cambio = this.NuevoTipoCambio();

                
            },
            methods: {
                AbrirNuevoTipoCambio:function(){
                    this.tipo_cambio = this.NuevoTipoCambio();

                    $("#formulario-crear-editar-tipo-cambio").modal("show");
                },
                ExisteError:function (id){
                    let existe = false;

                    this.errores.forEach((error) => {
                        if (error==id) {
                            existe = true;
                        }
                    });

                    return existe;
                },
                NuevoTipoCambio:function(){
                    return {id_tipo_cambio:'',id_moneda:'',valor:'1.00',fecha_cambio:'<?php echo date("Y-m-d")?>',habilitado:1};
                },
                RecuperarTipoCambio:function(id_tipo_cambio){
                    fetch(`<?php echo env("APP_URL")?>/api/tipo-cambio/${id_tipo_cambio}`,
                    {        
                        headers: {
                            "token": 'TOKEN',
                        }
                    })
                    .then(response => response.json())
                    .then(data => {
                        app._data.tipo_cambio = data.data;
                        $("#formulario-crear-editar-tipo-cambio").modal("show");
                    })
                    .catch(error => {
                        console.error('Error al recuperar tipo cambio:', error);
                    });
                },
                FormatearMonto:function(monto,cantidad_decimales=2){
                    return monto.toFixed(cantidad_decimales);
                },
                RecuperarInformacion:function(id_tipo_cambio){
                    fetch(`<?php echo env("APP_URL")?>/api/tipo-cambio`,
                    {        
                        headers: {
                            "token": 'TOKEN',
                        }
                    })
                    .then(response => response.json())
                    .then(data => {
                        app._data.tipos_cambios = data;
                    })
                    .catch(error => {
                        console.error('Error al recuperar tipo cambio:', error);
                    });
                },
                FormularioValido:function(){
                    this.errores = [];

                    if (!this.tipo_cambio.id_moneda) {
                        this.errores.push('id_moneda');
                    }

                    if (!this.tipo_cambio.valor) {
                        this.errores.push('valor');
                    }

                    if (!this.tipo_cambio.fecha_cambio) {
                        this.errores.push('fecha_cambio');
                    }

                    if (!this.tipo_cambio.habilitado) {
                        this.errores.push('habilitado');
                    }

                    return this.errores.length === 0;
                },
                EliminarTipoCambio:function(id_tipo_cambio){
                    if (confirm("¿Quieres eliminar este registro?")) {
                        fetch('/api/tipo-cambio/' + id_tipo_cambio,
                        {
                            method: "DELETE",
                            headers: {
                                "token": 'TOKEN',
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')
                            },
                        })
                        .then(response => response.json())
                        .then(response => {
                            if (response.success) {
                                app.RecuperarInformacion();
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
                },
                GrabarInformacion:function(){
                    if(this.FormularioValido()){
                        let identificador_registro = this.tipo_cambio.id_tipo_cambio;

                        this.procesando = true;

                        if(!identificador_registro){
                            fetch('/api/tipo-cambio',
                                {
                                    method: "POST",
                                    headers: {
                                        "token": 'TOKEN',
                                        'Content-Type': 'application/json',
                                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')
                                    },
                                    body: JSON.stringify(this.tipo_cambio)
                                })
                                .then(response => response.json())
                                .then(response => {
                                    if (response.success) {
                                        app.RecuperarInformacion();

                                        $("#formulario-crear-editar-tipo-cambio").modal("hide");
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
                        }else{
                            
                            fetch(`/api/tipo-cambio/${identificador_registro}`,
                                {
                                    method: "PUT",
                                    headers: {
                                        "token": 'TOKEN',
                                        'Content-Type': 'application/json',
                                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')
                                    },
                                    body: JSON.stringify(this.tipo_cambio)
                                })
                                .then(response => response.json())
                                .then(response => {
                                    if (response.success) {
                                        $("#formulario-crear-editar-tipo-cambio").modal("hide");

                                        app.RecuperarInformacion();
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
            }
        });
    </script>
  </body>
</html>