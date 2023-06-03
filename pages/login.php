<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>To Com Fome | Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/styles.css">
</head>

<body class="bg-tela-primario cabecalho">
  <header>
    <nav class="navbar bg-tela-secundario">
      <div class="container-fluid">
        <a class="navbar-brand" href="../index.php">
          <img src="../img/Logo.svg" alt="Logo" width="70" height="70" class="d-inline-block align-text-top ms-5">
        </a>
      </div>
    </nav>
  </header>

  <main>
    <div class="p-5 vh-100">
      <div class="container-fluid text-center p-2">
        <div class="row align-items-center bg-tela-secundario rounded-5">

          <!-- FORM de Cadastro -->
          <div class="col bg-white p-0 rounded-start-5">
            <div class="container">

              <form action="$_GET" class="row justify-content-center">
                <div class="col-6 align-self-center">
                  <h2 class="mt-4 mb-4">CADASTE-SE</h2>

                  <select class="form-select bg-bd-campo-primario corCinza" aria-label="Selecione o tipo de Cadastro">
                    <option selected>TIPO DE CADASTRO</option>
                    <option value="1">AGRICULTOR</option>
                    <option value="2">EMPRESA</option>
                    <option value="3">VOLUNTÁRIO</option>
                  </select>

                  <input type="text" id="inputNome" class="form-control text-center bg-bd-campo-primario corCinza mt-3 mb-3 " aria-labelledby="Nome" placeholder="NOME">

                  <input type="text" id="inputDocumento" class="form-control text-center bg-bd-campo-primario corCinza mt-3 mb-3 " aria-labelledby="Documento" placeholder="CNPJ / CPF">

                  <input type="text" id="inputTelefone" class="form-control text-center bg-bd-campo-primario corCinza mt-3 " aria-labelledby="telefone" placeholder="TELEFONE">

                  <div class="row">
                    <div class="col">
                      <input type="text" id="inputCep" class="form-control text-center bg-bd-campo-primario corCinza mt-3 mb-3" aria-labelledby="cep" placeholder="CEP">
                    </div>

                    <div class="col-4 d-grid mx-auto ps-0">
                      <button type="button" class="btn btn-cinza mt-3 mb-3">BUSCAR</button>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col">
                      <input type="text" id="inputEndereco" class="form-control text-center bg-bd-campo-primario corCinza " aria-labelledby="endereco" placeholder="ENDEREÇO">
                    </div>

                    <div class="col-4 d-grid mx-auto ps-0">
                      <input type="text" id="inputNumero" class="form-control text-center bg-bd-campo-primario corCinza" aria-labelledby="numero" placeholder="Nº">
                    </div>
                  </div>

                  <input type="text" id="inputBairro" class="form-control text-center bg-bd-campo-primario corCinza mt-3 " aria-labelledby="bairro" placeholder="BAIRRO">

                  <div class="row">
                    <div class="col">
                      <input type="text" id="inputCidade" class="form-control text-center bg-bd-campo-primario corCinza mt-3 mb-3" aria-labelledby="cidade" placeholder="CIDADE">
                    </div>

                    <div class="col-4 ps-0">
                      <input type="text" id="inputUf" class="form-control text-center bg-bd-campo-primario corCinza mt-3 mb-3" aria-labelledby="uf" placeholder="UF">
                    </div>
                  </div>

                  <input type="email" id="inputEmail" class="form-control text-center bg-bd-campo-primario corCinza mb-3 " aria-labelledby="email" placeholder="EMAIL">

                  <input type="password" id="inputPassword" class="form-control text-center bg-bd-campo-primario corCinza mt-3" aria-labelledby="Senha" placeholder="SENHA">

                  <div class="d-grid gap-2 col-6 mx-auto">
                    <button type="button" class="btn btn-cinza mt-4 mb-4">CADASTRAR</button>
                  </div>

                </div>
              </form>

            </div>
          </div>

          <!-- FORM de Login -->
          <div class="col p-0">
            <div class="container">

              <form action="" class="row justify-content-center">
                <div class="col-6">
                  <h2 class="corBranco mt-5 mb-5">LOGIN</h2>

                  <input type="email" id="inputEmail" class="form-control text-center bg-transparent border-2 corBranco mt-5 mb-3" aria-labelledby="Email" placeholder="EMAIL">

                  <input type="password" id="inputPassword" class="form-control text-center bg-transparent border-2 corBranco mt-3 mb-3" aria-labelledby="Senha" placeholder="SENHA">

                  <div class="d-grid gap-2 col-6 mx-auto">
                    <button type="submit" class="btn btn-branco mt-4 mb-5">ENTRAR</button>
                  </div>

                </div>
              </form>

            </div>
          </div>


        </div>
      </div>
    </div>

  </main>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>