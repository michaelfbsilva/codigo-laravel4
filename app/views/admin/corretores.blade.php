@section('content')

<!-- Page heading -->
<div class="page-head">
    <h2 class="pull-left">Corretores</h2>

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
                        <div class="pull-left">Cadastro de usuario</div>
                        <div class="widget-icons pull-right">
                            <a href="#" class="wminimize"><i class="fa fa-chevron-up"></i></a>
                        </div>  
                        <div class="clearfix"></div>
                    </div>
                    <div class="widget-content">
                        <div class="padd">  
                            
                            {{ Form::open(array('url' => 'admin/corretores/cadastro-corretores', 'files' => true, 'method' => 'post')) }}
                            
                            <h6>Nome</h6>
                            <input type="text" name="name" class="form-control"/>
                            
                            <h6>Creci</h6>
                            <input type="text" name="creci" class="form-control">
                            
                            <h6>Email</h6>
                            <input type="text" name="email" class="form-control">
                            
                            <h6>Telefone</h6>
                            <input type="text" name="telefone" class="form-control">
                            
                            <h6>Senha</h6>
                            <input type="password" name="password" class="form-control">
                            
                            <input type="hidden" name="user_level" value="corretor">

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
                          <th>Email</th>
                          <th>Creci</th>
                          <th>Telefone</th>
                          <th style=" width: 73px;">Controle</th>
                        </tr>
                      </thead>
                      <tbody>
                            @foreach( $corretores as $corretore )
                          <tr>
                            <td>{{ $corretore->name }}</td>
                            <td>{{ $corretore->email }}</td>
                            <td>{{ $corretore->creci }}</td>
                            <td>{{ $corretore->telefone }}</td>
                            <td>
                              {{ Form::open(array('url' => 'admin/corretores/deletar-corretores/' . $corretore->id  )) }}
                              {{ Form::hidden('_method', 'DELETE') }}
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