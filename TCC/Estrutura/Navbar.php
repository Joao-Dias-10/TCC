
<nav id="nav" class="navbar navbar-expand-lg navbar-light bg-warning">
  <div class="container-fluid">
    <a class="navbar-brand" href="grafico.php">

      <img id="hermes" src="..\TCC\assets\img\peso_branco.png" height="30"> <font color="FFFFFFF">PERSONALIZE</font>

    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <form action="" method="post">
      <li class="nav-item">
          <a class="nav-link" href="grafico.php"><b> <font color="FFFFFFF">Home</font></b></a>
        </li>
        </form>

        <form action="" method="post">
      <li class="nav-item">
          <a class="nav-link" href="index.php"><b> <font color="FFFFFFF">Alunos</font></b></a>
        </li>
        </form>

        <form action="" method="post">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <b> <font color="FFFFFFF">Cadastro</font></b>
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown" id="filtro" name="filtro" class="form-control" onchange="this.form.submit()">

              <li><a class="dropdown-item" href='cadastro_pessoa.php'>Usuário</a></li>
              <li><a class="dropdown-item" href='inserir.php'>Treino</a></li>
           
            </ul>
          </li>
        </form>
      
      </ul>

<div class="dropdown">

  <i id="user" class="fa-solid fa-user-tie" class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"></i>

  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
    <li><a class="dropdown-item" href="#">Óla</a></li>
    <li><a class="dropdown-item" href="..\scripts\logout.php"><i class="fa-solid fa-right-from-bracket"></i> Sair</a></li>
  </ul>
</div>
      <div class="d-flex">
        <form class="d-flex">
          <input name ="busca" for="busca" class="form-control me-2" type="search" placeholder="Pesquisar..." aria-label="Search">
          <button class="btn btn-outline-secondary" type="submit"><b> <font color="FFFFFFF">Buscar</font></b></button>
        </form>
      </div>
    </div>
  </div>
</nav>
