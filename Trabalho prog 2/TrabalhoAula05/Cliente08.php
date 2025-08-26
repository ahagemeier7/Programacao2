<?php
//Seguindo o questão 08 foi implementado os métodos get e set para o atributo private
// e criado o atributo protected cpf, em que ngm consegue acessar a não ser a própria classe e suas subclasses
class Cliente {
    private static int $id;
    public string $nome;
    protected string $cpf;
    private string $telefone;

    public function getTelefone(): string {
        return $this->telefone;
    }
    public function setTelefone(string $telefone) {
        $this->telefone = $telefone;
    }

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