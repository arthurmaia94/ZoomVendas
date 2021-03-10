<?php
 
require_once 'init.php';
 
// pega os dados do formuário
$nome = isset($_POST['nome']) ? $_POST['nome'] : null;
$email = isset($_POST['email']) ? $_POST['email'] : null;
$cpf = isset($_POST['cpf']) ? $_POST['cpf'] : null;
$telefone = isset($_POST['tel']) ? $_POST['tel'] : null;
$expec = isset($_POST['expectativa']) ? $_POST['expectativa'] : null;
$cadastro = isset($_POST['cad']) ? $_POST['cad'] : null;
$termos = isset($_POST['accept']) ? $_POST['accept'] : null;
$numero = isset($_POST['cod']) ? $_POST['cod'] : null;

// validação
// if (empty($username) || empty($usermail) || empty($userpass)){
//     echo "Volte e preencha todos os campos";
//     exit;
// }

// insere no banco
$PDO = db_connect();
$sql = "INSERT INTO cadastros(nome, email, cpf, telefone, expectativa, cadastro, termos, protocolo) 
VALUES(:nome, :email, :cpf, :telefone, :expectativa, :cadastro, :termos, :protocolo)";
$stmt = $PDO->prepare($sql);
$stmt->bindParam(':nome', $nome);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':cpf', $cpf);
$stmt->bindParam(':telefone', $telefone);
$stmt->bindParam(':expectativa', $expec);
$stmt->bindParam(':cadastro', $cadastro);
$stmt->bindParam(':termos', $termos);
$stmt->bindParam(':protocolo', $numero);

if ($stmt->execute()){
    echo "<script type='text/javascript'>alert('Obrigado!\\nSua cadastro foi efetuado.'); location.href='http://localhost/zoom/';</script>" ;
}else{
    echo "Erro ao cadastrar";
    print_r($stmt->errorInfo());
}
