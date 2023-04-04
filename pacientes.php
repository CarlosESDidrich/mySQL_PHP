<!DOCTYPE html>
<html lang="en">

<head>
<link rel="stylesheet" href="css/layout.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title>Document</title>
</head>

<body>
    <header>
        <nav class="nav">
            <a class="nav-link active" aria-current="page" href="#">HOME</a>
            <a class="nav-link" href="/mySQL_PHP/especialidadeGer.php">Especialidade</a>
            <a class="nav-link" href="/mySQL_PHP/pacienteGer.php">Paciente</a>
            <a class="nav-link" href="/mySQL_PHP/medicoGer.php">Medico</a>
        </nav>
    </header>
    <div>
        <main>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Ações</th>
                        <th scope="col">Foto</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Email</th>
                        <th scope="col">Celular</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    spl_autoload_register(function ($class) {
                        require_once "./Classes/{$class}.class.php";
                    });
                    $paciente = new Paciente();
                    $dadosBanco = $paciente->listar();
                    while ($row = $dadosBanco->fetch_object()) {
                        ?>
                        <tr>
                            <td>
                                <a href="#" class="btn btn-primary">
                                    <span class="material-symbols-outlined">
                                        search
                                    </span>
                                </a>
                                <a href="#" class="btn btn-danger">
                                    <span class="material-symbols-outlined">
                                        delete
                                    </span>
                                </a>

                            </td>
                            <td><img src="imagesPac/<?php echo $row->fotoPac; ?> " class="imgred" alt="Foto do paciente<?php echo $row->nomePac; ?>">
                            </td>
                            <td>
                                <?php echo $row->nomePac; ?>
                            </td>
                            <td>
                                <?php echo $row->emailPac; ?>
                            </td>
                            <td>
                                <?php echo $row->celularPac; ?>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </main>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N"
        crossorigin="anonymous"></script>
</body>

</html>