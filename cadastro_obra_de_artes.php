<html>
    <head>
        <title>cadastro_obra_de_artes</title>
        <link
href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
rel="stylesheet"
integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTR
i" crossorigin="anonymous">
        <meta charset="UTF-8">
      </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item active">
                           <a  class="nav-link"  href="index.html">Inicio <span  class="sr-only"></span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="cadastroObra.html">Cadastro</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="listarObra.php">Listagem</a>
                </li>
              </ul>
            </div>
          </nav>

    <h3>cadastro_obra_de_artes</h3>
    <form method="POST" action="insereObra.php">
        <div class="form-row">

          <div class="form-group col-md-6">
          <label>Nome Completo</label>
          <input type="text" class="form-control" name="nome" placeholder="Digite o nome completo do autor">
          </div>

          <div class="form-group col-md-6">
          <label>NomeObra</label>
          <input type="text" class="form-control" name="NomeObra" placeholder="Digite o Nome da Obra">
          </div>

          <div class="form-group col-md-2">
          <label>data de criação</label>
          <input type="number" class="form-control" name="dataCriação"
          placeholder="Digite a data de Criação">
          </div>

          <div class="form-group col-md-2">
          <label>cidade</label>
          <input type="text" class="form-control" name="cidade"
          placeholder="Digite a cidade em que nasceu">
          </div>

          <div class="form-group col-md-2">
          <label>identificação da obra</label>
          <input type="number" class="form-control" name="identificação da obra"
          placeholder="Digite o codigo de identificação">
          </div>

          <div class="form-group col-md-2">
          <label>cpf</label>
          <input type="number" class="form-control" name="cpf"
          placeholder="Digite o cpf">
          </div>

          <div class="form-group col-md-2">
          <label>email</label>
          <input type="number" class="form-control" name="email"
          placeholder="Digite o email ">
          </div>

</div>
<br>
<button type="submit" class="btn btn-primary">Cadastrar Dados</button>
</form>
</body>
</html>