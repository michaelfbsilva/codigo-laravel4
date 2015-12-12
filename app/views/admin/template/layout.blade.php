<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- Title and other stuffs -->
        <title>Painel - Administrador</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="">

        {{HTML::style('assets/style/bootstrap.css')}}
        {{HTML::style('assets/style/font-awesome.css')}}
        {{HTML::style('assets/style/style/jquery-ui-1.9.2.custom.min.css')}}
        {{HTML::style('assets/style/style.css')}}
        {{HTML::style('assets/style/prettyPhoto.css')}}

        {{HTML::style('assets/style/bootstrap-datetimepicker.min.css')}} <!-- CLEditor -->
        {{HTML::style('assets/style/jquery.cleditor.css')}} <!-- CLEditor -->
        {{HTML::style('assets/style/uniform.default.html')}} <!-- Uniform -->
        {{HTML::style('assets/style/daterangepicker-bs3.css')}} <!-- Uniform -->
        {{HTML::style('assets/style/bootstrap-switch.css')}} <!-- Bootstrap toggle -->

        {{HTML::style('assets/style/widgets.css')}}
        {{HTML::style('assets/style/jquery.gritter.css')}}
        {{HTML::style('assets/style/jquery.easy-pie-chart.css')}}

        {{HTML::style('assets/style/basic.css')}}
        {{HTML::style('assets/style/dropzone.css')}}
        {{HTML::style('http://cdnjs.cloudflare.com/ajax/libs/dropzone/3.8.4/css/dropzone.css')}}
        <!--{{HTML::style('assets/style/uploadifive.css')}}-->
        
        <link rel="shortcut icon" href="{{ asset('assets_site/images/favicon.png') }}">
        
        <!-- HTML5 Support for IE -->
        <!--[if lt IE 9]>
        {{HTML::script('assets/js/html5shim.js')}}
        <![endif]-->

    </head>
    <body>
        <header>
            <div class="navbar navbar-fixed-top bs-docs-nav" role="banner">

                <div class="container">
                    <!-- Menu button for smallar screens -->
                    <div class="navbar-header">
                        <button class="navbar-toggle btn-navbar" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse"><span>Menu</span></button>
                        <a href="#" class="pull-left menubutton hidden-xs"><i class="fa fa-bars"></i></a>
                        <!-- Site name for smallar screens -->
                        <a href="index.html" class="navbar-brand">Admin<span class="bold">Pro</span></a>
                    </div>

                    <!-- Navigation starts -->
                    <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">         

                        <!-- Links -->
                        <ul class="nav navbar-nav pull-right">
                            <li class="dropdown pull-right user-data">            
                                <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                    <img src="{{ $url = asset('assets/img/user1.png') }}"> 
                                    {{ Auth::user()->name }} <b class="caret"></b>              
                                </a>

                                <!-- Dropdown menu -->
                                <ul class="dropdown-menu">
                                    <!--<li><a href="#"><i class="fa fa-user"></i> Perfil </a></li>-->
                                    <!--<li><a href="#"><i class="fa fa-cogs"></i> Configurações </a></li>-->
                                    <li><a href="{{ URL::to('admin/logout') }}"><i class="fa fa-key"></i> Deslogar </a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>


                </div>

        </header>

        <div class="content">
            <!-- Sidebar -->
            <div class="sidebar">
                <div class="sidebar-dropdown"><a href="#">Navigation</a></div>

                <!-- Search form -->
