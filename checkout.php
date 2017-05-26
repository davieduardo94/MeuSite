<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Checkout Mirror Fashion</title>
    <meta name="viewport" content="width-device-width">
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>

    <div class="jumbotron">
      <div class="container">
    <h1> Ótima escolha!</h1>
    <p>Obrigado pro comprar na Mirror Fashion!
    Preencha seus dados para efetivar a compra</p>
  </div>
  <div class="container">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h2 class="panel-title">Sua compra</h2>
    </div><!-- fim .panel-heading -->
      <div class="panel-body">
        <img src="img/produtos/foto<?= $_POST['id'] ?>-<?= $_POST['cor'] ?>.png"
          class="img-thumbnail img-responsive">
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
        </div>
      </div>
  </div>
</div>

</body>
</html>
