<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = $_POST["nome"];
        $cep = $_POST["cep"];
        $rua = $_POST["rua"];
        $bairro = $_POST["bairro"];
        $cidade = $_POST["cidade"];
        $uf = $_POST["uf"];
        $ibge = $_POST["ibge"];
       
        echo "<p><strong>Nome:</strong> $nome</p>";
        echo "<p><strong>CEP:</strong> $cep</p>";
        echo "<p><strong>Rua:</strong> $rua</p>";
        echo "<p><strong>Bairro:</strong> $bairro</p>";
        echo "<p><strong>Cidade:</strong> $cidade</p>";
        echo "<p><strong>Estado:</strong> $uf</p>";
        echo "<p><strong>IBGE:</strong> $ibge</p>";
    } else {
        echo "<p>Nenhum dado recebido.</p>";
    }
    ?>
 
 