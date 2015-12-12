<!DOCTYPE html>
<html class="no-js">
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1,requiresActiveX=true">

        <title> PROEDI Construtora - SEJA BEM VINDO </title>

        <meta name="description" content="Localizada em Camboriú/SC - Fone: 47 3366-2518, A PROEDI Construtora apresenta o Edifício Residencial Dom Henrique, um lugar para quem busca qualidade de vida e segurança, sem abrir mão da comodidade. É um excelente empreendimento para investidores e para quem quer morar bem.">
        <meta name="keywords" content="construtora, incorporadora, santa cataria, proedi, venda, apartamentos, balneario camboriu, camboriu" />

        <!-- /// Favicons ////////  -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="apple-touch-icon-144-precomposed.png">
        <link rel="shortcut icon" href="{{ $url = asset('assets_site/images/favicon.png') }}">

        {{HTML::style('assets_site/js/magnificpopup/magnific-popup.css')}}
         <!-- /// jQuery ////////  -->
        {{HTML::script('assets_site/js/jquery.js')}}
        <!-- /// Magnific Popup ////////  -->
        {{HTML::script('assets_site/js/magnificpopup/jquery.magnific-popup.js')}}

        <!-- /// Template CSS ////////  -->
        {{HTML::style('assets_site/css/base.css')}}
        {{HTML::style('assets_site/css/grid.css')}}
        {{HTML::style('assets_site/css/elements.css')}}
        {{HTML::style('assets_site/css/layout.css')}}

        {{HTML::style('assets_site/css/wide.css')}}
        {{HTML::style('assets_site/js/revolutionslider/css/settings.css')}}
        {{HTML::style('assets_site/js/revolutionslider/css/custom.css')}}
        {{HTML::style('assets_site/js/bxslider/jquery.bxslider.css')}}
        {{HTML::style('assets/style/prettyPhoto.css')}}

        {{HTML::style('assets/style/dropzone.css')}}
        <!-- {{HTML::style('assets_site/js/bootstrap/css/bootstrap.min.css')}} -->
        {{HTML::style('http://cdnjs.cloudflare.com/ajax/libs/dropzone/3.8.4/css/dropzone.css')}}


        <!-- /// Google Fonts ////////  -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">

        <!-- /// IconFontCustom ////////  -->
        {{HTML::style('assets_site/css/iconfontcustom/iconfontcustom.css')}}

        <!-- /// FontAwesome Icons 4.0.3 ////////  -->
        {{HTML::style('assets_site/css/fontawesome/font-awesome.min.css')}}

        <!-- /// Cross-browser CSS3 animations ////////  -->
        {{HTML::style('assets_site/css/animate/animate.min.css')}}

        <!-- /// Modernizr ////////  -->
        {{HTML::script('assets_site/js/modernizr-2.6.2.min.js')}}

        <script type="text/javascript">

        </script>

        <style type="text/css">
        .galerias .foto {
            width: 95px;
            height: 63px;
            margin: 0 20px 30px 0;
            display: block;
            float: left;
        }

            .span3 {
                //margin: 0;
            }
            .divizor{
                width: 15px;
                height: 1px;
                float: left;
            } .videos {
                width: 210px;
                height: 160px;
                float: left;
                background: red;
            }
            .videos:after {
                margin-left: 20px;
            }

            .fotoInstagram {
                width: 105px;
                height: 95px;
                float: left;
                background:  red;
            }
            #footerQuemsomos p font {
                color: #d1d1d1;
            }
            .video-container {
                position: relative;
                padding-bottom: 56.25%;
                padding-top: 30px; height: 0; overflow: hidden;
            }

            .video-container iframe,
            .video-container object,
            .video-container embed {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
            }
        </style>

    </head>
    <body>

        <!--[if lte IE 8]>
        <p class="browser-update">
                You are using an <strong>outdated</strong> browser. Please
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">upgrade your browser</a>
            to improve your experience.
                </p>
    <![endif]-->

        <div id="wrap">

            <div id="header-top">

                <!-- /// HEADER TOP  //////////////////////////////////////////////////////////////////////////////////////////////////////// -->

                <div class="row">
                    <div class="span6" id="header-top-widget-area-1">

                        <div class="widget widget_text">

                            <div class="textwidget">
                                <p class="last">
                                    Contato: (47) 3366-2518 | 8908-3540, contato@proediconstrutora.com.br
                                </p>
                            </div><!-- end .text -->

                        </div><!-- end .widget_text -->

                    </div><!-- end .span6 -->
                    <div class="span6 text-right" id="header-top-widget-area-2">

                        <div class="widget ewf_widget_social_media">

                            <div class="fixed">

                                <a href="https://www.facebook.com/proediconstrutoraoficial?fref=ts" class="facebook-icon social-icon">
                                    <i class="fa fa-facebook"></i>
                                </a>
                                <a href="http://twitter.com/#!/PROEIDI_SC#" class="twitter-icon social-icon">
                                    <i class="fa fa-twitter"></i>
                                </a>
                                <a href="http://www.youtube.com/user/proediconstrutora?feature=mhee" class="youtube-icon social-icon">
                                    <i class="fa fa-youtube"></i>
                                </a>

                            </div>

                        </div><!-- end .widget_social_media -->

                    </div><!-- end .span6 -->
                </div><!-- end .row -->

                <!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

            </div><!-- end #header-top -->
            <div id="header">

                <!-- /// HEADER  //////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

                <div class="row">
                    <div class="span3">

                        <!-- // Logo // -->
                        <a href="{{ URL::to('/') }}" id="logo">
                            <img src="{{ $url = asset('assets_site/images/logo.png') }}" alt="" class="responsive-img">
                        </a>

                    </div><!-- end .span3 -->
                    <div class="span9">

                        <!-- // Mobile menu trigger // -->
                        <a href="#" id="mobile-menu-trigger">
                            <i class="fa fa-bars"></i>
                        </a>

                        <!-- // Menu // -->
                        <ul class="sf-menu" id="menu">
                            <li class="">
                                <a href="{{ URL::to('/') }}">Principal</a>
                            </li>
                            <li>
                                <a href="#">Empreendimentos</a>
                                <ul>
                                    @foreach( Categoria::all() as $empreendimentos )
                                    <li>
                                        <a href="{{ url('/empreendimento') }}/{{ $empreendimentos->id }}">{{ $empreendimentos->name}}</a>
                                    </li>
                                    @endforeach
                                </ul>
                            </li>
                            <li>
                                <a href="{{ URL::to('/acompanhe_a_obra') }}">Acompanhe a Obra</a>
                            </li>
                            <li>
                                <a href="{{ URL::to('/quemsomos') }}">Quem Somos</a>
                            </li>
                            <li>
                                <a href="{{ URL::to('/contato') }}">Fale Conosco</a>
                            </li>
                        </ul>

                    </div><!-- end .span9 -->
                </div><!-- end .row -->

                <!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

            </div><!-- end #header -->
            <div id="content">

                <!-- /// CONTENT  /////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

                @yield('content')

                <br><br><br>

                <div class="box" style="background-image:url({{ $url = asset('assets_site/images/bg3.jpg') }});">

                    <div class="row">
                        <div class="span12">

                            <br><br>

                            <h1 class="text-center last">Construindo <strong>sonhos</strong> para você e sua família </h1>

                            <br><br>

                        </div><!-- end .span12 -->
                    </div><!-- end .row -->


                </div><!-- end .box -->

                <!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

            </div><!-- end #content -->
            <div id="footer">

                <!-- /// FOOTER     ///////////////////////////////////////////////////////////////////////////////////////////////////////// -->

                <div id="footer-top">


                    <!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

                </div><!-- end #footer-top -->
                <div id="footer-middle">

                    <!-- /// FOOTER MIDDLE  //////////////////////////////////////////////////////////////////////////////////////////////// -->

                    <div id="footerQuemsomos" class="row">
                        <div class="span6" id="footer-middle-widget-area-1">

                            <div class="widget widget_text">

                                <h3 class="widget-title">
                                    <span>Quem Somos</span>
                                </h3>

                                <div class="textwidget">
                                    A PROEDI Construtora com sede na cidade de Camboriú, atua há vários anos no ramo da construção civil, vem oferecendo ao mercado imobiliário obras de qualidade e excelência na gestão.<br><br>

