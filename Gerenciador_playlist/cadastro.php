<?php
require_once './CRUD/crud.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $novaMusica = [
        'nome'    => $_POST['nome'],
        'artista' => $_POST['artista'],
        'duracao' => $_POST['duracao'],
        'genero'  => $_POST['genero'],
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
        <section>
            <article class="boxcad">
                <form action="cadastro.php" method="POST" >
                    <h1 class="titulo-principal">Cadastro de musicas:</h1>
                    <h4>Nome:</h4>
                    <input type="text" placeholder="Insira nome:"  name="nome">
                    <h4>Artista:</h4>
                    <input type="text" name="artista">
                    <h4>Genero:</h4>
                    <input type="text" name="genero">
                    <h4>Duração:</h4>
                    <input type="text" name="duracao">
                    <br><br>
                    <button type="submit">Cadastrar</button>
                </form>
            </article>
        </section>
    </main>



</body>

</html>