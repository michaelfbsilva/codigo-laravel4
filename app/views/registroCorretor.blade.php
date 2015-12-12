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


                        <div class="widget wred">
                            <div class="widget-head">
                                <i class="icon-lock"></i> Cadastro de Corretor 
                            </div>
                            <div class="widget-content">
                                <div class="padd">

                                    {{ Form::open(array('url' => 'registro/cadastro-corretor/', 'class' => 'form-horizontal', 'method' => 'post')) }}
                                    <!-- Registration form starts -->
                                    <!-- Name -->
                                    <div class="form-group">
                                        <label class="control-label col-lg-3" for="name">Nome</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="name">
                                        </div>
                                    </div>   
                                    <!-- Creci -->
                                    <div class="form-group">
                                        <label class="control-label col-lg-3" for="creci">Creci</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="creci">
                                        </div>
                                    </div>  
                                    <!-- Email -->
                                    <div class="form-group">
                                        <label class="control-label col-lg-3" for="email">Email</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="email">
                                        </div>
                                    </div>                                          
                                    <!-- Telefone -->
                                    <div class="form-group">
                                        <label class="control-label col-lg-3" for="telefone">Telefone</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="telefone">
                                        </div>
                                    </div>
                                    <!-- Password -->
                                    <div class="form-group">
                                        <label class="control-label col-lg-3" for="email">Password</label>
                                        <div class="col-lg-9">
                                            <input type="password" class="form-control" name="password">
                                        </div>
                                    </div>

                                    <input type="hidden" class="form-control" name="user_level" value="corretor">

                                    <!-- Accept box and button s-->
                                    <div class="form-group">
                                        <div class="col-lg-9 col-lg-offset-3">
                                            <br />
                                            <button type="submit" class="btn btn-success">Cadastrar</button>
                                        </div>
                                    </div>
                                    </form>

                                </div>
                            </div>
                        </div>  

                        </form>

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