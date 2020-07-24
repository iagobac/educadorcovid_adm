<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#"><img style="position:relative;margin-top:0px;width:38px;height:27px;margin-left:20px;margin-right:10px;" src="include/img/images.jpg" id="logoSigo"></img></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse" id="navbarNavDropdown">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <b>Escolas</b>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li> <a class="dropdown-item" id="btnUnidadeTrabalho" href="javascript:void(0)">Unidade de Trabalho</a></li>
                        <li> <a class="dropdown-item" id="btnLocaldeFuncionamento" href="javascript:void(0)">Local de Funcionamento</a></li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <b id="btnRelatorios" href="javascript:void(0)">Organização de Ensino</b>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li> <a class="dropdown-item" id="btnorganizacao_ensino" href="javascript:void(0)">Listar Organização de Ensino</a></li>

                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <b id="btnRelatorios" href="javascript:void(0)">Servidores</b>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li> <a class="dropdown-item" id="btnListarSevidores" href="javascript:void(0)">Listar Servidores</a></li>
                        <li> <a class="dropdown-item" id="btnLotacao" href="javascript:void(0)">Lotação de Servidores</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <b>Alunos</b>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" id="btnCaptacao" href="javascript:void(0)">Listar Alunos</a></li>
                    </ul>
                </li>
                
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <b>Turmas</b>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" id="btnListarTurmas" href="javascript:void(0)">Listar Turmas</a></li>
                    </ul>
                </li>


            </ul>
            <ul class="navbar-nav flex-row ml-md-auto d-none d-md-flex" style="margin-right: 10px;">

                <li class="nav-item" style="margin-right: 20px;">
                    <a class="nav-link"><b>Olá, <?php
                            if (isset($_SESSION['user']['nome'])) {
                                echo $_SESSION['user']['nome'];
                            }
                            ?></b></a>

                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link nav-item dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <b>Perfil</b>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                        <a href="javascript:void(0)" class="dropdown-item"  data-toggle="modal" data-target="#modalSair">Sair</a>
                        <a href="manual.php" class="dropdown-item" >Download Manual</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>


    <div id="tabs" class="ngTabs ng-scope">
    </div>

    <div class="modal fade" id="modalSair" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Sair</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Você deseja realmente sair?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" onclick="deslogar()" data-dismiss="modal">Sair</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                </div>
            </div>
        </div>
    </div>


    <script type="text/javascript">
        function deslogar() {
            window.location.href = "/login?deslogar=2";
        }

    </script>
