<doctype html>
<html>
    <head>
        <title>Site para modificaçoes</title>
        <meta charset="utf-8">        
        <link rel="stylesheet" href="css/teste2.css">
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/mobile.css" media="(max-width: 930px)">
        <meta name="viewport" content="width=device-width">
    </head>
    <body>
        <header class="container">
            <h1><img src="img/logo.png" alt="Mirror Fashion"></h1>
            <p class="sacola">
                Nenhum Item na sacola
                </p>
            <nav class="menu-opcoes ">
                <ul>
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="#">Ajuda</a></li>
                    <li><a href="#">Sua Conta</a></li>
                    <li><a href="sobre.php">Sobre</a></li>
                    <li><a href="#">Lista De Desejos</a></li>
                    <li><a href="teste2.php">Site teste</a></li>
                    <li><a href="#">Carrinho</a></li>
                </ul>
            </nav>
         </header>
         <div class="container destaque">

             <section class="busca">
                 <h2>Busca</h2>

                 <form>
                     <input type="search" placeholder="  Buscar..." required="">
                     <input type="image" src="img/busca.png">
                 </form>
             </section> <!-- fim busca  -->

             <section class="menu-departamentos">
                 <h2>Departamentos</h2>

                 <nav>
                     <ul>
                         <li><a href="#">Blusas e Camisas</a></li>
                         <li><a href="#">Calças</a></li>
                         <li><a href="#">Saias</a></li>
                         <li><a href="#">Vestidos</a></li>
                         <li><a href="#">Sapatos</a></li>
                         <li><a href="#">Bolsas e Carteiras</a></li>
                         
                     </ul>
                 </nav>
             </section>  <!-- fim menu-departamentos -->

             <img src="img/destaque-home.png" alt="Promoção Big Cite Night"> <!-- fim container .destaque-->
         </div>

         <div class="container paineis">
             <section class="painel novidades">
                 <h2>Novidades</h2>
                 <ol>

                     <li>
                         <a href="produto.html">
                             <figure>
                                 <img src="img/produtos/miniatura1.png">
                                 <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
                             </figure>
                         </a>
                     </li>
                     <li>
                         <a href="produto.html">
                             <figure>
                                 <img src="img/produtos/miniatura2.png">
                                 <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
                             </figure>
                         </a>
                     </li>
                     <li>
                         <a href="produto.html">
                             <figure>
                                 <img src="img/produtos/miniatura3.png">
                                 <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
                             </figure>
                         </a>
                     </li>
                     <li>
                         <a href="produto.html">
                             <figure>
                                 <img src="img/produtos/miniatura4.png">
                                 <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
                             </figure>
                         </a>
                     </li>
                     <li>
                         <a href="produto.html">
                             <figure>
                                 <img src="img/produtos/miniatura5.png">
                                 <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
                             </figure>
                         </a>
                     </li>
                     <li>
                         <a href="produto.html">
                             <figure>
                                 <img src="img/produtos/miniatura6.png">
                                 <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
                             </figure>
                         </a>
                     </li>
                 </ol>

             </section>

             <section class="painel mais-vendidos">
                 <h2>Mais Vendidos</h2>
                 <ol>
                     <li>
                         <a href="produto.html">
                             <figure>
                                 <img src="img/produtos/miniatura1.png">
                                 <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
                             </figure>
                         </a>
                     </li>
                     <li>
                         <a href="produto.html">
                             <figure>
                                 <img src="img/produtos/miniatura2.png">
                                 <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
                             </figure>
                         </a>
                     </li>
                     <li>
                         <a href="produto.html">
                             <figure>
                                 <img src="img/produtos/miniatura3.png">
                                 <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
                             </figure>
                         </a>
                     </li>
                     <li>
                         <a href="produto.html">
                             <figure>
                                 <img src="img/produtos/miniatura4.png">
                                 <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
                             </figure>
                         </a>
                     </li>
                     <li>
                         <a href="produto.html">
                             <figure>
                                 <img src="img/produtos/miniatura5.png">
                                 <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
                             </figure>
                         </a>
                     </li>
                     <li>
                         <a href="produto.html">
                             <figure>
                                 <img src="img/produtos/miniatura6.png">
                                 <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
                             </figure>
                         </a>
                     </li>
                 </ol>

             </section>
        </div>

<?php
    print date ('y')
?>


    </body>
</html>