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
                        <div class="pull-left">Arquivos disponíveis</div>
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
                        </tr>
                      </thead>
                      <tbody>
                          @foreach( $arquivos as $arquivo )
                        <tr>
                          <td>{{ $arquivo->nome }}</td>
                          <td>{{ $arquivo->empreendimento }}</td>
                          <td><a href="{{ url('') }}/{{ $arquivo->arquivos }}">Baixar Arquivo</a></td>
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