@extends('site.template.layoutInterna')


@section('content')

<div id="page-header">

    <div class="row">
        <div class="span12">

            <h2>Contato</h2>

        </div><!-- end .span12 -->
    </div><!-- end .row -->

</div><!-- end #page-header -->

<div class="row">
    <div class="span3">

        <div class="icon-box-1">

            <i class="ifc-umbrella"></i>

            <div class="icon-box-content">

                <h3>Entre em Contato</h3>

            </div><!-- end .icon-box-content -->

        </div><!-- end .icon-box-1 -->

        <p>Para receber mais informações, preencha o formulário a baixo com seus dados de contato
            e com as dúvidas ou informações desejadas.</p>

        <address>

            Nosso atendimento funciona de segunda à sexta-feira,
            das <strong> 9h às 18h</strong>, e sábado e domingo, das <strong>9h às 17h </strong>.<br>
            <br>

            Phone: <br>(47) 3366-2518<br>(47) 8908-3540<br>
            Email: contato@proediconstrutora.com.br 
        </address>

    </div><!-- end .span3 -->
    <div class="span9">

        <h3>Envie sua Mensagem</h3>

        @if(Session::has('message'))
        <div class="alert">
            {{ Session::get('message') }}
        </div>
        @endif

        <br>

        {{ Form::open(array('action' => 'SiteContatoController@postContato', 'role' => 'form', 'class' => 'fixed', 'id' => 'contact-form')) }}
        <fieldset>

            <div id="formstatus"></div>

            <div class="row">
                <div class="span3">

                    <input id="name" type="text" name="nome" value="" placeholder="Nome">

                </div><!-- edd .span3 --> 
                <div class="span3">

                    <input id="email" type="text" name="email" value="" placeholder="E-mail">

                </div><!-- edd .span3 --> 
                <div class="span3">

                    <input id="telefone" type="text" name="telefone" value="" placeholder="Telefone">

                </div><!-- edd .span3 -->
                <div class="span3" style=" margin-left: 0;">

                    <select name="assunto" style=" color:#aaaaaa; font-size: 12px;">
                        <option value="">Selecione Assunto</option>
                        <option value="Atendimento">Atendimento</option>
                        <option value="Diretoria">Diretoria</option>
                        <option value="Agendar Visita">Agendar Visita</option>
                        <option value="Material de Venda">Material de Venda</option>
                        <option value="Recursos Humanos">Recursos Humanos</option>
                        <option value="Proposta / Orcamento">Proposta / Orçamento</option>
                        <option value="Outros Assuntos">Outros Assuntos</option>
                    </select>

                </div><!-- edd .span3 --> 
                <div class="span3" style=" margin-left: 18px;">

                    <select name="tipo" style=" color: #aaaaaa; font-size: 12px;">
                        <option value="">Selecione Tipo</option>
                        <option value="Duvida">Dúvida</option>
                        <option value="Elogio">Elogio</option>
                        <option value="Outros">Outros</option>
                        <option value="Reclamacao">Reclamação</option>
                        <option value="Sugestao">Sugestão</option>
                    </select>

                </div><!-- edd .span3 -->
            </div><!-- end .row -->

            <textarea class="span9" id="message" name="texto" rows="10" cols="25" placeholder="Menssagem"></textarea>

            <!--<input class="" id="submit" type="submit" value="Enviar">-->
            {{ Form::submit('Enviar', array('class' => 'btn btn-green-dark float-right')) }}

        </fieldset>
        {{ Form::close() }}

    </div><!-- end .span9 -->
</div><!-- end .row -->

<!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

</div><!-- end #content -->

@stop