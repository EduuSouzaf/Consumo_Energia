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
    <table border="1">
        <tbody>
        <tr>
            <td>Nome</td>
            <td><input type="text" name="nome" value=""></td>
        </tr>
        <tr>
            <td>Sexo</td>
            <td><input type="text" name="sexo" value=""></td>
        </tr>
        <tr>
            <td>Endereço</td>
            <td><input type="text" name="endereco" value=""></td>
        </tr>
        <tr>
            <td>Cep</td>
            <td><input type="text" name="cep" value=""></td>
        </tr>
        <tr>
            <td>Bairro</td>
            <td><input type="text" name="bairro" value=""></td>
        </tr>
        <tr>
            <td>Cpf</td>
            <td><input type="text" name="cpf" value=""></td>
        </tr>
        <tr>
            <td>Data Nascimento</td>
            <td><input type="date" name="nascimento" value=""></td>
        </tr>
        <tr>
            <td>Data Vencimento</td>
            <td><input type="date" name="data_vencimento" value=""></td>
        </tr>
        <tr>
            <td>Unidade consumidora</td>
            <td><input type="text" name="unidade_consumidora" value=""></td>
        </tr>
        <tr>
            <td>E-mail</td>
            <td><input type="text" name="email" value=""></td>
        </tr>
        <tr>
            <td>Valor total</td>
            <td><input type="text" name="valor_total" value=""></td>
        </tr>
        <tr>
            <td><input type="hidden" name="gravar" value="inserir"></td>
            <td><input type="submit" name="enviar" value="Enviar"></td>
        </tr>
        </tbody>
    </table>
</form>
</body>
</html>