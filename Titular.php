<?php
namespace alura\teste\curso_novo;

use alura\teste\curso_novo\Pessoa;
use alura\teste\curso_novo\Endereco;
class Titular extends Pessoa{
    use metodosEspeciais;
    private Endereco $endereco;


    function __construct(string $nome,string $cpf,Endereco $endereco)
    {
       parent::__construct($nome,$cpf);

        $this->validar_nome($nome);


        $this->endereco=$endereco;
    }


    function get_endereco():Endereco
    {
    return $this->endereco;
    }
}