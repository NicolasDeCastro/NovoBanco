<?php
namespace alura\teste\curso_novo;
 abstract class Pessoa{

    protected string $cpf;
    protected string $nome;

    function __construct( string $cpf,string $nome)
    {

    $this->cpf=$cpf;
    $this->nome=$nome;
    $this->validar_nome($nome);

    }

    function set_nome(string $nome_adicionar):void
    {

        $this->nome=$nome_adicionar;
    }

    function get_nome():string
    {
        return $this->nome;



    }

    function set_cpf($cpf_adicionar)
    {
        $this->cpf=$cpf_adicionar;

    }


    function get_cpf():string
    {
    return $this->cpf;
    }

    protected function validar_nome(string $nome):void
    {
    
        if(strlen($nome)<5){
            echo"nome invalido,pelo menos 5 caracteres".PHP_EOL;
            exit();
        }
    }
}