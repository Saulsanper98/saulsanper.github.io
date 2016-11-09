<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1">
        <title>Noticias</title>

        <!-- Bootstrap CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <link href="css/custom.css" rel="stylesheet">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <header>                        
            <div class="container">
                <nav class="navbar navbar-default navbar-fixed-top navbar-inverted" role="navigation">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="?p=home">Asaya News </a>
                        
                    </div>
                
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse navbar-ex1-collapse">
                        <ul class="nav navbar-nav">
                            <li class="<?php echo $content == 'sport' ? 'active' : ''; ?>"><a href="?p=sport">N.Deportivas</a></li>
                            <li class="<?php echo $content == 'poli' ? 'active' : ''; ?>"><a href="?p=poli">N.Políticas</a></li>
                            <li class="<?php echo $content == 'social' ? 'active' : ''; ?>"><a href="?p=social">E.Sociales</a></li>
                            <li class="<?php echo $content == 'music' ? 'active' : ''; ?>"><a href="?p=music">Musica</a></li>
                        </ul>                    
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="#">Contacto</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Otros <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="../ACT2/" target="_blank">Actividad 1</a></li>
                                    <li><a href="../ACT2/" target="_blank">Actividad 2</a></li>
                                    <li><a href="../ACT3/" target="_blank">Actividad 3</a></li>
                                    <li><a href="../ACT4/" target="_blank">Actividad 4</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </nav>
            </div>
        </header>