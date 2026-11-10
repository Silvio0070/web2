<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $nome = $_POST['nome'];

      echo "

<table border='1' cellspacing='0' width='100%'>

    <th colspan='2'><h1> IFPI TERESINHA CENTRAL</h1></th>

    <tr >
        <td colspan='2'><strong>Curso:</strong> Técnico em informatica</td>
    </tr>
    <tr>
        <td><strong>Turno:</strong> matutino</td>
        <td><strong>Turma: </strong>3124</td>
    </tr>
    <tr>
        <td colspan='2'><strong>Aluno:</strong>". $nome . " </td>
    </tr>
</table>
" . '<br> <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="fun1.php" method="post">
        <label for="nome_id">Insira seu nome:</label>
        <input type="text" name="nome" id="nome_id">
        <button type="submit">Enviar</button>

    </form>


</body>
</html>'
    ?>
</body>
</html>