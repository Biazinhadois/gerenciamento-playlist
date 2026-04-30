<?php
require_once './CRUD/crud.php';

$musicas = readAll($pdo, 'musicas');


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $novaMusica = [
        'nome' => $_POST['nome'],
        'artista' => $_POST['artista'],
        'duracao' => $_POST['duracao'],
        'genero' => $_POST['genero'],
    ];

    $idMusicaNova = create($pdo, 'musicas', $novaMusica);

    header('Location: musicas.php?musicasadd=1');
    exit;
}

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/style.css">

    <title>Gerenciamento Playlist</title>

</head>

<body>
    <header>
        <nav>
            <ul class="menu-superior">
                <br>
                <img src="./IMAGENS/logo.png" width="70px">

                <li><a href="home.php"><img src="./IMAGENS/home.png" width="35px"></a></li>

                <li><a href="./musicas.php"><img src="./IMAGENS/menu.png" width="35px"></a></li>


                <li><a href="./user.php"><img src="./IMAGENS/user.png" width="35px"></a></li>


                </div>
                </li>

            </ul>
        </nav>
    </header>


    <main>



        <?php
        if (isset($_GET['musicasadd']) && $_GET['musicasadd'] == '1') {
            print '<p class="titlo-principal">Musica adicionado com sucesso!!!</p>';
        }
        ?>


        <section>

            <h1 class="titulo-principal">
                Home
            </h1>

            <article class="container">
                <?php
                foreach ($musicas as $musica) {
                    echo '<a href="./detalhe.php?id=' . $musica['id'] . '">
                <div class="box-musicas">
                    <img src="./IMAGENS/logo.png" width="260px">
                    <br><br>
                    <h3 class="nome-musica">' . ($musica['nome']) . '</h3>
                    <p class="artista">' . ($musica['artista']) . '</p>
                </div>
            </a>';
                }


                ?>
            </article>
        </section>

        <br> <br>


        <hr>

        <br> <br>



    </main>


</body>

</html>