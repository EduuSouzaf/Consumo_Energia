<!DOCTYPE HTML>
<html>
<head>
    <style>
        .error {color: #FF0000;}
    </style>
</head>
<body>

<h2>PHP Form Validation Example</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="consumo.php">
    Nome: <label><input name="nome" type="text"></label><br>
    Sexo: <label><input name="sexo" type="text"></label><br>
    Endereco: <label><input name="endereco" type="text"></label><br>
    Cep: <label><input name="cep" type="text"></label><br>
    Bairro: <label><input name="bairro" type="text"></label><br>
    Cpf: <label><input name="cpf" type="text"></label><br>
    Nascimento: <label><input name="nascimento" type="text"></label><br>
    Data Vencimento: <label><input name="data_vencimento" type="text"></label><br>
    Unidade consumidora: <label><input name="unidade_consumidora" type="text"></label><br>
    E-mail: <label><input name="email" type="text"></label><br>
    Valor total: <label><input name="valor_total" type="text"></label><br>

    <input type="submit" name="Gravar" value="gravar">
</form>
</body>
</html>