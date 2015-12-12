@section('content')

<!-- Page heading -->
<div class="page-head">
    <h2 class="pull-left">Arquivos</h2>

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
                        <div class="pull-left">Cadastrar arquivos</div>
                        <div class="widget-icons pull-right">
                            <a href="#" class="wminimize"><i class="fa fa-chevron-up"></i></a>
                        </div>  
                        <div class="clearfix"></div>
                    </div>
                    <div class="widget-content">
                        <div class="padd">  
                            
                            {{ Form::open(array('url' => 'admin/arquivos/criar-arquivo', 'files' => true, 'method' => 'post')) }}
                            
                            <h6>Nome</h6>
                            <input type="text" name="nome" class="form-control"/>
                            
                            <h6>Empreendimento</h6>
                            <select name="empreendimento" class="form-control">
                                @foreach( Categoria::all() as $empreendimentos)
                                    <option value="{{ $empreendimentos->name }}">{{ $empreendimentos->name }}</option>
                                @endforeach
                            </select>
                            
                            <h6>Arquivos</h6>
                            <input type="file" name="arquivos" class="form-control">

                            <div class="clearfix"></div>

                            <hr />
                            <div class="buttons">
                                <button class="btn btn-primary">Cadastrar</button> 
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
                          <th>Empreendimento</th>
                          <th>Arquivo</th>
                          <th style=" width: 73px;">Controle</th>
                        </tr>
                      </thead>
                      <tbody>
                          @foreach( $arquivos as $arquivo )
                        <tr>
                          <td>{{ $arquivo->nome }}</td>
                          <td>{{ $arquivo->empreendimento }}</td>
                          <td><a href="{{ url('') }}/{{ $arquivo->arquivos }}">Baixar Arquivo</a></td>
                          <td>
                            {{ Form::open(array('url' => 'admin/arquivos/deletar-arquivos/' .  $arquivo->id )) }}
                            {{ Form::hidden('_method', 'DELETE') }}
                            {{ Form::hidden('arquivos', $arquivo->arquivos)}}
                            <!--<input type="hidden" name="arquivos" value="/{{ $arquivo->arquivos }}">-->
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