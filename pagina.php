<?php
require_once "setup/config.php";
require_once "setup/simulador_db.php";

if(DB == $conexao["db"]  && USER ==$conexao["user"] && PASS == $conexao["senha"]){
  echo "Banco de Dados Conectado";
}else{
  echo "Erro ao  conectar o Banco de Dados";
}
?>
