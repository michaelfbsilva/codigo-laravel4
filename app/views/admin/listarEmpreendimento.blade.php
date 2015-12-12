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
                        <div class="pull-left">Listar Empreendimento</div>
                        <div class="clearfix"></div>
                    </div>

                    <div class="widget-content">

                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th style="width: 33px; text-align: center;">#</th>
                                    <th>Nome</th>
                                    <th style=" width: 93px; text-align: center;">Controle</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach( Categoria::all() as $empreendimentos)
                                <tr>
                                    <td style="text-align: center;">{{ $empreendimentos->id }}</td>
                                    <td>{{ isset($empreendimentos->name) ? $empreendimentos->name : '' }}</td>
                                    <td style="text-align: center;">

                                        {{ Form::open(array('url' => 'admin/empreendimento/deletar-empreendimento/' . $empreendimentos->id)) }}
                                        {{ Form::hidden('_method', 'DELETE') }}
                                        {{ Form::submit('Deletar', array('class' => 'btn btn-xs btn-success')) }}
                                        {{ Form::close() }}

                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                        <div class="widget-foot">

                            <div class="clearfix"></div> 

                        </div>

                    </div>


                </div>

            </div>

        </div>

    </div>

    @stop