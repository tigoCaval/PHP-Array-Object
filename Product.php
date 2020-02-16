<?php
require_once "./TransformArrayObject.php";

/**
 * Class Product
 * Apresentação de array teste, que será transformado em object 
 */
class Product extends TransformArrayObject
{

    public $product = [
        1=>['id'=>1,'descricao'=>'Arroz','estoque'=>'10','preco'=>'20.55'],
        2=>['id'=>2,'descricao'=>'Feijão','estoque'=>'5','preco'=>'10.43'],
        3=>['id'=>3,'descricao'=>'Macarrão','estoque'=>'15','preco'=>'5.63']
    ];


   


}