<?php
include "../app/data/produtos.php";

$id = $_GET["id"] ?? null;

$produtoSelecionado = null;
for ($i = 0; $i < count($produtos); $i++) {
    if ($produtos[$i]->id == $id) {
        $produtoSelecionado = $produtos[$i];
        break;
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Store | <?= $produtoSelecionado->nome ? $produtoSelecionado->nome : "Produto não encontrado!" ?></title>

    <link rel="stylesheet" href="./assets/css/produto.css">
    <link rel="stylesheet" href="./assets/css/header.css">
    <link rel="stylesheet" href="./assets/css/footer.css">

</head>

<body>
    <?php include "../app/components/header.php"; ?>

    <div class="containerproduto">
        <?php if ($produtoSelecionado): ?>
            <!-- Se hover -->
        <?php else: ?>
            <h1>Produto não encontrado</h1>
        <?php endif; ?>



        <div class="imagemproduto">
            <img src="<?= $produtoSelecionado->imagem ?>" alt="produto">
        </div>

        <div class="inf-produto">

            <div class="categmarca">
                <p> <?= $produtoSelecionado->categoria ?> </p>
                <p> <?= $produtoSelecionado->marca ?> </p>
            </div>

            <div class="precoedesc">
            <h2> <?= $produtoSelecionado->nome ?> </h2>

            <p> <?= $produtoSelecionado->descricao ?> </p>
            </div>

            <div class="precoestoque">
                <p> <?= $produtoSelecionado->preco ?> </p>

                <div class="estoque">
                     <svg class="icon-estoque" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-box-icon lucide-box"><path d="M21 8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16Z"/><path d="m3.3 7 8.7 5 8.7-5"/><path d="M12 22V12"/></svg>
                <p> <?= $produtoSelecionado->estoque ?> </p>
                </div>

            </div>

        </div>

    </div>

    <?php include "../app/components/footer.php"; ?>
</body>

</html>