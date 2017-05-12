<!DOCTYPE html>
<html>
<?php
<<<<<<< HEAD
    $cabecalho_css = '<link rel="stylesheet" href="css/estilo.css"
                      <link rel="stylesheet" href="css/reset">
                      <link rel="stylesheet" href="css/produto.css">
                      ';
=======
    $cabecalho_css = '<link rel="stylesheet" href="css/produto.css">
                      <link rel="stylesheet" href="css/estilo.css"';
>>>>>>> a3e02325c52d6adf371db096b0e632b8ab608160
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

<<<<<<< HEAD
              <input type="radio" name="cor" id="verde" checked="">
=======
              <input type="radio" name="cor" id="verde" checked>
>>>>>>> a3e02325c52d6adf371db096b0e632b8ab608160
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

          <input type="submit" class="comprar" value="Comprar">
        </form>
      </div>
    </div>

        <?php include ("rodape.php");?>
    </body>
</html>
