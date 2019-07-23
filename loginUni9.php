<?php

$arquivo = file('loginUni9.txt');

$linha = 0; //loop

while ($linha < count($arquivo)) {

    $nome = $arquivo[$linha]; // Primeira linha
    $email = $arquivo[$linha + 1]; // Segunda linha

    // Inicia o CURL
    $ch = curl_init();

    // Valores que deseja enviar.
    $valoresPost = [
        'user' => $ra,
        'Password' => $senha
    ];

    // Define as configurações do CURL:    
    curl_setopt_array($ch, [

       // Define o URL:
       CURLOPT_URL => 'https://aluno.uninove.br/valida.php',

       // Indica que é um POST:
       CURLOPT_POST => true,

       // Define a array que irá enviar (neste caso será multipart/form-data):
       CURLOPT_POSTFIELDS => $valoresPost,

       // Indica para receber os resultados:
       CURLOPT_RETURNTRANSFER => true

    ]);

    // Faz a requisição (e obtem resposta):    
    $result = curl_exec($ch);

    if($result.preg_match('/(cChave)/' , 'cChave', $matches, ))){

}else{}

    // Obtem informações do CURL (como código HTTP):
    $info = curl_getinfo($ch);

    // Encerra o CURL:
    curl_close($ch);

    if ($info["http_code"] === 200) {

        // Sucesso
        echo "Foi";
        echo $result;

    }else{

        // Falha
        echo "Deu ruim";
        echo $result;
    }

    $linha = $linha + 2;
}