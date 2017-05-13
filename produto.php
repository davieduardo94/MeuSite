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
  <div class="container">
      <div class="produto">
        <h1>Fuzz Cardigan</h1>
        <p> por apenas R$ 129,00 </p>

        <form>
          <fieldset class="cores">
              <legend> Escolha a cor: </legend>

              <input type="radio" name="cor" id="verde" checked>
              <label for="verde">
                <img src="img/produtos/foto2-verde.png" alt="Produto na cor verde">
              </label>

              <input type="radio" name="cor" id="rosa">
              <label for="rosa">
                <img src="img/produtos/foto2-rosa.png" alt="Produto na cor rosa">
              </label>

              <input type="radio" name="cor" id="azul">
              <label for="azul">
                <img src="img/produtos/foto2-azul.png" alt="Produto na cor azul">
              </label>
          </fieldset>
          <fieldset  class="tamanhos">
            <legend>Escolha o tamanho:</legend>

            <input type="range" min="36" max="46" value="42" step="2" name="tamanho" id="tamanho" />
          </fieldset>


          <input type="submit" class="comprar" value="Comprar">
        </form>
      </div>
    </div>

        <?php include ("rodape.php");?>
    </body>
</html>
