@extends('admin.template.layout')


@section('content')


<!-- Matter -->
<div class="matter">

    <div class="container">

        <div class="row">

            <div class="col-md-12">

                @if (Session::has('message'))
                <div class="alert alert-info">{{ Session::get('message') }}</div>
                @endif

                <div class="widget">

                    <div class="widget-head">
                        <div class="pull-left">Cadastro de Empreendimento</div>
                        <div class="clearfix"></div>
                    </div>                    

                    <div class="widget-content">
                        <div class="padd">

                            <div class="tabbable" style="margin-bottom: 18px;">
                                
                                <br>
                                <!-- Form - Cadastro de empreendimento.  -->
                                {{ Form::open(array('url' => 'admin/empreendimento/criar-empreendimento', 'files' => true, 'class' => 'form-horizontal', 'role' => 'form')) }}
                                <div class="form-group">
                                    <label class="col-lg-2 control-label">Nome</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" name="name" placeholder="Nome do empreendimento">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-lg-2 control-label">Imagem Capa</label>
                                    <div class="col-lg-10">
                                        <input type="file" class="form-control" name="imagem" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-lg-offset-2 col-lg-9">
                                        <button type="submit" class="btn btn-default">Salvar</button>
                                    </div>
                                </div> 

                                {{ Form::close() }}
                            </div>

                        </div>
                    </div>

                </div>

            </div>

        </div>

    </div>

    @stop