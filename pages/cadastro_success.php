<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dip 5</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">

   
    <link rel="stylesheet" type="text/css" href="../css/cadastrarSuccess.css">
</head>

<body>

    <div class="container-success">
        <div class="success-image"><img src="https://static-wp-tor15-prd.torcedores.com/wp-content/uploads/2020/12/t12-4-603x338.jpg" /></div>
        
        <br><br>
        <h1 class="text-success">Muito obrigado, você se registrou no evento com sucesso</h1>
        <?php
       $ip = getHostByName(getHostName());
       $randomNumber =  rand();
          $code = "http://$ip/dip5";
          echo '<span>' . $randomNumber . '</span>';
          echo "<img src='https://chart.googleapis.com/chart?chs=100x100&cht=qr&chl=$code&choe=UTF-8' >";
        ?> 
    </div>
</body>

</html>