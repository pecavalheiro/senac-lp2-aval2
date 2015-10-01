<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Turma Legal</title>
    </head>
    <body>
        <form enctype="multipart/form-data" method="post" action="<?php echo base_url("index.php/Senac/faz_cadastro"); ?>">
            Nome: <input type="text" name="nome"><br>
            E-mail: <input type="email" name="email"><br>
            Senha: <input type="password" name="senha"><br>
            Foto: <input type="file" name="foto"><br>
            <button>Enviar</button>
        </form>
    </body>
</html>