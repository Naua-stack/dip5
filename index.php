<?php
require 'config.php';
$eventos = [];
$sql = $pdo->query("SELECT * FROM eventos");
if ($sql->rowCount() > 0) {
    $eventos = $sql->fetchAll(PDO::FETCH_ASSOC);
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dip 5</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/bulma.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/lista.css">
</head>

<body>
    <section class="list is-success is-fullheight">
        <div class="list-body">

            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                    <div class="image-container">
                        <img src="./assets/teams.png" />
                    </div>


                    <h3 class="title has-text-white">Sistema de Cadastro de usuário em eventos</h3>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nome</th>
                                <th scope="col">Data</th>
                                <th scope="col">Ações</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($eventos as $evento_data) {

                                echo '<tr>';
                                echo '<td>' . $evento_data['idevento'] . '</td>';
                                echo '<td>' . $evento_data['nome'] . '</td>';
                                echo '<td>' . $evento_data['data'] . '</td>';
                                echo '<td><a href="pages/cadastrar.php?id=' . $evento_data['idevento'] . '">Cadastrar<a/></td>';
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</body>

</html>