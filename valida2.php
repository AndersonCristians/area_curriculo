<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/css/style4.css">
    <title>Document</title>
</head>

<body>
    <div class="container">

        <?php
        $pasta_destino = 'src/img/';
        $extensao = pathinfo($_FILES['arquivo']['name'], PATHINFO_EXTENSION); // Extrai a extensão do arquivo
        $nome_novo = "curriculo." . $extensao; // Define o nome novo com a extensão original
        $arquivo_destino = $pasta_destino . $nome_novo; // Monta o caminho completo com o novo nome
        $arquivo_temp = $_FILES['arquivo']['tmp_name'];

        /* if (move_uploaded_file($arquivo_temp, $arquivo_destino)) :
            echo "<p>Arquivo enviado com sucesso.</p>";
            echo "<p>Nome do arquivo: {$nome_novo}</p>"; // Exibe o novo nome do arquivo
        else :
            echo "<p>Não foi possível fazer o upload do arquivo!</p>";
        endif; */

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nome = htmlspecialchars($_POST["nome"]);
            $telefone = htmlspecialchars($_POST["telefone"]);
            $email = htmlspecialchars($_POST["email"]);
            $nacionalidade = htmlspecialchars($_POST["nacionalidade"]);
            $data_de_nascimento = htmlspecialchars($_POST["data_de_nascimento"]);
            $estado_civil = htmlspecialchars($_POST["estado_civil"]);
            $rua = htmlspecialchars($_POST["rua"]);
            $numero = htmlspecialchars($_POST["numero"]);
            $complemento = htmlspecialchars($_POST["complemento"]);
            $bairro = htmlspecialchars($_POST["bairro"]);
            $municipio = htmlspecialchars($_POST["municipio"]);
            $estado = htmlspecialchars($_POST["estado"]);
            $objetivo = htmlspecialchars($_POST["objetivo"]);
            $escolaridade = htmlspecialchars($_POST["escolaridade"]);
            $curso = htmlspecialchars($_POST["curso"]);
            $instituicao_de_ensino = htmlspecialchars($_POST["instituição_de_ensino"]);
            $ano_de_conclusao = htmlspecialchars($_POST["ano_de_conclusão"]);
            $periodo_de_entrada = htmlspecialchars($_POST["periodo_de_entrada"]);
            $periodo_de_saida = htmlspecialchars($_POST["periodo_de_saida"]);
            $cargo = htmlspecialchars($_POST["cargo"]);
            $setor = htmlspecialchars($_POST["setor"]);
            $atividade_exercida = htmlspecialchars($_POST["atividade_exercida"]);
            $atividades = htmlspecialchars($_POST["atividades"]);
            $instituicao_extracurriculares = htmlspecialchars($_POST["instituição_extracurriculares"]);
            $curso_idiomas = htmlspecialchars($_POST["curso_idiomas"]);
            $nivel = htmlspecialchars($_POST["nivel"]);
            $instituicao_ingles = htmlspecialchars($_POST["instituição_ingles"]);

            // Apresentar os dados

            $filename = "curriculo.jpg";
            echo '<img src="src/img/' . htmlspecialchars($filename) . '" alt="Imagem Enviada" class="imagem">';

            echo "<p><span class='nome'> $nome</span></p>";
            echo "<p><span class='nacionalidade'><br> $nacionalidade , $estado_civil , $data_de_nascimento </p>";
            echo "<p><span class='endereco'><br> $rua, $numero, $bairro, $municipio , $estado </p>";

            echo "<p><span class='titulo_comunicacao'> TELEFONE:</p>";
            echo "<p><span class='titulo_comunicacao'> EMAIL:</p>";

            echo "<p><span class='comunicacao'> $telefone</p>";
            echo "<p><span class='comunicacao'> $email</p>";

            echo "<hr>";

            echo "<p><span class='titulo'> OBJETIVO<br></p>";
            echo "<p><span class='text_digitavel'> $objetivo</p>";

            echo "<hr>";

            echo "<p><span class='titulo'> FORMAÇÃO <br></p>";
            echo "<p><span class='text_digitavel'>$escolaridade em $curso no(a) $instituicao_de_ensino , Conclusão:$ano_de_conclusao </p>";

            echo "<hr>";

            

            echo "<p><span class='titulo'> EXPERIÊNCIA PROFISSIONAL <br></p>";
            echo "<p><span class='text_digitavel'>$periodo_de_entrada - $periodo_de_saida - $cargo, $setor , $atividade_exercida.</p>";

            echo "<hr>";

            echo "<p><span class='titulo'> INSTITUIÇÃO EXTRACURRICULARES <br></p>";
            echo "<p><span class='text_digitavel'>$atividades - $instituicao_extracurriculares.</p>";

            echo "<hr>";

            echo "<p><span class='titulo'> IDIOMAS <br></p>";
            echo "<p><span class='text_digitavel'>$curso_idiomas - $nivel - $instituicao_ingles .</p>";
        }
        ?>
    </div>

    <a class="submit" href="index.php">Voltar</a>
</body>

</html>