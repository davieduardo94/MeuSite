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
  <nav class="navbar navbar-default">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">Mirror Fashion</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="sobre.php">Sobre</a></li>
      <li><a href="#">Ajuda</a></li>
      <li><a href="produto.php">Produto</a></li>
      <li><a href="#">Entre em contato</a></li>
    </ul>
  </nav>
  <div class="jumbotron">
      <!-- <div class="container"> -->
        <h1> Ótima escolha!</h1>
        <p>Obrigado pro comprar na Mirror Fashion!
        Preencha seus dados para efetivar a compra.</p>
      <!-- </div> <!-- fim div container -->
  </div><!--fim div jumbotron-->
</div><!--fim div container -->

  <div class="container"> <!-- inicio container -->
    <div class="row"> <!-- incicio row -->
      <div class="col-sm-4">
        <div class="panel panel-info">
          <div class="panel-heading">
            <h2 class="panel-title">Sua compra</h2>
          </div><!-- fim .panel-heading -->

        <div class="panel-body"> <!-- inicio painel body-->
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
    </div> <!-- fim col-sm -->



      <form class="col-sm-8"><!-- inicio formulario -->
        <div class="row">
        <fieldset class="col-md-6">
          <legend>Dados Pessoais</legend>
          <div class="form-group">
            <label for="nome">Nome Completo</label>
            <input type="text" class="form-control" id="nome" name="nome" required autofocus>
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <div class="input-group">
              <span class="input-group-addon">@</span>
              <input type="email" class="form-control" id="email" name="email" placeholder="email@exemplo.com">
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
        </fieldset class="col-md-6">
        <fieldset>
          <legend>Cartao de Credito</legend>
           <div class="form-group">
             <label for="numero-cartao">Numero - CVV</label>
             <input type="text" class="form-control"  id="numero-cartao" name="numero-cartao" placeholder="1234 5678 9012 3456">
           </div>
             <div class="form-group">
               <label for="codigo">Codigo de Verificação</label>
               <input type="text" class="form-control"  id="codigo" name="codigo" placeholder="123">
             </div>
             <div class="form-group">
               <label for="bandeira-cartao">Bandeira</label>
               <select class="form-control" name="bandeira-cartao" id="bandeira-cartao">
                 <option value="selecione">Selecione a bandeira...</option>
                 <option value="master">MasterCard</option>
                 <option value="visa">Visa</option>
                 <option value="elo">Elo</option>
                 <option value="dinners">Dinners Club</option>
                 <option value="amex"> American Express</option>
               </select>
             </div>
             <div class="form-group">
               <label for="validade-cartao">Validade</label>
               <input type="moth" class="form-control" id="validade-cartao" name="validade-cartao">
             </div>
          </fieldset>
        </div> <!-- fim div row-->
            <button type="submit" class="btn btn-lg btn-info pull-left ">
              <span class="glyphicon glyphicon-ok"></span>
                Confirmar Pedido
            </button>
            <button type="reset" class="btn btn-lg btn-danger pull-right ">
              <span class="glyphicon glyphicon-remove"></span>
                Limpar
            </button>

      </form><!-- fim do formulario -->
  </div> <!-- fim container-->
</div> <!-- fim row-->

  <br />
  <br />


</body>
</html>
