<?php
define('HOST', 'db4free.net:3306');
define('USUARIO', 'root_thatagarela');
define('SENHA', 'Danilo36-');
define('DB', 'localhost_thata');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possível conectar');