"É muito satisfatório saber que, de alguma forma, nós fazemos parte da vida de cada um de nossos clientes. A PROEDI Construtora agradece aos seus clientes, por este privilégio de participar da realização de seu sonho – SEU IMÓVEL PRÓPRIO”. E para nossos clientes investidores bons negócios imobiliários.
                                </div><!-- end .textwidget -->

                            </div><!-- end .widget_text -->

                        </div><!-- end .span3 -->
                        <div class="span3" id="footer-middle-widget-area-3">

                            <div class="widget ewf_widget_contact_info">

                                <h3 class="widget-title">
                                    <span>Contato</span>
                                </h3>

                                <address>
                                    <strong>PROEDI CONSTRUTORA</strong><br>
                                    Rua Jacarandá, 1320<br>
                                    Camboriú / SC.<br>
                                    <br>
                                    Fone: (047) 3366-2518<br>
                                    Fone: (047) 8908-3540<br>
                                    E-mail: contato@proediconstrutora.com.br
                                </address>

                            </div><!-- end .widget_contact_info -->

                        </div><!-- end .span3 -->
                        <div class="span3" id="footer-middle-widget-area-4">

                            <div class="widget ewf_widget_newsletter">

                                <h3 class="widget-title">
                                    <span>Newsletter</span>
                                </h3>

                                <p>Cadastre-se em nosso newsletter, para ficar ligado na Proedi. </p>

                                <form id="newsletter-subscribe-form" action="#">
                                    <fieldset>
                                        <input type="text" name="email" placeholder="email address...">
                                        <input type="submit" name="submit" value="Go!">
                                    </fieldset>
                                </form>

                            </div><!-- end .widget_newsletter -->

                        </div><!-- end .span3 -->
                    </div><!-- end .row -->

                    <!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

                </div><!-- end #footer-middle -->
                <div id="footer-bottom">

                    <!-- /// FOOTER BOTTOM  ///////////////////////////////////////////////////////////////////////////////////////////////////// -->

                    <div class="row">
                        <div class="span6" id="footer-bottom-widget-area-1">

                            <div class="widget widget_text">

                                <div class="textwidget">
                                    <p class="last">
                                        <img src="{{ $url = asset('assets_site/images/logo.png') }}" alt="" class="responsive-img" width="200">
                                        <span class="hidden-tablet hidden-phone">Copyright &copy; 2014 PROEDI Construtora.</span>
                                    </p>
                                </div><!-- end .textwidget -->

                            </div><!-- end .widget_text -->

                        </div><!-- end .span6 -->
                        <div class="span6 text-right" id="footer-bottom-widget-area-2">

                            <div class="widget ewf_widget_social_media">

                                <div class="fixed">

                                    <a href="http://www.facebook.com/profile.php?id=100002789726892&sk=wall" class="facebook-icon social-icon">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                    <a href="http://twitter.com/#!/PROEIDI_SC" class="twitter-icon social-icon">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                    <a href="http://www.youtube.com/user/proediconstrutora?feature=mhee" class="youtube-icon social-icon">
                                        <i class="fa fa-youtube"></i>
                                    </a>

                                </div>

                            </div><!-- end .widget_social_media -->

                        </div><!-- end .span6 -->
                    </div><!-- end .row -->

                    <!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

                </div><!-- end #footer-bottom -->

                <!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

            </div><!-- end #footer -->

        </div><!-- end #wrap -->
        <!-- /// ViewPort ////////  -->
        {{HTML::script('assets_site/js/viewport/jquery.viewport.js')}}

        {{HTML::script('assets/js/dropzone.js')}}
        {{HTML::script('assets/js/dropzone-amd-module.js')}}
        {{HTML::script('http://cdnjs.cloudflare.com/ajax/libs/dropzone/3.8.4/dropzone-amd-module.min.js')}}
        {{HTML::script('assets/js/jquery.prettyPhoto.js')}}

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

        {{HTML::script('assets/js/bootstrap.js')}}



        <!-- /// Easing ////////  -->
        {{HTML::script('assets_site/js/easing/jquery.easing.1.3.js')}}

        <!-- /// SimplePlaceholder ////////  -->
        {{HTML::script('assets_site/js/simpleplaceholder/jquery.simpleplaceholder.js')}}

        <!-- /// Fitvids ////////  -->
        {{HTML::script('assets_site/js/fitvids/jquery.fitvids.js')}}

        <!-- /// Superfish Menu ////////  -->
        {{HTML::script('assets_site/js/superfish/hoverIntent.js')}}
        {{HTML::script('assets_site/js/superfish/superfish.js')}}

        <!-- /// Revolution Slider ////////  -->
        {{HTML::script('assets_site/js/revolutionslider/js/jquery.themepunch.revolution.min.js')}}
        {{HTML::script('assets_site/js/revolutionslider/pluginsources/jquery.themepunch.plugins.min.js')}}

        <!-- /// bxSlider ////////  -->
        {{HTML::script('assets_site/js/bxslider/jquery.bxslider.min.js')}}

        <!-- /// custom fora ////////  -->
        {{HTML::script('assets/js/customFora.js')}}

        <!-- /// Parallax ////////  -->
        {{HTML::script('assets_site/js/parallax/jquery.parallax.min.js')}}

        <!-- /// EasyPieChart ////////  -->
        {{HTML::script('assets_site/js/easypiechart/jquery.easypiechart.min.js')}}

        <!-- /// Easy Tabs ////////  -->
        {{HTML::script('assets_site/js/easytabs/jquery.easytabs.min.js')}}

        <!-- /// Form validate ////////  -->
        <!--{{HTML::script('assets_site/js/jqueryvalidate/jquery.validate.min.js')}}-->

        <!-- /// Form submit ////////  -->
        {{HTML::script('assets_site/js/jqueryform/jquery.form.min.js')}}

        <!-- /// Custom JS ////////  -->
        {{HTML::script('assets_site/js/plugins.js')}}
        {{HTML::script('assets_site/js/scripts.js')}}


    </body>
</html>
