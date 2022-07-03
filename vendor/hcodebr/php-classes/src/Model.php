<?php

namespace Hcode;

class Model
{

    private $values = [];

    public function __call($name, $args)
    {

        //método para verificar as 3 primeiras letras da função
        $method = substr($name, 0, 3); //a partir do 0 traga 3 caracteres

        $fieldName = substr($name, 3, strlen($name));

        switch($method)
        {

            case "get":

                    $this->values[$fieldName];

                break;

            case "set":

                    $this->values[$fieldName] = args[0];
                
                break;

        }

    }

    public function setData($data = array())
    {

        foreach($data as $key => $value){

            $this->{"set".$kay}($value);//varialvel dinâmica

        }

    }

    public function getValues()
    {

        return $this->values;

    }

}

?>