<?php include "../app/data/produtos.php"; ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./assets/css/home.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="webpage icon" href="https://cdn-icons-png.flaticon.com/512/126/126510.png">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="./assets/css/header.css">
    <link rel="stylesheet" href="./assets/css/home.css">
    <link rel="stylesheet" href="./assets/css/footer.css">

    <title>Store</title>

</head>

<body>
    <?php include "../app/components/header.php"; ?>
    <div class="produtos">

        <?php foreach ($produtos as $produto) : ?> <!--  ":" significa que tem continuação -->

            <div class="produto">

                <img src="<?= $produto->imagem ?>" alt="produto">

                <div class="tittle-produto">

                    <h2><?= $produto->nome ?></h2> <!-- "->" é os parametros -->

                    <div class="qnt-produto">
                        <svg class="icon-estoque" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-box-icon lucide-box"><path d="M21 8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16Z"/><path d="m3.3 7 8.7 5 8.7-5"/><path d="M12 22V12"/></svg>
                        <h2><?= $produto->estoque ?></h2>
                    </div>

                </div>

                <div class="infprodut">
                    <h2><?= $produto->preco ?></h2>
                    <h3><?= $produto->marca ?></h3>
                </div>

                <div class="botao">
                    <a href="produto.php?id=<?= $produto->id ?>">Ver mais</a>
                </div>

            </div>

        <?php endforeach; ?>

    </div>
    <?php include "../app/components/footer.php"; ?>

</body>

</html>