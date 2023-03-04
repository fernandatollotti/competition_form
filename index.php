<?php include "services/message.php"; ?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Inscrição</title>

    <!-- css -->
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <div class="container">
      <div class="center">
        <div class="wrap">
          <h2>Formulário de Inscrição para Competição de Natação</h2>
          <form class="form" action="app.php" method="post">
            <div class="form-group">
              <label>Nome<em>*</em></label>
              <input type="text" name="name" />
            </div>

            <div class="form-group">
              <label>Idade<em>*</em></label>
              <input type="text" name="age" />
            </div>

            <?php 

              $message_error = get_message_error();
              if ( !empty( $message_error ) )
                echo $message_error;

            ?>

            <div class="form-group">
              <label class="lbl_cat">Qual sua categoria?</label>
            </div>

            <?php

              $message_success = get_message_success();

              if ( !empty( $message_success ) )
                echo $message_success;
            
            ?>

            <input class="btn_submit" type="submit" value="Enviar os dados" />
          </form>
        </div>
      </div>
    </div>
  </body>
</html>