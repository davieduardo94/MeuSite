<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Checkout Mirror Fashion</title>
    <meta name="viewport" content="width-device-width">
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
  <h1> Ótima escolha!</h1>
  <p>Obrigado pro comprar na Mirror Fashion!
    Preencha seus daddos para efetivar a compra</p>

    <h2> Sua compra</h2>
    <dl>
      <dt>Cor</dt>
      <dd><?=  $_POST['cor']?></dd>

      <dt>Tamanho</dt>
      <dd><?= $_POST['tamanho'] ?></dd>

      <dt>Produto</dt>
      <dd><?= $_POST['nome'] ?> </dd>

      <dt>Preço</dt>
      <dd><?= $_POST['preco'] ?> </dd>
    </dl>



</body>
</html>
