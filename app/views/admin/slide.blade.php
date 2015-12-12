@extends('admin.template.layout')


@section('content')

<!-- Page heading -->
<div class="page-head">
    <h2 class="pull-left">SlideShow</h2>

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
                        <div class="pull-left">Upload</div>
                        <div class="widget-icons pull-right">
                            <a href="#" class="wminimize"><i class="fa fa-chevron-up"></i></a>
                        </div>  
                        <div class="clearfix"></div>
                    </div>
                    <div class="widget-content">
                        <div class="padd">  

                            {{ Form::open(array('url' => 'admin/slide/criar-slide', 'files' => true, 'method' => 'post')) }}

                            <h6>Slide</h6>
                            <input name="imagem" type="file" class="form-control"/>

                            <h6>Link</h6>
                            <input type="text" name="link" class="form-control">

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

                <!-- Galeria de Fotos -->
                <div class="widget">
                    <div class="widget-head">
                        <div class="pull-left">Usuarios</div>
                        <div class="widget-icons pull-right">
                            <a href="#" class="wminimize"><i class="fa fa-chevron-up"></i></a>
                        </div>  
                        <div class="clearfix"></div>
                    </div>
                    <div class="widget-content">
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th style=" width: 73px;">Controle</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach( $dadosSlide as $slide )
                                <tr>
                                    <td><img src="/{{ $slide->foto }}" height="30" ></td>
                                    <td>
                                        {{ Form::open(array('url' => 'admin/slide/deletar-slide/' . $slide->id )) }}
                                        {{ Form::hidden('_method', 'DELETE') }}
                                        {{ Form::hidden('foto', $slide->foto)}}
                                        {{ Form::submit('Deletar', array('class' => 'btn btn-xs btn-success')) }}
                                        {{ Form::close() }}
                                    </td>
                                </tr> 
                                @endforeach
                            </tbody>
                        </table>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

</div>

@stop