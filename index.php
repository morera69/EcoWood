<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EcoWoodSoul</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Play&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <!-- ícone na aba -->
    <link rel="shortcut icon" href="images/if.png" type="image/x-icon">
</head>

<body>
    <div class="container">
        <!-- topo -->
        <header>
            <img class="logo" src="images/LOGO BRANCO COM SLOGAN (1).png" alt="Logo com slogan">
            <h1>EcoWoodSoul</h1>
        </header>
        <!-- menu -->
        <nav>
            <a href="index.php">Clientes</a>
            <a href="?page=novo_prop">Adicionar Cliente</a>
            
        </nav>
        <!-- parte principal -->
        <main>
            <?php
                $check = true;

                $page = filter_input(INPUT_GET,'page',FILTER_SANITIZE_SPECIAL_CHARS);
                if($page && file_exists("pages/$page.php")){
                    require "pages/$page.php";
                } else{
                    require 'pages/inicio.php';
                }            
            ?>
        </main>

        <!-- rodapé -->
        <footer>
            <p>IFSC Garopaba - Técnico em Informática 2023</p>
        </footer>
    </div>


</body>

</html>