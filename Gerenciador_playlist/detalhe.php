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
                <br>
                    <img src="<?php echo $produto['imagem']; ?>" class="fotos_detalhe" />

                    <h2 class="texto-produto"><?php echo $produto['nome']; ?></h2>
                    <br>
                    <p class="texto-categoria"><?php echo $produto['categoria']; ?></p>
                    <p class="texto-preco">R$<?php echo $produto['preco']; ?>
                        <br>

                        <span class="parcelado"><?php echo $produto['descricao_curta']; ?></span>

                    </p>
                    <button type="button" class="btn-comprar">Comprar</button>
            </article>
        </section>
    </main>



</body>

</html>