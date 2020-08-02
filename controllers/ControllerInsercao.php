<?php require_once("../class/ClassInsercao.php");   

#Receber Variaveis
$Nome=filter_input(INPUT_POST,'nome',FILTER_SANITIZE_STRING);
$Email=filter_input(INPUT_POST,'email',FILTER_SANITIZE_STRING);
$Telefone=filter_input(INPUT_POST,'telefone',FILTER_SANITIZE_STRING);
$TelefoneWp=filter_input(INPUT_POST,'telefonewp',FILTER_SANITIZE_STRING);
$Idade=filter_input(INPUT_POST,'idade',FILTER_SANITIZE_STRING);
$Cpf=filter_input(INPUT_POST,'cpf',FILTER_SANITIZE_STRING);
$Rg=filter_input(INPUT_POST,'rg',FILTER_SANITIZE_STRING);
$Salario=filter_input(INPUT_POST,'salario',FILTER_SANITIZE_STRING);
$DataNascimento=filter_input(INPUT_POST,'datanascimento',FILTER_SANITIZE_STRING);


#Instanciar a nossa classe
$ObjCrud=new ClassInsercao($Nome,$Email,$Telefone,$TelefoneWp,$Idade,$Cpf,$Rg,$Salario,$DataNascimento);
$ObjCrud->InserirDB();

echo "<script>alert('Cadastro efetuado com sucesso!');
window.location.href='../index.php';
</script>";
?>