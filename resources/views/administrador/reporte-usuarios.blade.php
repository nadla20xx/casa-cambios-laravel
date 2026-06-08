@extends('administrador.app')

@section('titulo_pagina', 'administrador de usuarios')

@section('content')
    <div id="contenido">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th class="text-center" scope="col">#</th>
                    <th class="text-center" scope="col">Correo</th>
                    <th class="text-center" scope="col">Fecha registro</th>
                    <th class="text-center" scope="col">Fecha ultimo ingreso</th>
                    <th class="text-center" scope="col">Habilitado</th>
                    <th class="text-center" scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                
                <tr v-for="(usuario,indice) in usuarios" :key="indice">
                    <th class="text-center" scope="row">@{{ indice + 1 }}</th>
                    <td class="text-center">@{{ usuario.email }}</td>
                    <td class="text-center">@{{ usuario.fecha_hora_registro }}</td>
                    <td class="text-center">@{{ usuario.fecha_hora_ultimo_login }}</td>
                    <td class="text-center">@{{ usuario.habilitado?'Si':'No' }}</td>
                    <td class="text-center">
                        <button class="btn btn-sm btn-outline-primary" @click="RecuperarUsuario(usuario.id_usuario)">
                            <i class="bi bi-pencil"></i>
                        </button>
                        <button class="btn btn-sm btn-outline-primary" @click="EliminarUsuario(usuario.id_usuario)">
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
                        <h1 class="modal-title fs-5" id="exampleModalLabel">@{{ usuario.id_usuario ? 'Editar' : 'Nuevo' }} usuario</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="row">                                
                                <div class="col-12 col-md-12">
                                    <label for="item-inventario-codigo" class="form-label">Correo</label>
                                    <input v-model="usuario.email" type="email" min="0" step="0.01" class="form-control" id="item-inventario-codigo" placeholder="Cuenta de correo del usuario" :disabled="procesando" :class="{ 'border-danger': ExisteError('email') }">
                                </div>
                                <div class="col-12 col-md-6">
                                    <label for="item-inventario-codigo" class="form-label">Contraseña</label>
                                    <input v-model="usuario.password" type="password" min="0" step="0.01" class="form-control" id="item-inventario-codigo" placeholder="Contraseña" :disabled="procesando" :class="{ 'border-danger': ExisteError('password') }">
                                </div>
                                <div class="col-12 col-md-6">
                                    <label for="item-inventario-codigo" class="form-label">Repetir contraseña</label>
                                    <input v-model="usuario.re_password" type="password" min="0" step="0.01" class="form-control" id="item-inventario-codigo" placeholder="Volver ingresar contraseña" :disabled="procesando" :class="{ 'border-danger': ExisteError('re_password') }">
                                </div>
                                <div class="col-12 col-md-6">
                                    <label for="estado-item-inventario" class="form-label">Habilitado</label>
                                    <select v-model="usuario.habilitado" class="form-select" id="estado-item-inventario" :disabled="procesando" :class="{ 'border-danger': ExisteError('habilitado') }">
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
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" @click="AbrirNuevoUsuario">Agregar</button>
            </li>
        </ul>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

    <script>
        var app = new Vue({
            el: '#contenido',
            data: {
                usuario:{},
                usuarios:[],
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
                
                this.usuario = this.NuevoUsuario();

                
            },
            methods: {
                AbrirNuevoUsuario:function(){
                    this.usuario = this.NuevoUsuario();

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
                NuevoUsuario:function(){
                    return {id_usuario:'',email:'',password:'',re_password:'',fecha_hora_registro:'',fecha_hora_ultimo_login:'',habilitado:1};
                },
                RecuperarUsuario:function(id_usuario){
                    fetch(`<?php echo env("APP_URL")?>/api/usuarios/${id_usuario}`,
                    {        
                        headers: {
                            "token": 'TOKEN',
                        }
                    })
                    .then(response => response.json())
                    .then(data => {
                        app._data.usuario               =   data.data;
                        app._data.usuario.re_password   =   app._data.usuario.password;

                        $("#formulario-crear-editar-tipo-cambio").modal("show");
                    })
                    .catch(error => {
                        console.error('Error al recuperar usuario:', error);
                    });
                },
                RecuperarInformacion:function(id_tipo_cambio){
                    fetch(`<?php echo env("APP_URL")?>/api/usuarios`,
                    {        
                        headers: {
                            "token": 'TOKEN',
                        }
                    })
                    .then(response => response.json())
                    .then(data => {
                        app._data.usuarios = data;
                    })
                    .catch(error => {
                        console.error('Error al recuperar usuarios:', error);
                    });
                },
                FormularioValido:function(){
                    this.errores = [];

                    if (!this.usuario.email) {
                        this.errores.push('email');
                    }

                    if (!this.usuario.password) {
                        this.errores.push('password');
                    }

                    if (!this.usuario.re_password) {
                        this.errores.push('re_password');
                    }

                    if (this.usuario.re_password!=this.usuario.password) {
                        this.errores.push('re_password');
                        this.errores.push('password');
                    }

                    if (!this.usuario.habilitado) {
                        this.errores.push('habilitado');
                    }

                    return this.errores.length === 0;
                },
                EliminarUsuario:function(id_tipo_cambio){
                    if (confirm("¿Quieres eliminar este registro?")) {
                        fetch('/api/usuarios/' + id_tipo_cambio,
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
                        let identificador_registro = this.usuario.id_usuario;

                        this.procesando = true;

                        if(!identificador_registro){
                            fetch('/api/usuarios',
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
                            
                            fetch(`/api/usuarios/${identificador_registro}`,
                                {
                                    method: "PUT",
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
@endsection