       <!DOCTYPE html>
<html>
    <head>
        <title><?php print $cabecalho_title; ?></title>
        <link rel="shortcut icon" type="image/x-icon" href="icone.ico">
        <link rel="stylesheet" href="css/reset.css">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <?php
            print @$cabecalho_css;
        ?>
    </head>
    <body>
        <header class="container">                          <!-- inicio cabecalho-->
        <!--[if lt IE 9]>
           <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endinf]-->
            <h1>
            <img src="img/logo.png" alt="Mirror Fashion">
            </h1>
            <p class="sacola">
                Nenhum item na sacola de compras
            </p>
            
            <nav class="menu-opcoes"><!--blocos de nvaegacao-->
                <ul>
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="#">Sua Conta</a></li>
                    <li><a href="#">Lista de desejos</a></li>
                    <li><a href="#">Cartão Fidelidade</a></li>
                    <li><a href="sobre.php">Sobre</a></li>
                    <li><a href="#">Ajuda</a></li>
                    <li><a href="teste2.php">Site teste</a></li>
                </ul>
            </nav><!--fim bloco-->
        </header>			         <!--fim cabecalho-->