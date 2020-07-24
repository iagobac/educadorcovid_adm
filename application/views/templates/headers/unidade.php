<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#"><img style="position:relative;margin-top:0px;width:65px;height:50px;margin-left:10px;margin-right:0px;" src="include/img/logo-cuam.png" id="logoSisad"></img></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   <b>Orgãos</b>
                </a>
                
            </li>
        </ul>
        <ul class="navbar-nav">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   <i class="mdi mdi-sitemap fa-fw"></i><b>Cargos</b>
                </a>
                
            </li>
        </ul>
        <ul class="navbar-nav">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   <i class="mdi mdi-sitemap fa-fw"></i><b>Departamentos</b>
                </a>
                
            </li>
        </ul>
        <ul class="navbar-nav">
            <li class="nav-item dropdown">
                <i class="mdi mdi-sitemap fa-fw"></i>
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   <b>Servidores</b>
                </a>
                
            </li>
        </ul>
        <ul class="navbar-nav">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <b>Tarefas</b>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" id="btnAfastamento" href="javascript:void(0)"><b>Afastamento</b></a>
                    <a class="dropdown-item" id="btnJustificativa" href="javascript:void(0)"><b>Justificativa</b></a>
                    <a class="dropdown-item" id="btnLog" href="javascript:void(0)"><b>Logs de Ponto</b></a>
                </div>
            </li>
        </ul>
       <ul class="navbar-nav">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   <i class="mdi mdi-sitemap fa-fw"></i><b>Relatórios</b>
                </a>
                
            </li>
        </ul>

        <ul class="nav navbar-nav ml-auto" style="margin-right: 10px;">
            <li class="hidden-sm"><?php if(isset($_SESSION['user']['nome'])){ echo "<a>Olá, <strong> ".mb_strtoupper($_SESSION['user']['nome'],"UTF-8")."</strong></a>";}?></li>
            <li class="nav-item dropdown ml-auto">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <b>Perfil</b>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                    <a href="javascript:void(0)" class="dropdown-item" data-toggle="modal" data-target="#modalSair">Sair</a>
                </div>
            </li>
        </ul>
    </div>
</nav>
</body>


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
