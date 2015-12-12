@extends('site.template.layout')


@section('content')


<div class="row">
    <div class="span12">

        <h3 class="headline">
            <span>Empreendimentos</span>
        </h3>

    </div><!-- end .span12 -->
</div><!-- end .row -->
@foreach( $editarCategoria as $empreendimentoCapa)
<div class="row">

    
    <div class="span6">

        <div class="icon-box-1">

            <i class="ifc-copy"></i>

            <div class="icon-box-content">

                <h2>
                    <a href="{{ url('/empreendimento') }}/{{ $empreendimentoCapa->categorias_id }}">{{ $empreendimentoCapa->name }}</a>
                </h2>

            </div><!-- end .icon-box-content -->

        </div><!-- end .icon-box-1 -->

        <p class="hidden-tablet">

            {{ str_limit($empreendimentoCapa->descricao, $limit = 590, $end = '...') }}
        </p>

        <p class="text-right">
            <a class="btn btn-green-dark" href="{{ url('/empreendimento') }}/{{ $empreendimentoCapa->categorias_id }}">ler mais</a>
        </p>

    </div><!-- end .span6 -->  


    <div class="span6">

        <div class="portfolio-item">

            <div class="portfolio-item-preview">
                
                <a href="{{ url('/empreendimento') }}/{{ $empreendimentoCapa->categorias_id }}">
                    <div class="areaFoto">
                        <img src="{{ $url = asset($empreendimentoCapa->imagem) }}" alt="" class="foto">
                    </div>
                </a>
                
            </div><!-- end .portfolio-item-preview -->

        </div><!-- end .portfolio-item -->

    </div><!-- end .span6 -->

</div><!-- end .row -->
@endforeach
<br><br>

<div id="ultimosVideos" class="row">
    <div class="span6" style=" position: relative;">

        <h3 class="headline">
            <span>Últimos Vídeos</span>
        </h3>

        @foreach( $editarCategoria as $empreendimentoVideos)
        <div class="span3" >

            <div class="portfolio-item ">
                <h1 style=" font-size: 16px; margin: 0; padding: 0; position: absolute; top: -53px; ">
                    {{ $empreendimentoVideos->name }}
                </h1>
                <div class="portfolio-item-preview  video-container">            

                    {{ $empreendimentoVideos->video }}

                </div><!-- end .portfolio-item-preview -->

            </div><!-- end .portfolio-item -->

        </div>
        <div class="divizor"></div>
        @endforeach 

    </div><!-- end .span12 -->




    <div class="span6">

        <h3 class="headline">
            <span>Instagram</span>
        </h3>

        <div class="span2">

            <div class="portfolio-item">

                <div class="portfolio-item-preview">            

                    <a href="#">
                        <img src="{{ $url = asset('assets_site/images/220x217-1.png') }}" alt="">
                    </a>

                </div><!-- end .portfolio-item-preview -->

            </div><!-- end .portfolio-item -->

        </div>

        <div class="span2" style=" ">

            <div class="portfolio-item">

                <div class="portfolio-item-preview">            

                    <a href="#">
                        <img src="{{ $url = asset('assets_site/images/220x217-1.png') }}" alt="">
                    </a>

                </div><!-- end .portfolio-item-preview -->

            </div><!-- end .portfolio-item -->

        </div> 

        <div class="span2" style=" ">

            <div class="portfolio-item">

                <div class="portfolio-item-preview">            

                    <a href="#">
                        <img src="{{ $url = asset('assets_site/images/220x217-1.png') }}" alt="">
                    </a>

                </div><!-- end .portfolio-item-preview -->

            </div><!-- end .portfolio-item -->

        </div>

        <div class="span2" style=" ">

            <div class="portfolio-item">

                <div class="portfolio-item-preview">            

                    <a href="#">
                        <img src="{{ $url = asset('assets_site/images/220x217-1.png') }}" alt="">
                    </a>

                </div><!-- end .portfolio-item-preview -->

            </div><!-- end .portfolio-item -->

        </div>

        <div class="span2" style=" ">

            <div class="portfolio-item">

                <div class="portfolio-item-preview">            

                    <a href="#">
                        <img src="{{ $url = asset('assets_site/images/220x217-1.png') }}" alt="">
                    </a>

                </div><!-- end .portfolio-item-preview -->

            </div><!-- end .portfolio-item -->

        </div>

        <div class="span2" style=" ">

            <div class="portfolio-item">

                <div class="portfolio-item-preview">            

                    <a href="#">
                        <img src="{{ $url = asset('assets_site/images/220x217-1.png') }}" alt="">
                    </a>

                </div><!-- end .portfolio-item-preview -->

            </div><!-- end .portfolio-item -->

        </div>

        <div class="span2" style=" ">

            <div class="portfolio-item">

                <div class="portfolio-item-preview">            

                    <a href="#">
                        <img src="{{ $url = asset('assets_site/images/220x217-1.png') }}" alt="">
                    </a>

                </div><!-- end .portfolio-item-preview -->

            </div><!-- end .portfolio-item -->

        </div>

        <div class="span2" style=" ">

            <div class="portfolio-item">

                <div class="portfolio-item-preview">            

                    <a href="#">
                        <img src="{{ $url = asset('assets_site/images/220x217-1.png') }}" alt="">
                    </a>

                </div><!-- end .portfolio-item-preview -->

            </div><!-- end .portfolio-item -->

        </div>




    </div><!-- end .span12 -->
</div><!-- end .row -->


<br><br>

<div class="row">
    <div class="span12">

        <h3 class="headline">
            <span>Valores e Visão</span>
        </h3>

    </div><!-- end .span12 -->
</div><!-- end .row -->

<div class="row">
    <div class="span8">

        <div class="icon-box-1">

            <i class="ifc-user_male"></i>

            <div class="icon-box-content">

                <h3>
                    <strong>Compromisso</strong>
                </h3>

                <p>Ser reconhecida pelos nossos clientes e pela sociedade como uma empresa referência pela 
                    excelência dos serviços prestados, pelo cumprimento dos compromissos. </p>

            </div><!-- end .icon-box-content -->

        </div><!-- end .icon-box-1 -->

        <div class="icon-box-1">

            <i class="ifc-upload_filled"></i>

            <div class="icon-box-content">

                <h3>
                    <strong>Qualidade</strong>
                </h3>

                <p>Executar obras com qualidade e segurança, visando à melhoria contínua e a satisfação dos
                    clientes, e nossos colaboradores.</p>

            </div><!-- end .icon-box-content -->

        </div><!-- end .icon-box-1 -->

        <div class="icon-box-1">

            <i class="ifc-unlock"></i>

            <div class="icon-box-content">

                <h3>
                    <strong>Privilégio</strong>
                </h3>

                <p>A PROEDI Construtora agradece aos seus clientes, por este privilégio de participar da
                    realização de seu sonho – SEU IMÓVEL PRÓPRIO”.</p>

            </div><!-- end .icon-box-content -->

        </div><!-- end .icon-box-1 -->

    </div><!-- end .span8 -->
    <div class="span4 text-right">

        <img class="responsive-img" src="{{ $url = asset('assets_site/images/300x300.png') }}" alt="" style=" margin-top: 50px;">

    </div><!-- end .span4 -->
</div><!-- end .row -->



@stop