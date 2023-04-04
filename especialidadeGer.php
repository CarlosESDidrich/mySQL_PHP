<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <header>
    <nav class="nav">
            <a class="nav-link active" aria-current="page" href="#">HOME</a>
            <a class="nav-link" href="#">Especialidade</a>
            <a class="nav-link" href="/mySQL_PHP/pacienteGer.php">Paciente</a>
            <a class="nav-link" href="/mySQL_PHP/medicoGer.php">Medico</a>
        </nav>
    </header>
    <main>
        <div class="container">
            <?php
            spl_autoload_register(function ($class) {
                require_once("./Classes/{$class}.class.php");
            });
            if (filter_has_var(INPUT_POST, 'btnGravar')) {
                
                $especialidade = new Especialidade();
                $especialidade->setNomeEsp(filter_input(INPUT_POST, 'txtNome'));
                
                $especialidade->inserir();
            }
            ?>


            <form class="row g-3" action="<?php echo
                htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">

                <div class="col-12">
                    <label for="txtNome" class="form-label">Nome</label>
                    <input type="text" class="form-control" id="txtNome" placeholder="Digite a especialidade..."
                        name="txtNome">
                </div>
                
                <div class="col-12">
                    <button type="submit" class="btn btn-primary" name="btnGravar">Gravar</button>
                </div>
            </form>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N"
        crossorigin="anonymous"></script>
</body>

</html>