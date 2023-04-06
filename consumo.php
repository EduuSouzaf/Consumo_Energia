<?php
if (isset($_POST['gravar'])){
    if ($_POST['gravar'] == "inserir"){
        inserirParceiro();
    }
}

function abrirBanco(){
    $conexao = new mysqli('localhost', "root", '', 'consumo_energia');
    return $conexao;
}
function inserirParceiro(){
    $banco  = abrirBanco();
    $sql = "INSERT INTO parceiro(nome, sexo, endereco, cep, bairro, cpf, data_nascimento, data_vencimento, unidade_consumidora, email, valor_total)" . "values ('{$_POST['nome']}', '{$_POST['sexo']}','{$_POST['endereco']}','{$_POST['cep']}','{$_POST['bairro']}','{$_POST['cpf']}','{$_POST['nascimento']}','{$_POST['data_vencimento']}','{$_POST['unidade_consumidora']}','{$_POST['email']}','{$_POST['valor_total']}')";
    $banco->query($sql);
    $banco->close();
    voltarIndex();
}

function voltarIndex(){
    header("location:Consumo_energia.php");
}
