<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Turma Legal</title>
    </head>
    <body>

        <div id="container">
            <h1>Essa é turma mais legal!!</h1>
            <?php
            foreach ($funcionarios as $funcionario) {
                echo $funcionario['id'] . ' ' . $funcionario['nome'] . '<br>';
            }
            ?>


        </div>

    </body>
</html>