<?php

  //Define as informações de acesso
  //ao banco de dacos como constantes
  define('DB_SERVIDOR', 'localhost'); 
  define('DB_USUARIO', 'root');
  define('DB_SENHA', '');
  define('DB_BANCO', 'ticket');
  
  $dbc = @mysqli_connect(DB_SERVIDOR,DB_USUARIO,DB_SENHA,DB_BANCO) or die();

if (!$dbc)
  trigger_error('Não foi possível conectar ao MySQL: ' . mysqli_connect_error());

