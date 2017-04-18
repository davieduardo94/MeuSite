<?php
        $cabecalho_css = '<link rel="stylesheet" href="css/estilo.css">
        <link rel="stylesheet" href="css/mobile.css" media="(max-width: 800px)">';
?>

<?php
        $cabecalho_title = "Inicio";
        include ("cabecalho.php");
?>        
	
<div class="container destaque">

        <section class="busca">
            <h2>Busca</h2>

            <form>
                <input type="search" placeholder="  Buscar...">
                <input type="image" src="img/busca.png" class="lupa">
            </form>
        </section> <!-- fim busca-->

        <section class="menu-departamentos">
            <h2>departamentos</h2>

            <nav>
            <ul>
                <li><a href="#">blusas e camisas</a>
                    <ul>
                        <li><a href="#">manga curta</a></li>
                        <li><a href="#">manga longa</a></li>
                        <li><a href="#">camisa social</a></li>
                        <li><a href="#">camisa causal</a></li>
                        <li><a href="#">basica</a></li>
                    </ul>
                </li>
                <li><a href="#">calças</a></li>
                <li><a href="#">saias</a></li> 
                <li><a href="#">vestidos</a></li>
                <li><a href="#">sapatos</a></li>
                <li><a href="#">bolsas e carteiras</a></li>
                <li><a href="#">acessórios</a></li>
            </ul>
            </nav>
        </section><!-- fim .menu-departamentos -->
 <img src="img/destaque-home.png" alt="Promoção Big Cite Night">
</div> <!-- fim container destaque -->

<div class="container paineis">
    <section class="painel novidades">
        <h2>Novidades</h2>
        <ol>
            <li>
                <a href="produto.php">
                    <figure>
                        <img src="img/produtos/miniatura1.png">
                        <figcaption><br>Fuzz Cardigan por R$ 129,90</figcaption>
                    </figure>
                </a>
            </li>
            <li>
                <a href="produto.php">
                    <figure>
                        <img src="img/produtos/miniatura1.png">
                        <figcaption><br>Fuzz Cardigan por R$ 129,90</figcaption>
                    </figure>
                </a>
            </li>
            <li>
                <a href="produto.php">
                    <figure>
                        <img src="img/produtos/miniatura1.png">
                        <figcaption><br>Fuzz Cardigan por R$ 129,90</figcaption>
                    </figure>
                </a>
            </li>
            <li>
                <a href="produto.php">
                    <figure>
                        <img src="img/produtos/miniatura1.png">
                        <figcaption><br>Fuzz Cardigan por R$ 129,90</figcaption>
                    </figure>
                </a>
            </li>
            <li>
                <a href="produto.php">
                    <figure>
                        <img src="img/produtos/miniatura1.png">
                        <figcaption><br>Fuzz Cardigan por R$ 129,90</figcaption>
                    </figure>
                </a>
            </li>
            <li>
                <a href="produto.php">
                    <figure>
                        <img src="img/produtos/miniatura1.png">
                        <figcaption><br>Fuzz Cardigan por R$ 129,90</figcaption>
                    </figure>
                </a>
            </li>
        </ol>
    </section>

    <section class="painel mais-vendidos">
        <h2>Mais Vendidos</h2>
        <ol>
            <li>
                <a href="produto.php">
                    <figure>
                        <img src="img/produtos/miniatura1.png">
                        <figcaption><br>Fuzz Cardigan por R$ 129,90</figcaption> <!-- foi adicionado <br> para dar espaçamento no texto -->
                    </figure>
                </a>
            </li>
            <li>
                <a href="produto.php">
                    <figure>
                        <img src="img/produtos/miniatura3.png">
                        <figcaption><br>Fuzz Cardigan por R$ 129,90</figcaption>
                    </figure>
                </a>
            </li>
            <li>
                <a href="produto.php">
                    <figure>
                        <img src="img/produtos/miniatura2.png">
                        <figcaption><br>Fuzz Cardigan por R$ 129,90</figcaption>
                    </figure>
                </a>
            </li>
            <li>
                <a href="produto.php">
                    <figure>
                        <img src="img/produtos/miniatura4.png">
                        <figcaption><br>Fuzz Cardigan por R$ 129,90</figcaption>
                    </figure>
                </a>
            </li>
            <li>
                <a href="produto.php">
                    <figure>
                        <img src="img/produtos/miniatura5.png">
                        <figcaption><br>Fuzz Cardigan por R$ 129,90</figcaption>
                    </figure>
                </a>
            </li>
            <li>
                <a href="produto.php">
                    <figure>
                        <img src="img/produtos/miniatura6.png">
                        <figcaption><br>Fuzz Cardigan por R$ 129,90</figcaption>
                    </figure>
                </a>
            </li>
        </ol>
    </section>
</div>

<?php include ("rodape.php");?>

    </body>
</html>