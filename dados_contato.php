<!DOCTYPE html>
<html>
    <!--
		Disciplina: Linguagens de Programação III
		Tarefa: Semana 3 - Tarefa avaliativa - Organizando e estruturando o site com PHP
		Data: 19/04/2022
	-->
    <head>
        <meta charset="utf-8">
        <title>Recomendações de livros - Livros</title>
        <link rel="stylesheet" href="estilo.css" type="text/css">
    </head>
    <body>
        <?php
            include("topo.php");        
        ?>

        <div id='corpo'>
            <main>         
                <h1>Dados de contatos recebidos:</h1>
                <?php
                    $nome = $_POST['nome'];
                    $email = $_POST['email'];
                    $cidade = $_POST['cidade'];
                    $uf = $_POST['estado'];
                    $livro = $_POST['livro'];
                    $nota = $_POST['nota'];
                    $msg = $_POST['mensagem'];

                    echo "Nome:" . $nome . "<br>";
                    echo "Email:" . $email . "<br>";
                    echo "Cidade:" . $cidade . "<br>";
                    echo "Estado:" . $uf . "<br>";
                    echo "Livro:" . $livro . "<br>";
                    echo "Nota:" . $nota . "<br>";
                    echo "Mensagem:" . $msg . "<br>";

                    $lista_contatos = array("Nome" => $nome, "Email" => $email, "Cidade" => $cidade,  "Estado" => $uf, "Livro" => $livro, "Nota" => $nota,  "Mensagem" => $msg);

                    echo "<hr> Vetor criado: <br>";
                    print_r($lista_contatos);                
                
                    if(file_exists("arquivo_contato.json")){
                        $string = file_get_contents("arquivo_contato.json");
                        $json = json_decode($string, true);
                    }
                
                    $json["arquivo_contatos"][] = $lista_contatos;    
                
                    $fp = fopen('arquivo_contatos.json', 'w');
                    if($fp == false){
                        print(error_get_last());
                    }

                    fwrite($fp, json_encode($json));
                    fclose($fp); 
               ?>
                <h3 style='text-align:center;'>Seu contato foi registrado com sucesso \o/ Muito obrigado :)</h3>
                ?>
            </main>
        </div>
    </body>
</html>