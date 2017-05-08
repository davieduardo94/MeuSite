<!DOCTYPE html>
<html>
<?php
    $cabecalho_css = '<link rel="stylesheet" href="css/estilo.css"
                      <link rel="stylesheet" href="css/produto.css">
                      ';
?>
<?php
    $cabecalho_title = "Produto da Mirror Fashion";
    include ("cabecalho.php");
?>

    <body>

        <!--aqui vem o miolo da pagina-->
      <div class="produto">
        <h1> Fuzzy Cardigan </h1>
        <p> por apenas R$ 129,00 </p>

        <form>
          <fieldset class="cores">
              <legend> Escolha a cor: </legend>

              <input type="radio" name="cor" id="verde">
              <label for="verde">
                <img src="img/produtos/foto2-verde.png" alt="Produto na cor verde">
              </label>

              <input type="radio" name="cor" id="rosa">
              <label for="rosa">
                <img src="img/produtos/foto2-rosa.png" alt="Produto na cor rosa">
              </label>

              <input type="radio" name="cor" id="azul">
              <label for="auzl">
                <img src="img/produtos/foto2-azul.png" alt="Produto na cor azul">
              </label>
          </fieldset>

          <input type="submit" class="comprar" value="Comprar">
        </form>
      </div>

        <?php include ("rodape.php");?>
    </body>
</html>
