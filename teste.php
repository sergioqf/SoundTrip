<?php
class teste{
	private $nome;
	private $sobrenome;
	private $idade;
	
	public function __get($param){
		return $this->$param;
	}
	public function __set($param, $value){
		$this->$param = $value;
	}
	
}

$t = new teste();
$t->nome = "Nil";
$t->sobrenome = "Lima dos Santos";
$t->idade = "27";

echo $t->nome.'tsss'.$t->sobrenome." Idade:".$t->idade." anos.";
