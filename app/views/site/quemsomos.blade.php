@extends('site.template.layoutInterna')


@section('content')

<div id="page-header">

    <div class="row">
        <div class="span12">

            <h2>Quem Somos</h2>

        </div><!-- end .span12 -->
    </div><!-- end .row -->

</div><!-- end #page-header -->

<div class="row">
    <div class="span8">
        
        {{ $quemsomos->descricao }}
        
    </div>
    <div class="span4">

        <div class="widget widget_text">

            <div class="textwidget">

                <h5><strong>Visão</strong></h5>

                <p>Ser reconhecida pelos nossos clientes e pela sociedade como uma empresa referência pela excelência dos serviços prestados, pelo cumprimento dos compromissos, promovendo a melhoria contínua na qualidade de vida.</p>

                <h5><strong>Valores</strong></h5>

                <p>
                    Foco no cliente<br>
                    Excelência na gestão<br>
                    Qualidade dos serviços prestados<br>
                    Ética<br>
                    Segurança<br>
                    Aprendizado Contínuo<br>
                    Comprometimento<br>
                    Trabalho em parceria<br>
                    Equilíbrio econômico financeiro<br>
                    Transparência<br>
                </p>

                <h5><strong>Política da Qualidade</strong></h5>

                <p>Executar obras com qualidade e segurança, visando à melhoria contínua e a satisfação dos clientes, e nossos colaboradores.</p>

            </div>

        </div><!-- end .widget_text -->


    </div><!-- end .span3 -->
</div><!-- end .row -->
</div><!-- end #content -->

@stop