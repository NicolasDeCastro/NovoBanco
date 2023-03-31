<?php
namespace alura\teste\curso_novo;

spl_autoload_register(function (string $nomeCompletoDaClasse){
    $caminhoArquivo = str_replace('alura\\teste', 'C:/Php_certo', $nomeCompletoDaClasse);
    $caminhoArquivo = str_replace('\\', '/', $caminhoArquivo);
    $caminhoArquivo .= '.php';
    
   
 
   if(file_exists($caminhoArquivo)) {
        require_once $caminhoArquivo;
  }
});

use alura\teste\curso_novo\Titular;
use alura\teste\curso_novo\Endereco;
use alura\teste\curso_novo\Conta;

$endereco= new Endereco('sp','sp','teste','123');
$umaConta = new Conta(new Titular('123.456.789-11','nicolas',$endereco));
$umaConta ->depositar_saldo(500);
echo $umaConta -> get_saldo().PHP_EOL;

//$umaConta->set_nome('nicolas');
//$umaConta->set_cpf('123.456.789.10');
echo $umaConta->get_nome().PHP_EOL;
echo $umaConta->get_cpf().PHP_EOL;
$TESTE=new Conta(new Titular('123.555.666.77','carlos',$endereco));
echo Conta:: get_numero_de_contas().PHP_EOL;

