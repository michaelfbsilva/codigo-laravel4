@extends('admin.template.layout')


@section('content')

<!-- Page heading -->
<div class="page-head">
    <h2 class="pull-left">{{ $editarCategoria->name }}</h2>

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


                <div class="widget">
                    <div class="widget-head">
                        <div class="pull-left">Dados do empreendimento</div>
                        <div class="widget-icons pull-right">
                            <a href="#" class="wminimize"><i class="fa fa-chevron-up"></i></a>
                        </div>  
                        <div class="clearfix"></div>
                    </div>

                    <!-- Dados do empreendimento -->
                    <div class="widget-content">
                        <div class="padd">

                            {{ Form::open(array('url' => 'admin/empreendimento/editar/', 'role' => 'form')) }}

                            <input type="hidden" name="id" value="{{ $editarCategoria->id }}">

                            <h6>Descrição</h6>
                            <div class="text-area">
                                <!-- Add the "cleditor" to textarea to add CLeditor -->
                                {{ Form::textarea('descricao', $editarCategoria->descricao, array('class' => 'cleditor'))}}
                            </div>

                            <h6>Video</h6>
                            {{ Form::text('video', $editarCategoria->video, array('class' => 'form-control'))}}

                            <input type="hidden" name="categorias_id" value="{{ $editarCategoria->categorias_id }}">

                            <div class="clearfix"></div>

                            <hr />
                            <div class="buttons">
                                <button class="btn btn-primary">Save</button> 
                            </div>

                            {{ Form::close() }}

                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div> 
            </div>
        </div>
    </div>

</div>

</div>

@stop