<!DOCTYPE html>
<html>
<?php
    $cabecalho_css = '<link rel="stylesheet" href="css/estilo.css"
                      <link rel="stylesheet" href="css/reset">
                      <link rel="stylesheet" href="css/produto.css">
                      ';
?>

<?php
    $cabecalho_title = "Produto da Mirror Fashion";
    include ("cabecalho.php");
?>

    <body>

        <!--aqui vem o miolo da pagina-->
<div class="produto-back">
  <div class="container">
      <div class="produto">
        <h1>Fuzz Cardigan</h1>
        <p> por apenas R$ 129,00 </p>

        <form action="checkout.php" method="POST">
          <fieldset class="cores">
              <legend> Escolha a cor: </legend>
              <input type="hidden" name="nome" value="Fuzzy Cardigan">
              <input type="hidden" name="preco" value="129.00">

              <input type="radio" name="cor" value="Verde" id="verde" checked>
              <label for="verde">
                <img src="img/produtos/foto1-verde.png" alt="verde">
              </label>

              <input type="radio" name="cor" value="Rosa" id="rosa">
              <label for="rosa">
                <img src="img/produtos/foto1-rosa.png" alt="rosa">
              </label>

              <input type="radio" name="cor" value="Azul" id="azul">
              <label for="azul">
                <img src="img/produtos/foto1-azul.png" alt="azul">
              </label>
          </fieldset>
          <fieldset  class="tamanhos">
            <legend>Escolha o tamanho:</legend>

            <input type="range" min="36" max="46" value="42" step="2" name="tamanho" id="tamanho" />
          </fieldset>


          <input type="submit" class="comprar" value="Comprar">
        </form>
      </div>
      <div class="detalhes">
        <h2> Detalhes do produto</h2>

        <p>Esse é o melhor casaco de Cardigã que você já viu. Excelente
material italiano com estampa desenhada pelos artesãos da
comunidade de Krotor nas ilhas gregas. Compre já e receba hoje
mesmo pela nossa entrega a jato.</p>

<table>
  <thead>
    <tr>
      <th>Caracteristicas</th>
      <th>Detalhes</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Modelo</td>
      <td>Cardigã 7845</td>
    </tr>
    <tr>
      <td>Material</td>
      <td>Algodão e poliester</td>
    </tr>
    <tr>
      <td>Cores</td>
      <td>Azul, Rosa e Verde</td>
    </tr>
    <tr>
      <td>Lavagem</td>
      <td>Lavar a mão</td>
    </tr>
  </tbody>
</table>
      </div>
    </div>
  </div>

        <?php include ("rodape.php");?>
    </body>
</html>
