<!DOCTYPE html>

<html>

<head>

    <link rel="stylesheet" href="src/css/style3.css">
    <link rel="stylesheet" href="src/css/reset.css">

    <title>Trabalho_WebII</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body>
    <div class=cabecalho>
        <H1 id="Titulo_Página">Área do Curriculo </H1> <br> <br>
    </div>
    <br> <br>
    <div>
        <form action="valida2.php" class="formulario" method="post" enctype="multipart/form-data">>

            <div class=dados_pessoais>
                <h1 class="titulo">Dados Pessoais </h1> <br>

                <label class="name" id="dados_titulo">Nome Completo: <br>
                    <input type="text" name="nome" class="text_digitavel" placeholder="Digite o seu nome completo aqui" required>
                </label>

                <label class="name" id="dados_titulo">Telefone: <br>
                    <input type="text" name="telefone" class="text_digitavel" placeholder="Digite o seu número de Telefone aqui" required>
                </label> <br>

                <label class="name" id="dados_titulo">Email: <br>
                    <input type="text" name="email" class="text_digitavel" placeholder="Digite o seu email aqui" required>
                </label> <br>

                <label class="name" id="dados_titulo">Foto: <br>
                    <input type="hidden" name="MAX_FILE_SIZE" value="<?php echo 1024 * 1024; ?>" />
                    <input type="file" name="arquivo" id="arquivo" /><br>
                </label> <br>

                <label class="name" id="dados_titulo">Nacionalidade: <br>
                    <input type="text" name="nacionalidade" class="text_digitavel" placeholder="Digite a sua nacionalidade aqui" required>
                </label> <br>

                <label class="name" id="dados_titulo">Data de Nascimento: <br>
                    <input type="date" name="data_de_nascimento" class="text_digitavel" placeholder="Digite a data de Nascimento aqui" required>

                </label> <br>

                <label class="name" id="dados_titulo">Estado civil: <br>
                    <select class="text_digitavel" id="mes" name="estado_civil" required>
                        <option value="" disabled selected hidden>Selecione o tipo</option>
                        <option value="Solteiro(a)">Solteiro(a)</option>
                        <option value="Casado(a)">Casado(a)</option>
                        <option value="União Estável">União Estável</option>
                        <option value="Viuvo(a)">Viuvo(a)</option>
                    </select>
                </label> <br> <br>
            </div>
            <br> <br> <br> <br>


            <div class=Endereço>
                <h1 class="titulo">Endereço </h1>

                <label class="name" id="dados_titulo">Rua <br>
                    <input type="text" class="text_digitavel" name="rua" placeholder="Digite o sua rua aqui" required>
                </label>
                <label class="name" id="dados_titulo">Número <br>
                    <input type="text" class="text_digitavel" name="numero" placeholder="Digite o seu número aqui" required>
                </label> <br>
                <label class="name" id="dados_titulo">Complemento <br>
                    <input type="text" class="text_digitavel" name="complemento" placeholder="Digite o seu complemento aqui">
                </label> <br>
                <label class="name" id="dados_titulo">Bairro <br>
                    <input type="text" class="text_digitavel" name="bairro" placeholder="Digite o seu Bairro aqui" required>
                </label> <br>
                <label class="name" id="dados_titulo">Município <br>
                    <input type="text" class="text_digitavel" name="municipio" placeholder="Digite o seu Município aqui" required>
                </label> <br>
                <label class="name" id="dados_titulo">Estado: <br>
                    <select class="text_digitavel" id="estado" name="estado" required>
                        <option value="" disabled selected hidden>Selecione o seu Estado</option>
                        <option value="AC">AC - Acre</option>
                        <option value="AL">AL - Alagoas</option>
                        <option value="AP">AP - Amapá</option>
                        <option value="AM">AM - Amazonas</option>
                        <option value="BA">BA - Bahia</option>
                        <option value="CE">CE - Ceará</option>
                        <option value="DF">DF - Distrito Federal</option>
                        <option value="ES">ES - Espírito Santo</option>
                        <option value="GO">GO - Goiás</option>
                        <option value="MA">MA - Maranhão</option>
                        <option value="MT">MT - Mato Grosso</option>
                        <option value="MS">MS - Mato Grosso do Sul</option>
                        <option value="MG">MG - Minas Gerais</option>
                        <option value="PA">PA - Pará</option>
                        <option value="PB">PB - Paraíba</option>
                        <option value="PR">PR - Paraná</option>
                        <option value="PE">PE - Pernambuco</option>
                        <option value="PI">PI - Piauí</option>
                        <option value="RJ">RJ - Rio de Janeiro</option>
                        <option value="RN">RN - Rio Grande do Norte</option>
                        <option value="RS">RS - Rio Grande do Sul</option>
                        <option value="RO">RO - Rondônia</option>
                        <option value="RR">RR - Roraima</option>
                        <option value="SC">SC - Santa Catarina</option>
                        <option value="SP">SP - São Paulo</option>
                        <option value="SE">SE - Sergipe</option>
                        <option value="TO">TO - Tocantins</option>
                    </select>

                </label> <br> <br>
            </div>

            <div id="objetivo">
                <h1 class="titulo">Objetivo </h1> <br>
                <input type="text" class="text_digitavel" name="objetivo" placeholder="Digite seu objetivo na empresa aqui" required>
                </label>
                <br> <br>
            </div>
            <div class="Formação escolar">

                <h1 class="titulo">Formação escolar </h1> <br>

                <label class="name" id="dados_titulo">Tipo de escolaridade: <br>
                    <select class="text_digitavel" id="escolaridade" name="escolaridade" required>
                        <option value="" disabled selected hidden>Selecione o seu nível de escolaridade</option>
                        <option value="nenhuma">Nenhuma</option>
                        <option value="Educação Infantil">Educação Infantil</option>
                        <option value="Ensino Fundamental I">Ensino Fundamental I</option>
                        <option value="Ensino Fundamental II">Ensino Fundamental II</option>
                        <option value="Ensino Médio">Ensino Médio</option>
                        <option value="Ensino Técnico">Ensino Técnico</option>
                        <option value="Ensino Superior">Ensino Superior</option>
                        <option value="Pós-graduação Lato Sensu">Pós-graduação Lato Sensu (Especialização e MBA)</option>
                        <option value="Pós-graduação Stricto Sensu (Mestrado)">Pós-graduação Stricto Sensu (Mestrado)</option>
                        <option value="Pós-graduação Stricto Sensu (Doutorado)">Pós-graduação Stricto Sensu (Doutorado)</option>
                    </select>
                </label>

                <label class="name" id="dados_titulo">Curso: <br>
                    <input type="text" class="text_digitavel" name="curso" placeholder="Digite o cargo aqui" required> <br> <br>
                </label>

                <label class="name" id="dados_titulo">Instituição de ensino: <br>
                    <input type="text" class="text_digitavel" name="instituição_de_ensino" placeholder="Digite o salário aqui" required> <br> <br>
                </label>

                <label class="name" id="dados_titulo">Ano de Conclusão: <br>
                    <input type="date" class="text_digitavel" name="ano_de_conclusão" placeholder="Digite a data aqui" required>
                </label> <br> <br>

            </div>
            <br> <br> <br> <br>
            <br> <br>

            <div class="Experiência Profissional">
                <h1 class="titulo">Experiência Profissional </h1> <br>

                <label class="name" id="dados_titulo">Período de entrada:
                    <input type="date" class="text_digitavel" name="periodo_de_entrada" placeholder="Digite o período de entrada aqui">
                </label>

                <label class="name" id="dados_titulo">Período de saída:
                    <input type="date" class="text_digitavel" name="periodo_de_saida" placeholder="Digite o período de saida aqui"> <br>
                </label>

                <label class="name" id="dados_titulo">Cargo ou função:
                    <input type="text" class="text_digitavel" name="cargo" placeholder="Digite o cargo ou função aqui">
                </label>

                <label class="name" id="dados_titulo">Setor ou local:
                    <input type="text" class="text_digitavel" name="setor" placeholder="Digite o Setor ou local aqui">
                </label>

                <label class="name" id="dados_titulo">Atividade exercida: <br>
                    <input type="text" class="text_digitavel" name="atividade_exercida" placeholder="Digite a atividade exercida aqui">
                </label> <br> <br>
            </div>
            <br> <br> <br> <br>
            <br> <br>

            <div class="Atividades Extra Curriculares">

                <h1 class="titulo">Atividades Extra Curriculares </h1> <br>

                <label class="name" id="dados_titulo">Atividades: <br>
                    <input type="text" class="text_digitavel" name="atividades" placeholder="Digite a atividade aqui"> <br> <br>
                </label>

                <label class="name" id="dados_titulo">Instituição: <br>
                    <input type="text" class="text_digitavel" name="instituição_extracurriculares" placeholder="Digite a Instituição aqui">
                </label><br> <br>
            </div>
            <br><br> <br> <br>
            <div class="Idiomas">

                <h1 class="titulo">Idiomas </h1>


                <label class="name" id="dados_titulo">Curso: <br>
                    <select class="text_digitavel" id="curso_idiomas" name="curso_idiomas">
                        <option value="" disabled selected hidden>Selecione um idioma</option>
                        <option value="mandarim">Mandarim</option>
                        <option value="espanhol">Espanhol</option>
                        <option value="ingles">Inglês</option>
                        <option value="hindi">Hindi</option>
                        <option value="arabe">Árabe</option>
                        <option value="português">Português</option>
                        <option value="bengali">Bengali</option>
                        <option value="russo">Russo</option>
                        <option value="japones">Japonês</option>
                        <option value="punjabi">Punjabi</option>
                        <option value="punjabi">outro</option>
                    </select>

                </label>

                <label class="name" id="dados_titulo">Nível: <br>
                    <input type="text" class="text_digitavel" name="nivel" placeholder="Digite o nível aqui">
                </label>
                <label class="name" id="dados_titulo">Instituição: <br>
                    <input type="text" class="text_digitavel" name="instituição_ingles" placeholder="Digite o nome da Instituição aqui">
                </label> <br> <br>
            </div>
    </div>
    <br> <br>
    <input type="submit" id="submit" value="Enviar Curriculo" />

    </form>
    </div>
    <br> <br>
</body>

</html>