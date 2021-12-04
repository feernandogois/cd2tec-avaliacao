<?php
require_once './assets/acoes/index_consulta.php';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> Consultar CEP </title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Icones -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <!-- fonte personalizada -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

    <!-- estilo do nosso tema -->
    <link rel="stylesheet" href="assets/css/tema.css" />
    <link rel="stylesheet" href="assets/css/form-validation.css" />



</head>

<body>

    <!-- barra de navegacao -->
    <nav class="navbar navbar-expand-md navbar-light bg-light">
        <div class="container">
            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand" href="#">cd2tec</a>
            </div>
        </div>
    </nav>


    <!-- container fluido 100% -->
    <div class="container-fluid bg1 text-center" id="quem">

    <?php 
    if($error){
    ?>
    <div class="alert alert-danger" role="alert">
        CEP NÃO ENCONTRADO!
    </div>
    <?php
    }
    ?>
        <h3>Consulta CEP</h3>

        <form action="./assets/acoes/consulta-cep.php" id="formulario" method="POST" class="needs-validation container">

            <div class="row g-12">

                <div class="col-sm-12">
                    <label for="cepconsulta" class="form-label">CEP</label>
                    <input type="text" class="form-control" id="cepconsulta" name="cepconsulta" minlength="9" maxlength="9" value="" autofocus required>
                </div>
            </div>
            <br>
            <button class="w-100 btn btn-primary btn-lg" type="submit" name="bt_consultar">
                Consultar
            </button>

        </form>
    </div>



    <div class="container-fluid bg1 text-center" id="saida">

        <h3>Resultado da pesquisa</h3>

        <form id="formulario" class="needs-validation container">

            <div class="row g-12">

                <div class="col-sm-12">
                    <label for="cep" class="form-label">CEP</label>
                    <input type="text" readonly class="form-control" id="cep" value="<?= $dados['cep']; ?>">

                    <label for="logradouro" class="form-label">LOGRADOURO</label>
                    <input type="text" readonly class="form-control" id="logradouro" value="<?= $dados['logradouro']; ?>">

                    <label for="complemento" class="form-label">COMPLEMENTO</label>
                    <input type="text" readonly class="form-control" id="complemento" value="<?= $dados['complemento']; ?>">

                    <label for="bairro" class="form-label">BAIRRO</label>
                    <input type="text" readonly class="form-control" id="bairro" value="<?= $dados['bairro']; ?>">

                    <label for="localidade" class="form-label">LOCALIDADE</label>
                    <input type="text" readonly class="form-control" id="localidade" value="<?= $dados['localidade']; ?>">

                    <label for="uf" class="form-label">ESTADO</label>
                    <input type="text" readonly class="form-control" id="uf" value="<?= $dados['uf']; ?>">

                    <label for="ibge" class="form-label">IBGE</label>
                    <input type="text" readonly class="form-control" id="ibge" value="<?= $dados['ibge']; ?>">

                    <label for="gia" class="form-label">GIA</label>
                    <input type="text" readonly class="form-control" id="gia" value="<?= $dados['gia']; ?>">

                    <label for="ddd" class="form-label">DDD</label>
                    <input type="text" readonly class="form-control" id="ddd" value="<?= $dados['ddd']; ?>">

                    <label for="siafi" class="form-label">SIAFI</label>
                    <input type="text" readonly class="form-control" id="siafi" value="<?= $dados['siafi']; ?>">
                </div>
            </div>
            <br>

        </form>


    </div>


    <!-- bootstrap.js -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>

    <script>
        $("#cepconsulta").keypress(function() {
            $(this).mask('00000-000');
        });
    </script>

</body>

</html>