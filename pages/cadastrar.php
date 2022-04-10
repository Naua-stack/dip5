<?php
require '../config.php';
$id = filter_input(INPUT_GET, 'id');
?>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" type="text/css" href="../css/cadastrar.css">
  <title>Formulário Cadastro no evento</title>
</head>

<body>

  <!-- <img src="https://logodownload.org/wp-content/uploads/2016/11/nba-logo-1.png" width="250" height="auto" class="img-responsive"/> -->
  <img src="https://logodownload.org/wp-content/uploads/2016/11/nba-logo-1.png" alt="Nature" class="responsive">

  <div class="container">
    <form action="cadastrar_action.php" method="post">
      <fieldset>
        <legend><b>Fórmulário de Cadastro no evento</b></legend>
        <input type="hidden" name="idevento" value="<?= $id; ?>" />
        <br><br>
        <div class=inputContainer>
          <input type="text" name="nome" required class="input" />
          <label class="labelInput">Nome:</label>
        </div>
        <br><br>
        <div class=inputContainer>
          <input type="text" name="email" required class="input" required />
          <label class="labelInput">Email:</label>
        </div>
        <br><br>
        <div class=inputContainer>
          <input type="cpf" name="cpf" class="input" required maxlength="11" minlength="11"/>
          <label class="labelInput">CPF:</label>
        </div>
        <br><br>
        <div class=inputContainer>
          <input type="phone" name="telefone" class="input" required maxlength="11" minlength="11"/>
          <label class="labelInput">Telefone:</label>
        </div>
        <br><br>
        <input type="submit" value="Cadastrar" name="submit" id="submit">
      </fieldset>
    </form>
  </div>

</body>

</html>