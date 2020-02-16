<?php
/******
 * @author Tiago ACP
 * Testando algoritmo
 * ****/
require_once "./Product.php";
require_once "./User.php";

$user = new User();
$userObject = $user->allArray($user->user);

$product= new Product();
$productObject = $product->allArray($product->product);

echo "<br>###### Lista de Produtos ######<br>";
foreach($productObject as $item){
    echo "ID: ".$item->id."<br>";
    echo "Descricao:  ".$item->descricao."<br>";
    echo "Estoque:  ".$item->estoque."<br>";
    echo "Preço: R$ ".$item->preco."<br>";
    echo "_____________________________________<br>";
}
echo "<br>###### Lista de Usuários ######<br>";

foreach($userObject as $item){

      echo "ID: ".$item->id."<br>";
      echo "Nome: ".$item->nome."<br>";
      echo "E-mail: ".$item->email."<br>";
      echo "Credencial: ".$item->credencial."<br>";
      echo "_____________________________________<br>";
}






