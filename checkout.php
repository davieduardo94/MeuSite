<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Checkout Mirror Fashion</title>
    <link rel="shortcut icon" type="image/x-icon" href="icone.ico">
    <meta name="viewport" content="width-device-width">
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
<div class="container">
  <div class="jumbotron">
      <!-- <div class="container"> -->
        <h1> Ótima escolha!</h1>
        <p>Obrigado pro comprar na Mirror Fashion!
        Preencha seus dados para efetivar a compra.</p>
      <!-- </div> <!-- fim div container -->
  </div><!--fim div jumbotron-->
</div><!--fim div container -->

  <div class="container">
      <div class="panel panel-info">
          <div class="panel-heading">
            <h2 class="panel-title">Sua compra</h2>
          </div><!-- fim .panel-heading -->
        <div class="panel-body">
          <img src="img/produtos/foto1-verde.png" alt="Fuzzy Cardigan"
                    class="img-thumbnail img-responsive"><!-- uma imagem estática sem envolver o PHP -->
          <!-- <img src="img/produtos/foto<?= $_POST["id"] ?>-<?= $_POST["cor"] ?> .png"
              class="img-thumbnail img-responsive"> -->
          <dl>
            <dt>Cor</dt>
            <dd><?=$_POST['cor']?></dd>

            <dt>Tamanho</dt>
            <dd><?= $_POST['tamanho'] ?></dd>

            <dt>Produto</dt>
            <dd><?= $_POST['nome'] ?> </dd>

            <dt>Preço</dt>
            <dd><?= $_POST['preco'] ?> </dd>
          </dl>
        </div> <!--fim .panel-body-->
      </div><!--fim .panel-->

      <form><!-- inicio formulario -->
        <fieldset>
          <legend>Dados Pessoais</legend>
          <div class="form-group">
            <label for="nome">Nome Completo</label>
            <input type="text" class="form-control" id="nome" name="nome" required="" autofocus>
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <div class="input-group">
              <span class="input-group-addon">@</span>
              <input type="email" class="form-control" id="email" name="email">
            </div>
          </div>
          <div class="form-group">
            <label for="cpf">CPF</label>
            <input type="text" class="form-control" id="cpf" name="cpf" placeholder="000.000.000-00" required="">
          </div>
          <div class="checkbox">
            <label>
              <input type="checkbox" name="spam" value="sim" checked>
              Quero receber spam da Mirror Fashion
            </label>
          </div>
        </fieldset>
        <fieldset>
          <legend>Cartao de Credito</legend>
           <div class="form-group">
             <label for="numeero-cartao">Numero - CVV</label>
             <input type="text" class="form-control"  id="numero-cartao" name="numero-cartao">
           </div>
           <div class="form-group">
             <label for="bandeira-cartao">Bandeira</label>
             <select class="form-control" name="bandeira-cartao" id="bandeira-cartao">
               <option value="master">MasterCard</option>
               <option value="visa">Visa</option>
               <option value="amex"> American Express</option>
             </select>
           </div>
           <div class="form-group">
             <label for="validade-cartao">Validade</label>
             <input type="moth" class="form-control" id="validade-cartao" name="validade-cartao">
           </div>
        </fieldset>
        <button type="submit" class="btn btn-lg btn-info ">
          <span class="glyphicon glyphicon-ok"></span>
          Confirmar Pedido
        </button>
      </form><!-- fim do formulario -->
  </div>


</body>
</html>
