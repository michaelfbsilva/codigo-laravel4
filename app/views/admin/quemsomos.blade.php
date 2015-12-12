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
                        <div class="pull-left">Quem somos</div>
                        <div class="clearfix"></div>
                    </div>

                    <div class="widget-content">
                        <div class="padd">

                            <div class="tabbable" style="margin-bottom: 18px;">

                                {{ Form::open(array('url' => 'admin/quemsomos/', 'class' => 'form-horizontal', 'role' => 'form')) }}

                                <input type="hidden" name="id" value="{{ $quemsomos->id }}">
                                <input type="hidden" value="">
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        {{ Form::textarea('descricao', isset($quemsomos->descricao) ? $quemsomos->descricao : Input::old('descricao'), array('class' => 'cleditor'))}}

                                    </div>
                                </div> 
                                
                                <hr />
                                <div class="form-group">
                                    <div class=" col-lg-9">
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