<?
  //Define as informações de acesso
  //ao banco de dacos como constantes
  echo 'teste';
  define('DB_SERVIDOR','localhost'); 
  define('DB_USUARIO','teste');
  define('DB_SENHA','teste1');
  define('DB_BANCO','loja');
  
  $dbc = @mysqli_connect(DB_SERVIDOR,DB_USUARIO,DB_SENHA,DB_BANCO);

if (!$dbc)
  trigger_error('Não foi possível conectar ao MySQL: ' . mysqli_connect_error());

echo 'teste';
?>