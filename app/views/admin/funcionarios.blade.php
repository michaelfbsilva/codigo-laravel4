@extends('admin.template.layout')


@section('content')

<!-- Page heading -->
<div class="page-head">
    <h2 class="pull-left">Funcionarios</h2>

    <div class="clearfix"></div>

</div>
<!-- Page heading ends -->

<!-- Matter -->
<div class="matter">

    <div class="container">

        <div class="row">

            @if (Session::has('message'))
            <div class="col-md-12"> 
                <div class="alert alert-info">{{ Session::get('message') }}</div>
            </div>
            @endif

            <div class="col-md-12">               


                <!-- Galeria de Fotos -->
                <div class="widget">
                    <div class="widget-head">
                        <div class="pull-left">Cadastro de usuario</div>
                        <div class="widget-icons pull-right">
                            <a href="#" class="wminimize"><i class="fa fa-chevron-up"></i></a>
                        </div>  
                        <div class="clearfix"></div>
                    </div>
                    <div class="widget-content">
                        <div class="padd">  

                            {{ Form::open(array('url' => 'admin/funcionarios/cadastro-funcionarios', 'files' => true, 'method' => 'post')) }}

                            <h6>Nome</h6>
                            <input type="text" name="name" class="form-control"/>

                            <h6>Email</h6>
                            <input type="text" name="email" class="form-control">

                            <h6>Telefone</h6>
                            <input type="text" name="telefone" class="form-control">
                            
                            <input type="hidden" name="user_level" value="funcionario">

<!--                            <h6>Nivel</h6>
                            <select name="user_level" class="form-control">
                                <option value="funcionario">Funcionario</option>
                                <option value="administrador">Administrador</option>
                            </select>-->

                            <h6>Senha</h6>
                            <input type="password" name="password" class="form-control">

                            <div class="clearfix"></div>

                            <hr />
                            <div class="buttons">
                                <button class="btn btn-primary">Cadastrar</button> 
                            </div>

                            {{ Form::close() }}

                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>

                <!-- Galeria de Fotos -->
                <div class="widget">
                    <div class="widget-head">
                        <div class="pull-left">Usuarios</div>
                        <div class="widget-icons pull-right">
                            <a href="#" class="wminimize"><i class="fa fa-chevron-up"></i></a>
                        </div>  
                        <div class="clearfix"></div>
                    </div>
                    <div class="widget-content">
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th style=" width: 73px;">Controle</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach( $funcionarios as $funcionario )
                                <tr>
                                    <td>{{ $funcionario->name }}</td>
                                    <td>{{ $funcionario->email }}</td>
                                    <td>
                                        {{ Form::open(array('url' => 'admin/funcionarios/deletar-funcionarios/'  . $funcionario->id )) }}
                                        {{ Form::hidden('_method', 'DELETE') }}
                                        {{ Form::submit('Deletar', array('class' => 'btn btn-xs btn-success')) }}
                                        {{ Form::close() }}
                                    </td>
                                </tr> 
                                @endforeach
                            </tbody>
                        </table>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

</div>

@stop