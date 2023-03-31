<?php
namespace alura\teste\curso_novo;
use alura\teste\curso_novo\Titular;
class Conta{
    use metodosEspeciais;
    private $titular;
    private float $saldo=0;
    private static $numero_de_contas=0;

function __construct(Titular $titular)
{
    $this->titular=$titular;
    
   
   /*or self*/ Conta:: $numero_de_contas ++ ;
}
function __destruct()
{
    if (self::$numero_de_contas>1){
        echo 'há mais de uma conta'.PHP_EOL;
    }
    self::$numero_de_contas--;
    

}


function depositar_saldo(float $valor_a_depositar):void
    {
        if($valor_a_depositar<=0){
            echo "não pode depositar valor negativado".PHP_EOL;
      return; 
        }
            $this ->saldo +=$valor_a_depositar;
        
    }
function sacar(float $valor_a_sacar):void
    {
        if($valor_a_sacar>$this->saldo){
            echo"não pode sacar mais do que vc tem".PHP_EOL;
       return;
        }
            $this->saldo-=$valor_a_sacar;
        
    }
function get_saldo():float
    {
        return $this->saldo;

    }


function trasfere($valor_a_trasferir,Conta $conta_a_receber):void
    {

        if($valor_a_trasferir>$this->saldo)
        {
            echo "não é possivel transferir mais do que o seu limite".PHP_EOL;
            return;
        }
            $this->sacar($valor_a_trasferir);
            $conta_a_receber->depositar($valor_a_trasferir);
    } 


public static function get_numero_de_contas():int
{

return Conta:: $numero_de_contas;
}


function get_nome()
    {
        return $this->titular->get_nome();

    }
    function get_cpf()
    {
        return $this->titular->get_cpf();

    }
}