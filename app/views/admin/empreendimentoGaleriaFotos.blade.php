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


                <!-- Galeria de Fotos -->
                <div class="widget">
                    <div class="widget-head">
                        <div class="pull-left">Upload de fotos</div>
                        <div class="widget-icons pull-right">
                            <a href="#" class="wminimize"><i class="fa fa-chevron-up"></i></a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="widget-content">
                        <div class="padd">

                            {{ Form::open(array('url' => 'admin/empreendimento/galeria', 'role' => 'form', 'id' => 'geleria', 'files' => 'true')) }}


                            <input type="hidden" name="categorias_id" value="{{ $editarCategoria->categorias_id }}">
                            <label for="mes">Mês</label>
                            <select name="mes" id="mes">
                                <option value="1" <?php if(date('m') == 1){?> selected="selected" <?php }?>>Janeiro</option>
                                <option value="2" <?php if(date('m') == 2){?> selected="selected" <?php }?>>Fevereiro</option>
                                <option value="3" <?php if(date('m') == 3){?> selected="selected" <?php }?>>Março</option>
                                <option value="4" <?php if(date('m') == 4){?> selected="selected" <?php }?>>Abril</option>
                                <option value="5" <?php if(date('m') == 5){?> selected="selected" <?php }?>>Maio</option>
                                <option value="6" <?php if(date('m') == 6){?> selected="selected" <?php }?>>Junho</option>
                                <option value="7" <?php if(date('m') == 7){?> selected="selected" <?php }?>>Julho</option>
                                <option value="8" <?php if(date('m') == 8){?> selected="selected" <?php }?>>Agosto</option>
                                <option value="9" <?php if(date('m') == 9){?> selected="selected" <?php }?>>Setembro</option>
                                <option value="10" <?php if(date('m') == 10){?> selected="selected" <?php }?>>Outubro</option>
                                <option value="11" <?php if(date('m') == 11){?> selected="selected" <?php }?>>Novembro</option>
                                <option value="12" <?php if(date('m') == 12){?> selected="selected" <?php }?>>Dezembro</option>
                            </select>   <br>
                            <label for="ano">Ano</label>
                            <select name="ano" id="ano">
                                <option value="2011" <?php if(date('Y') == 2011){?> selected="selected" <?php }?>>2011</option>
                                <option value="2012" <?php if(date('Y') == 2012){?> selected="selected" <?php }?>>2012</option>
                                <option value="2013" <?php if(date('Y') == 2013){?> selected="selected" <?php }?>>2013</option>
                                <option value="2014" <?php if(date('Y') == 2014){?> selected="selected" <?php }?>>2014</option>
                                <option value="2015" <?php if(date('Y') == 2015){?> selected="selected" <?php }?>>2015</option>
                                <option value="2016" <?php if(date('Y') == 2016){?> selected="selected" <?php }?>>2016</option>
                                <option value="2017" <?php if(date('Y') == 2017){?> selected="selected" <?php }?>>2017</option>
                                <option value="2018" <?php if(date('Y') == 2018){?> selected="selected" <?php }?>>2018</option>
                                <option value="2019" <?php if(date('Y') == 2019){?> selected="selected" <?php }?>>2019</option>
                                <option value="2020" <?php if(date('Y') == 2020){?> selected="selected" <?php }?>>2020</option>
                            </select> <br>

                            <label for="foto" style=" float: left;">Foto</label>
                            <input name="file[]" type="file" class="form-control" multiple  style=" width: 500px; "/>

                            <div class="clearfix"></div>

                            <hr />
                            <div class="buttons">
                                <button class="btn btn-primary">Save</button>
                            </div>

                            </form>

                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>

                <h4>Galeria de fotos</h4>
                <div class="galeria" >
                @foreach( $mesEano as $da)

                    <!-- <a href="#{{ $da->mes }}{{ $da->ano }}" data-order="{{ $da->ano }}-{{ $da->mes }}" rel="{{ $da->mes }}/{{ $da->ano }}/{{ $editarCategoria->categorias_id }}" style="margin-right: 10px;" class="btn btn-info requerAjax" data-toggle="modal">{{ $da->mes }}/{{ $da->ano }}</a> -->
                    <a href="#{{ $da->mes }}" class="btn btn-info requerAjax"  data-order="{{ $da->mes }}" rel="{{ $da->mes }}/{{ $editarCategoria->categorias_id }}" style="margin-right: 10px;" class="btn btn-info get-gallery" data-toggle="modal">{{ $da->mes }}</a>

                    <div id="{{ $da->mes }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    <h4 class="modal-title">{{ $da->mes }}</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="gallery">
                                        <img src="{{ $url = asset('assets/img/carregando.gif') }}" alt='carregando' class="carregando" style="display: none;">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal" aria-hidden="true">Fechar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
               </div>
            </div>
        </div>
    </div>

</div>

</div>

@stop