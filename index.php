<!DOCTYPE HTML>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <title>Bootstrap</title>
        <link rel="stylesheet" href="telas/css/bootstrap.css" />
        <link rel="stylesheet" href="telas/css/bootstrap-responsive.css" />
    </head>
    <body>
        <div class="navbar navbar-inverse">
            <div class="navbar-inner">
                <div class="container">

                    <!-- .btn-navbar é usado como alternador para conteúdo de barra de navegação colapsável -->
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>

                    <!-- Tenha certeza de deixar a marca se você quer que ela seja mostrada -->
                    <a class="brand" href="#">Nome do projeto</a>

                    <ul class="nav">
                        <li class="active">
                            <a href="#">Início</a>
                        </li>
                        <li><a href="#">Link</a></li>
                        <li><a href="#">Link</a></li>

                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown-menu" href="#">
                                Dropdown
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a tabindex="-1" href="#">Ação</a></li>
                                <li><a tabindex="-1" href="#">Outra ação</a></li>
                                <li><a tabindex="-1" href="#">Algo a mais aqui</a></li>
                                <li class="divider"></li>
                                <li><a tabindex="-1" href="#">Link separador</a></li>
                            </ul>
                        </li>
                    </ul>

                    <!-- Tudo que você queira escondido em 940px ou menos, coloque aqui -->
                    <div class="nav-collapse">
                        <!-- .nav, .navbar-search, .navbar-form, etc -->

                        <div class="navbar-form">
                            <form class="form-inline">
                                <input type="text" class="input-small" placeholder="Email">
                                <input type="password" class="input-small" placeholder="Senha">
                                <label class="checkbox">
                                    <input type="checkbox"> Lembre-se de mim
                                </label>
                                <button type="submit" class="btn">Entrar</button>
                            </form>
                        </div>


                    </div>

                </div>
            </div>
        </div>





        <script type="text/javascript" src="telas/js/bootstrap.js"></script>
        <script type="text/javascript" src="telas/js/jquery-1.11.2.js"></script>
    </body>
</html>