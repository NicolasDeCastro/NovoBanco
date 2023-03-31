<?php
namespace alura\teste\curso_novo;
 final class Endereco{
    private string $cidade;
    private string $bairro;
    private string $rua;
    private string $numero;

    function __construct( string $cidade, string $bairro,string $rua,string $numero)
    {
        $this->cidade=$cidade;
        $this->bairro=$bairro;
        $this->rua=$rua;
        $this->numero=$numero;
        
    }


    function get_cidade():string
    {
    return $this->cidade;
    }
    

    function get_bairro():string
    {
    return $this->bairro;
    }


    function get_rua():string
    {
    return $this->rua;
    }


    function get_numero():string
    {
    return $this->numero;
    }


    public function __toString(): string
    {
        return "{$this->rua}, {$this->numero}, {$this->bairro}, {$this->cidade}";
    }


}