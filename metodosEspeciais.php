<?php
namespace alura\teste\curso_novo;
trait metodosEspeciais
{
public function __get(string $nomeAtributo)
{
    $metodo = 'get' . ucfirst($nomeAtributo);
    return $this->$metodo();
}

public function __set(string $nomeAtributo, $valor): void
    {
        $this->$nomeAtributo = $valor;
    }


}