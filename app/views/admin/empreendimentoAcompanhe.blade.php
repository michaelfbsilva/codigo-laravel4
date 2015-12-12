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

            <div class="col-md-8">               


                <div class="widget">
                    <div class="widget-head">
                        <div class="pull-left">Construindo com qualidede</div>
                        <div class="widget-icons pull-right">
                            <a href="#" class="wminimize"><i class="fa fa-chevron-up"></i></a>
                        </div>  
                        <div class="clearfix"></div>
                    </div>

                    <!-- Dados do empreendimento -->
                    <div class="widget-content">
                        <div class="padd">

                            {{ Form::open(array('url' => 'admin/empreendimento/editar-acompanhe/', 'role' => 'form')) }}

                            <input type="hidden" name="id" value="{{ $editarConstruido->id }}">

                            <h6>Descrição</h6>
                            <div class="text-area">
                                <!-- Add the "cleditor" to textarea to add CLeditor -->
                                {{ Form::textarea('descricao', $editarConstruido->descricao, array('class' => 'cleditor'))}}
                            </div>

                            <input type="hidden" name="categorias_id" value="{{ $editarConstruido->categorias_id }}">

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

            <!-- Acompanhe a Obra -->
            <div class="col-md-4">

                <div class="widget">
                    <div class="widget-head">
                        <div class="pull-left">Acompanhe a Obra</div>
                        <div class="widget-icons pull-right">
                            <a href="#" class="wminimize"><i class="fa fa-chevron-up"></i></a>
                        </div>  
                        <div class="clearfix"></div>
                    </div>
                    <div class="widget-content">
                        <div class="padd">

                            {{ Form::open(array('url' => 'admin/empreendimento/editar-obras', 'role' => 'form')) }}
                            <!--<form>-->

                            {{ Form::hidden('id', isset($editarObra->id) ? $editarObra->id : '')}}

                            <h6>Projetos</h6>
                            {{ Form::text('projetos', $editarObra->projetos, array('class' => 'form-control col-lg-12'))}}

                            <h6>Serviços Inicias</h6>
                            {{ Form::text('servicos_inicias', $editarObra->servicos_inicias, array('class' => 'form-control col-lg-12'))}}

                            <h6>Fundações </h6>
                            {{ Form::text('fundacoes', $editarObra->fundacoes, array('class' => 'form-control col-lg-12'))}}

                            <h6>Estrutura</h6>
                            {{ Form::text('estrutura', $editarObra->estrutura, array('class' => 'form-control col-lg-12'))}}

                            <h6>Alvenaria </h6>
                            {{ Form::text('alvenaria', $editarObra->alvenaria, array('class' => 'form-control col-lg-12'))}}

                            <h6>Instalações Elétricas</h6>
                            {{ Form::text('instalacoe_eletricas', $editarObra->instalacoe_eletricas, array('class' => 'form-control col-lg-12'))}}

                            <h6>Instalações Hidrossanitárias</h6>
                            {{ Form::text('instalacoes_hidrossanitarias', $editarObra->instalacoes_hidrossanitarias, array('class' => 'form-control col-lg-12'))}}

                            <h6>Pavimentação </h6>
                            {{ Form::text('pavimentacao', $editarObra->pavimentacao, array('class' => 'form-control col-lg-12'))}}

                            <h6>Revestimentos </h6>
                            {{ Form::text('revestimentos', $editarObra->revestimentos, array('class' => 'form-control col-lg-12'))}}

                            <h6>Cobertura e forros</h6>
                            {{ Form::text('cobertura_e_forros', $editarObra->cobertura_e_forros, array('class' => 'form-control col-lg-12'))}}

                            <h6>Esquadrias </h6>
                            {{ Form::text('esquadrias', $editarObra->esquadrias, array('class' => 'form-control col-lg-12'))}}

                            <h6>Pintura </h6>
                            {{ Form::text('pintura', $editarObra->pintura, array('class' => 'form-control col-lg-12'))}}

                            <h6>Acabamento </h6>
                            {{ Form::text('acabamento', $editarObra->acabamento, array('class' => 'form-control col-lg-12'))}}
                            
                            <h6>Andamento Geral da Obra </h6>
                            {{ Form::text('andamento_geral_da_obra', $editarObra->andamento_geral_da_obra, array('class' => 'form-control col-lg-12'))}}

                            {{ Form::hidden('categorias_id', $editarObra->categorias_id, array('class' => 'form-control col-lg-12'))}}

                            <hr />
                            <div class="buttons">
                                <button class="btn btn-primary">Save</button> 
                            </div>

                            </form>

                        </div>
                    </div>
                </div>  

            </div>

        </div>

    </div>

</div>

</div>

@stop