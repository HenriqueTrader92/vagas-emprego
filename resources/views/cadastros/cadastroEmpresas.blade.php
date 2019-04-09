@extends('adminlte::page')

@section('title', 'Departamentos')

@section('content_header')
    <h1>Cadastrar Empresa</h1>

    <ol class="breadcrumb">
        <li><a href="">dashboard</a></li>
        <li><a href="">Empresas</a></li>
    </ol>
@stop

@section('content')
    <div class="box">
        <div class="box-header">

        @if( isset($errors) && count($errors) > 0)
            <div class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <p>{{$error}}</p>
                @endforeach()
            </div>
        @endif
            
    </div>
    <div class="box-body">
        <form action="#" class="form form">

            <label for="inputNome">Nome</label>
            <input name="name" type="text" class="form-control nomeEmpresa" placeholder="Nome da empresa">

            <label for="inputNome">E-mail</label>
            <input name="email" type="text" class="form-control emailEmpresa" placeholder="E-mail">

            <label for="inputNome">Website</label>
            <input name="website" type="text" class="form-control websiteEmpresa" placeholder="Website">

            <label for="inputNome">Logo</label>
            <input name="logo" type="text" class="form-control logoEmpresa" placeholder="Logo">

            <label for="inputNome">Senha</label>
            <input name="password" type="password" class="form-control passwordEmpresa" placeholder="Password">

        <div class="form-group">
        </div>

            <button type="submit" class="btn btn-primary cadastrarEmpresa">Cadastrar</button>

        </form>
    
    </div>
    </div>
@stop

@section('js')
    <script>
        $( document ).ready(function() {
            $( ".cadastrarEmpresa" ).click(function(event) {
                event.preventDefault();

                var nomeEmpresa = $(".nomeEmpresa").val()
                var emailEmpresa = $(".emailEmpresa").val()
                var websiteEmpresa = $(".websiteEmpresa").val()
                var logoEmpresa = $(".logoEmpresa").val()
                var passwordEmpresa = $(".passwordEmpresa").val()



                console.log( emailEmpresa );

                $.ajax({
                    url : "http://localhost:8000/api/companies",
                    type : 'post',
                    data : {
                            name : nomeEmpresa,
                            email : emailEmpresa,
                            website : websiteEmpresa,
                            logo : logoEmpresa,
                            password :passwordEmpresa
                            },
                    beforeSend : function(){
                        $("#resultado").html("ENVIANDO...");
                }
                })
                    .done(function(msg){
                        $("#resultado").html(msg);
                })
                    .fail(function(jqXHR, textStatus, msg){
                        alert(msg);
                }); 

            });
        });
    </script>
@stop