@extends('site.template.layout')


@section('content')

<div id="page-header">

    <div class="row">
        <div class="span12">

            <h2>{{ $editarCategoria->name }}</h2>

        </div><!-- end .span12 -->
    </div><!-- end .row -->

</div><!-- end #page-header -->

<div class="row">
    <div class="span12">

        <h3 class="headline">
            <span>Andamento da Obra</span>
        </h3>

    </div><!-- end .span12 -->
</div><!-- end .row -->

<div class="row">
    <div class="span8">

        <div class="fixed">

            <div class="progress-bar-description">
                Projetos
                <span>{{ $editarObra->projetos }}%</span>
            </div>

            <div class="progress-bar">
                <span class="progress-bar-outer" data-width="{{ $editarObra->projetos }}">
                    <span class="progress-bar-inner"></span>
                </span>
            </div><!-- end .progress-bar -->

        </div>

        <div class="fixed">

            <div class="progress-bar-description">
                Serviços Inicias
                <span>{{ $editarObra->servicos_inicias }}%</span>
            </div>

            <div class="progress-bar">
                <span class="progress-bar-outer" data-width="{{ $editarObra->servicos_inicias }}" style="background-color:#e14d43;">
                    <span class="progress-bar-inner"></span>
                </span>
            </div><!-- end .progress-bar -->

        </div>

        <div class="fixed">

            <div class="progress-bar-description">
                Fundações
                <span>{{ $editarObra->fundacoes }}%</span>
            </div>

            <div class="progress-bar">
                <span class="progress-bar-outer" data-width="{{ $editarObra->fundacoes }}" style="background-color:#e14d43;">
                    <span class="progress-bar-inner"></span>
                </span>
            </div><!-- end .progress-bar -->

        </div>

        <div class="fixed">

            <div class="progress-bar-description">
                Estrutura
                <span>{{ $editarObra->estrutura }}%</span>
            </div>

            <div class="progress-bar">
                <span class="progress-bar-outer" data-width="{{ $editarObra->estrutura }}" style="background-color:#e14d43;">
                    <span class="progress-bar-inner"></span>
                </span>
            </div><!-- end .progress-bar -->

        </div>

        <div class="fixed">

            <div class="progress-bar-description">
                Alvenaria
                <span>{{ $editarObra->alvenaria }}%</span>
            </div>

            <div class="progress-bar">
                <span class="progress-bar-outer" data-width="{{ $editarObra->alvenaria }}" style="background-color:#e14d43;">
                    <span class="progress-bar-inner"></span>
                </span>
            </div><!-- end .progress-bar -->

        </div>
        <div class="fixed">

            <div class="progress-bar-description">
                Instalações Elétricas
                <span>{{ $editarObra->instalacoe_eletricas }}%</span>
            </div>

            <div class="progress-bar">
                <span class="progress-bar-outer" data-width="{{ $editarObra->instalacoe_eletricas }}" style="background-color:#e14d43;">
                    <span class="progress-bar-inner"></span>
                </span>
            </div><!-- end .progress-bar -->

        </div>
        <div class="fixed">

            <div class="progress-bar-description">
                Instalações Hidrossanitária
                <span>{{ $editarObra->instalacoes_hidrossanitarias }}%</span>
            </div>

            <div class="progress-bar">
                <span class="progress-bar-outer" data-width="{{ $editarObra->instalacoes_hidrossanitarias }}" style="background-color:#e14d43;">
                    <span class="progress-bar-inner"></span>
                </span>
            </div><!-- end .progress-bar -->

        </div>
        <div class="fixed">

            <div class="progress-bar-description">
                Pavimentação
                <span>{{ $editarObra->pavimentacao }}%</span>
            </div>

            <div class="progress-bar">
                <span class="progress-bar-outer" data-width="{{ $editarObra->pavimentacao }}" style="background-color:#e14d43;">
                    <span class="progress-bar-inner"></span>
                </span>
            </div><!-- end .progress-bar -->

        </div>
        <div class="fixed">

            <div class="progress-bar-description">
                Revestimentos
                <span>{{ $editarObra->revestimentos }}%</span>
            </div>

            <div class="progress-bar">
                <span class="progress-bar-outer" data-width="{{ $editarObra->revestimentos }}" style="background-color:#e14d43;">
                    <span class="progress-bar-inner"></span>
                </span>
            </div><!-- end .progress-bar -->

        </div>
        <div class="fixed">

            <div class="progress-bar-description">
                Cobertura e forros
                <span>{{ $editarObra->cobertura_e_forros }}%</span>
            </div>

            <div class="progress-bar">
                <span class="progress-bar-outer" data-width="{{ $editarObra->cobertura_e_forros }}" style="background-color:#e14d43;">
                    <span class="progress-bar-inner"></span>
                </span>
            </div><!-- end .progress-bar -->

        </div>
        <div class="fixed">

            <div class="progress-bar-description">
                Esquadrias
                <span>{{ $editarObra->esquadrias }}%</span>
            </div>

            <div class="progress-bar">
                <span class="progress-bar-outer" data-width="{{ $editarObra->esquadrias }}" style="background-color:#e14d43;">
                    <span class="progress-bar-inner"></span>
                </span>
            </div><!-- end .progress-bar -->

        </div>
        <div class="fixed">

            <div class="progress-bar-description">
                Pintura
                <span>{{ $editarObra->pintura }}%</span>
            </div>

            <div class="progress-bar">
                <span class="progress-bar-outer" data-width="{{ $editarObra->pintura }}" style="background-color:#e14d43;">
                    <span class="progress-bar-inner"></span>
                </span>
            </div><!-- end .progress-bar -->

        </div
        <div class="fixed">

            <div class="progress-bar-description">
                Acabamento
                <span>{{ $editarObra->acabamento }}%</span>
            </div>

            <div class="progress-bar">
                <span class="progress-bar-outer" data-width="{{ $editarObra->acabamento }}" style="background-color:#e14d43;">
                    <span class="progress-bar-inner"></span>
                </span>
            </div><!-- end .progress-bar -->

        </div>

<div class="span4" style=" ">

        <div class="pie-chart" data-percent="{{ $editarObra->andamento_geral_da_obra }}" data-barColor="#e14d43" data-trackColor="#354d58" data-lineWidth="10" data-barSize="250">

            <div class="pie-chart-percent">
                <span></span>
                %
            </div>

            <div class="pie-chart-description">Andamento Geral da Obra</div>

        </div><!-- end .pie-chart -->

    </div><!-- end .span4 -->

    </div><!-- end .span7 -->


</div><!-- end .row -->

<br>

<div class="row">
    <div class="span6">

        <h3 class="headline">
            <span>Construindo com qualidede</span>
        </h3>

      {{ $editarConstruindo->descricao }}

    </div><!-- end .span12 -->




        <div class="span6 galerias">

            <h3 class="headline">
                <span>Imagens</span>
            </h3>

        <ul class="imggallery" style="display:none;">
        </ul>

        @foreach( $mesEano as $da)
          <a href="#{{ $da->mes }}" data-order="{{ $da->mes }}" rel="{{ $da->mes }}/{{ $editarCategoria->categorias_id }}" class="btn btn-info get-gallery">{{ $da->mes }}</a>
        @endforeach


        </div><!-- end .span12 -->

    </div><!-- end .row -->

</div><!-- end .row -->



@stop