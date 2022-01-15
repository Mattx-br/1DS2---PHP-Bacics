<?php
// podemos criar array de diferentes formas
// existem vários modos para percorrer arrays, no entanto, o mais simples deles é utilizando o laço de repetição foreach em PHP. Este comando funciona só com arrays e objetos, e retorna um erro quando utilizado com outros tipos de expressões.


// :::::::::::::::::::::::LISTA 1
$lista1 = array(5, "casa", true);

echo "Lista 1 <br>";

foreach($lista1 as $value){
    echo "$value <br>";
}

echo "<br>";
// :::::::::::::::::::::LISTA 2

$lista2[] = 5;
$lista2[] = "casa";
$lista2[] = true;

echo "Lista 2 <br>";

foreach($lista2 as $value){
    echo "$value <br>";
}

echo "<br>";
// :::::::::::::::::::::LISTA 3

$lista3 = [5, "casa", true];

echo "Lista 3 <br>";

foreach($lista3 as $value){
    echo "$value <br>";
}

echo "<br>";
// :::::::::::::::::::::LISTA 4

$lista4 = array(0 => 5, 1=> "casa", 2=> true);

echo "Lista 4 <br>";

foreach($lista4 as $value){
    echo "$value <br>";
}

echo "<br>";
// :::::::::::::::::::::LISTA 5

$lista5[0] = 5;
$lista5[1] = "casa";
$lista5[0] = true;

echo "Lista 5 <br>";

foreach($lista5 as $value){
    echo "$value <br>";
}
echo "<br>";

// :::::::::::::::::::::LISTA 6

$lista6= [0 => 5, 1 => "casa", 2 => true];

echo "Lista 6 <br>";

foreach($lista6 as $value){
    echo "$value <br>";
}
echo "<br>";

/*Outro diferencial do PHP é que as chaves podem ser representadas por números inteiros ou strings. A figura 3 exemplifica o uso da variável pessoa, que tem duas posições definidas pelas string "nome" e "sobrenome", uma posição inteira 2, e a próxima posição iniciada automaticamente. Nesse caso, como a ultima chave inteira foi a numero 2, a proxima posição válida é o numero 3.
O resultado pode ser conferido na tela. Por fim, note que usamos print_r para exibir os dados do array, o echo é usado para imprimir variaveis simples, enquanto utilizamos o print_r para arrays e objetos
*/

// :::::::::::::::::::::::PESSOA

// retornando chave e valor

echo "<br>";

$pessoa["nome"]= "Miguel";
$pessoa["sobrenome"] = "Andrade";
$pessoa[2] = "Rua dos bobos, 0";
$pessoa[]="não fumante";
print_r ($pessoa);

echo "<br>";
echo "<br>";

// ::::::::::::::::::::::::::::::CAPITAIS
$capitais["SP"]="São Paulo";
$capitais["RJ"]="Rio de Janeiro";
$capitais["RR"]="Roraima";
$capitais["RO"]="Rondônia";

foreach($capitais as $sigla => $capital){
    echo $sigla . " - " . $capital . "<br>";
}

echo "<br>";
echo "<br>";

// ::::::::::::::::::::::::::::::ITENS 1
$item['b'] = "Batata";
$item['c'] = "Cenoura";
$item['a'] = "Tomate";
$item[] = "Pêra"; 
ksort($item); //key sort de CRESCENTE de acordo com a CHAVE
print_r($item);

echo "<br>";
echo "<br>";

// ::::::::::::::::::::::::::::::ITENS 2
$item2['b'] = "Crossfire";
$item2['c'] = "Alone";
$item2['a'] = "Infinity";
$item2[] = "Anchor"; 
krsort($item2); //key sort de CRESCENTE de acordo com a CHAVE
print_r($item2);

echo "<br>";
echo "<br>";

// ::::::::::::::::::::::::::::::ITENS 3
$item3['b'] = "uva";
$item3['c'] = "morango";
$item3['a'] = "beterraba";
$item3[] = "iguana";
rsort($item3); //classifica os elementos do array/matriz em ordem alfabética descendente
print_r($item3);

/*
OUTRAS FORMAS DE USAR ARRAY:
https://www.php.net/manual/pt_BR/array.sorting.php#:~:text=O%20PHP%20tem%20muitas%20fun%C3%A7%C3%B5es%20para%20lidar%20com,os%20valores%20do%20array%20n%C3%A3o%20s%C3%A3o%20mantidas%20
*/
?>

