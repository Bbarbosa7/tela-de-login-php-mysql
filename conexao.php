<?php
define('HOST', 'localhost');
define('USER', 'root');
define('PASSWD', '');
define('DB', 'login');

$conexao = mysqli_connect(HOST, USER, PASSWD, DB) or die ('Ooops! Não foi possível se conectar');


