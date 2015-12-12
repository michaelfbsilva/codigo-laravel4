@extends('admin.template.layout')


@section('content')

<!-- Page heading -->
<div class="page-head">

    <h2 class="pull-left">Principal</h2>

    <div class="clearfix"></div>



</div>

<div class="matter">

    <div class="container">
        <div class="widget">

            <div class="widget-head">
                <div class="pull-left">Estatística </div>
                <div class="clearfix"></div>
            </div>    

            <div class="widget-content">
                <div class="padd">

                    <ul class="list-group">
                        @if ( Auth::user()->user_level === 'funcionario' )
                        <li class="list-group-item">
                            <span class="badge">{{$contarEmpreendimento}}</span>
                            Empreendimento
                        </li>
                        <li class="list-group-item">
                            <span class="badge">{{$contarCorretores}}</span>
                            Corretores
                        </li>
                        <li class="list-group-item">
                            <span class="badge">{{$contarFuncionarios}}</span>
                            Funcionatios
                        </li>
                        <li class="list-group-item">
                            <span class="badge">{{$contarArquivos}}</span>
                            Arquivos
                        </li>
                        @else
                        <li class="list-group-item">
                            <span class="badge">{{$contarArquivos}}</span>
                            Arquivos
                        </li>
                        @endif
                    </ul>

                </div>
            </div>

        </div>
    </div>
</div>


@stop