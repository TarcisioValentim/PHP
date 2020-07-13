<?php

$conn = new mysqli("localhost", "root", "");
mysqli_set_charset($conn, "utf8");

$arquivo   =$_FILES["file"]["tmp_name"];
    $nome       =$_FILES["file"]["name"];

    $ext = explode(".", $nome);

    $extensao  = end($ext);
    
    if ($extensao != "csv" && $extensao != "xlsx") {
        echo "Extensao nao aceita!";
    }else{
        $objeto  = fopen($arquivo, 'r');

        while (($dados = fgetcsv($objeto, 1000, ";")) !== FALSE)
         {
            $nome = utf8_encode($dados[0]);
            $sobrenome = utf8_encode($dados[1]);

           $result = $conn->query("INSERT INTO alunos (nome, sobrenome) values('$nome', '$sobrenome')");
        }
        
        if ($result) {
            # code...
            echo "Dados inseridos com sucesso!!!";
        }else{
        echo "Erro: ao inserir os dados";
        }
    }
?>