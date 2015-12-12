<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <!-- Title and other stuffs -->
        <title>Login - Proedi</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="">

        <!-- Stylesheets -->
        {{ HTML::style('assets/style/bootstrap.css')}}
        {{ HTML::style('assets/style/font-awesome.css')}}
        {{ HTML::style("assets/style/style.css"); }}
        {{ HTML::style("assets/style/bootstrap-responsive.html"); }}

        <!-- HTML5 Support for IE -->
        <!--[if lt IE 9]>
        {{ HTML::script("assets/js/html5shim.js"); }}
        <![endif]-->

        <!-- Favicon -->
        <link rel="shortcut icon" href="{{ asset('assets_site/images/favicon.png') }}">
    </head>

    <body>

        <!-- Form area -->
        <div class="admin-form">
            <div class="container">

                <div class="row">
                    <div class="col-md-12">
                        
                        @if (Session::has('message'))
                        <div class="alert alert-info">{{ Session::get('message') }}</div>
                        @endif
                        
                        <!-- Widget starts -->
                        <div class="widget">
                            <!-- Widget head -->
                            <div class="widget-head">
                                <i class="icon-lock"></i> Login 
                            </div>

                            <div class="widget-content">

                                @if ( count($errors) > 0)
                                Erros encontrados:<br />
                                <ul>
                                    @foreach ($errors->all() as $e)
                                    <li>{{ $e }}</li>
                                    @endforeach
                                </ul>
                                @endif


                                <div class="padd">
                                    <!-- Login form -->
                                    <form class="form-horizontal" method="post" action='{{ URL::to('login') }}'>
                                        <!-- Email -->
                                        <div class="form-group">
                                            <label class="control-label col-lg-3" for="inputEmail">Email</label>
                                            <div class="col-lg-9">
                                                <input type="text" class="form-control" id="inputEmail" name="email" placeholder="Email">
                                            </div>
                                        </div>
                                        <!-- Password -->
                                        <div class="form-group">
                                            <label class="control-label col-lg-3" for="inputPassword">Senha</label>
                                            <div class="col-lg-9">
                                                <input type="password" class="form-control" id="inputPassword" name="password" placeholder="Senha">
                                            </div>
                                        </div>
                                </div>
                            </div>
                            <div class="col-lg-9 col-lg-offset-3">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}" />          
                                <button type="submit" class="btn btn-danger" value="Login" >Logar</button>
                            </div>
                            <br>
                            <br>
                            <br>
                            <div class="claer" style="clear: both;"></div>

                        </div>
                        <br>
                        </form>

                    </div>
                </div>
            </div>  
        </div>
    </div>
</div> 
</div>



<!-- JS -->
{{ HTML::script("assets/js/jquery.js"); }}
{{ HTML::script("assets/js/bootstrap.js"); }}
</body>
</html>