<!--                <form class="navbar-form" role="search">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Buscar">
                        <button class="btn search-button" type="submit"><i class="fa fa-search"></i></button>
                    </div>
                </form>-->
                <!--- Sidebar navigation -->
                <!-- If the main navigation has sub navigation, then add the class "has_sub" to "li" of main navigation. -->
                
                @if ( Auth::user()->user_level === 'funcionario' )
                <ul id="nav">
                    <!-- Main menu with font awesome icon -->
                    <li><a href="{{ URL::to('admin/painel') }}" class="open"><i class="fa fa-home"></i> <span>Princiapl</span></a></li>
                    <li class="has_sub"><a href="#"><i class="fa fa-folder"></i> <span>Empreendimentos</span> <span class="pull-right"><i class="fa fa-chevron-left"></i></span></a>
                        <ul>
                            <li><a href="{{ URL::to('admin/empreendimento') }}"><i class="fa fa-edit"></i> Criar Empreendimento</a></li>
                            <li><a href="{{ URL::to('admin/empreendimento/listar-empreendimento') }}">Listar Empreendimento</a></li>
                            
                            @foreach( Categoria::all() as $empreendimentos)
                            <li class="has_sub"><a href=""> <span>{{ $empreendimentos->name }}</span> <span class="pull-right"><i class="fa fa-chevron-left"></i></span></a>
                                <ul>
                                    <li><a href="{{ URL::to('admin/empreendimento/editar-dados-gerais/' . $empreendimentos->id ) }}"> Dados gerais</a></li>
                                    <li><a href="{{ URL::to('admin/empreendimento/editar-acompanhe-obra/' . $empreendimentos->id ) }}"> Acompanhe a obra</a></li>
                                    <li><a href="{{ URL::to('admin/empreendimento/editar-galeria-de-fotos/' . $empreendimentos->id ) }}"> Galeria de fotos</a></li>
                                </ul>
                            </li>
                            @endforeach
                        </ul>
                    </li>
                    <li><a href="{{ URL::to('admin/quemsomos') }}"><i class="fa fa-list-alt"></i> <span>Quem Somos</span></a></li>
                    <li><a href="{{ URL::to('admin/slide') }}"><i class="fa fa-list-alt"></i> <span>Slide</span></a></li>
                    <li><a href="{{ URL::to('admin/arquivos') }}"><i class="fa fa-list-alt"></i> <span>Arquivos</span></a></li>
                    <!--<li><a href="{{ URL::to('admin/slide') }}"><i class="fa fa-list-alt"></i> <span>Configurações</span></a></li>-->

                    <li class="has_sub"><a href="#"><i class="fa fa-folder"></i> <span>Usuários</span> <span class="pull-right"><i class="fa fa-chevron-left"></i></span></a>
                        <ul>                           
                            <li><a href="{{ URL::to('admin/funcionarios/') }}">Funcionários</a></li>
                            <li><a href="{{ URL::to('admin/corretores/') }}">Corretores</a></li>
                        </ul>
                    </li>
                </ul>
                @else
                <ul id="nav">
                    <!-- Main menu with font awesome icon -->
                    <!--<li><a href="index.html" class="open"><i class="fa fa-home"></i> <span>Princiapl</span></a></li>-->
                    <li><a href="{{ URL::to('admin/arquivosCorretor') }}"><i class="fa fa-list-alt"></i> <span>Arquivos</span></a></li>
                </ul>
                @endif
                
            </div>
            <!-- Sidebar ends -->

            <!-- Main bar -->
            <div class="mainbar">

                @yield('content')

            </div>

        </div>

        <!-- Footer starts -->
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <!-- Copyright info -->
                        <p class="copy">Copyright &copy; 2014 | <a href="#">AdminPRO</a> </p>
                    </div>
                </div>
            </div>
        </footer> 
        {{HTML::script('assets/js/dropzone.js')}}
        {{HTML::script('assets/js/dropzone-amd-module.js')}}
        {{HTML::script('http://cdnjs.cloudflare.com/ajax/libs/dropzone/3.8.4/dropzone-amd-module.min.js')}}

        <!--{{HTML::script('assets/js/jquery.uploadifive.js')}}-->

        <!-- JS -->

        {{HTML::script('assets/js/jquery.js')}}
        {{HTML::script('assets/js/bootstrap.js')}}
        {{HTML::script('assets/js/jquery-ui-1.9.2.custom.min.js')}}
        {{HTML::script('assets/js/fullcalendar.min.js')}}
        {{HTML::script('assets/js/jquery.rateit.min.js')}}
        {{HTML::script('assets/js/jquery.prettyPhoto.js')}}

        <!-- jQuery Flot -->
        {{HTML::script('assets/js/excanvas.min.js')}}
        {{HTML::script('assets/js/jquery.flot.js')}}
        {{HTML::script('assets/js/jquery.flot.resize.js')}}
        {{HTML::script('assets/js/jquery.flot.pie.js')}}
        {{HTML::script('assets/js/jquery.flot.stack.js')}}

        <!-- jQuery Notification - Noty -->
        {{HTML::script('assets/js/jquery.noty.js')}}
        {{HTML::script('assets/js/themes/default.js')}}
        {{HTML::script('assets/js/layouts/bottom.js')}}
        {{HTML::script('assets/js/layouts/topRight.js')}}
        {{HTML::script('assets/js/layouts/top.js')}}


        {{HTML::script('assets/js/languages/jquery.validationEngine-en.js')}}
        {{HTML::script('assets/js/jquery.validationEngine.js')}}
        {{HTML::script('assets/js/sparklines.js')}}
        {{HTML::script('assets/js/jquery.cleditor.min.js')}}
        {{HTML::script('assets/js/bootstrap-datetimepicker.min.js')}}
        {{HTML::script('assets/js/jquery.uniform.min.html')}}
        {{HTML::script('assets/js/jquery.slimscroll.min.js')}}
        {{HTML::script('assets/js/bootstrap-switch.min.js')}}
        {{HTML::script('assets/js/filter.js')}}
        {{HTML::script('assets/js/custom.js')}}
        {{HTML::script('assets/js/charts.js')}}
        {{HTML::script('assets/js/jquery.easypiechart.min.js')}}
        
        

    </body>
</html>