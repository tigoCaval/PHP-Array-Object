<?php
require_once "./TransformArrayObject.php";

/**
 * Class User
 * Apresentação de array teste, que será transformado em object 
 */
class User extends TransformArrayObject
{

    public $user = [
        
        1=>['id'=>1,'nome'=>'João','email'=>'joao@mail.com','credencial'=>'vendedor'],
        2=>['id'=>2,'nome'=>'Maria','email'=>'maria@mail.com','credencial'=>'gerente'],
        3=>['id'=>3,'nome'=>'Bia','email'=>'bia@mail.com','credencial'=>'vendedora'],
        4=>['id'=>4,'nome'=>'Pedro','email'=>'pedro@mail.com','credencial'=>'TI']
    ];


}