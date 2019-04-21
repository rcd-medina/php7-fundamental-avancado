
<?php


$pessoas[] = ['nome' => 'Felipe de Souza', 'idade' => 26];
$pessoas[] = ['nome' => 'Fernanda Lima', 'idade' => 22];
$pessoas[] = ['nome' => 'Cassio Guimaraes', 'idade' => 48];

$outro_array = json_encode($pessoas);
print $outro_array . "<br><br>";

//
// Recupera os dados de uma estrutura no padrão json.
$array_pessoas = json_decode($outro_array, true);
var_dump($array_pessoas);

file_put_contents('pessoas.json', $outro_array);


$conteudo = file_get_contents('pessoas.json');
$pessoaArquivo = json_decode($conteudo, true);

echo "<br><br>";
var_dump($pessoaArquivo);
?>
