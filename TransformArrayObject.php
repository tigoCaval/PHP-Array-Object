<?php

/**
 * Class TransformArrayObject
 * Transformar array em objetos
 */
abstract class TransformArrayObject
{
   
    /**
     * Transfomar array multidimensional em object
     * @access private
     * @param array $array
     * @author Tiago ACP
     * @return void
     */
    private function arrayObjectMulti(array $array) : array
    {
         $arrayObject = [];
         foreach($array as $item => $value){
             $arrayObject[$item] = (object) $value;
         }
         return $arrayObject;
    }

    /**
     * Listar todos os dados do array
     * @param array $array
     * @author Tiago ACP
     * @return array
     */
    public function allArray(array $array) : array
    {
        return $this->arrayObjectMulti($array);
    }

    /**
     * Listar um object(array) específico
     * @param array $array
     * @param int $id
     * @author Tiago ACP
     * @return object
     */
    public function findArray(array $array, $id) : object
    {
        $arrayObject = $this->arrayObjectMulti($array);
        return $arrayObject[$id];
    }



}