<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Turma Legal</title>
        <style>
            img{
                height: 30px;
            }
        </style>
    </head>
    <body>

        <div id="container">
            <h1>Essa é turma mais legal!!</h1>
            <ul>


                <?php
                foreach ($funcionarios as $funcionario) {
                    echo '<li>';
                    if ($funcionario['img']) {
                        echo '<img src="' . base_url('uploads/' . $funcionario['img']) . '">';
                    }
                    echo $funcionario['id'] . ' - ' . $funcionario['nome'];
                    echo '</li>';
                }
                ?>
            </ul>

        </div>

    </body>
</html>