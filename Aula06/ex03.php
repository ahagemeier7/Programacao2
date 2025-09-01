<?php
class Cliente {
    private static int $id;
    public string $nome;
    protected string $cpf;
    public function setcpf(string $cpf){
        if(strlen($cpf) === 11){
            $this->cpf = $cpf;
        }else{
            echo "CPF inválido!";
        }
    }

    public function getcpf() {
        return $this->cpf;
    }
}

?>