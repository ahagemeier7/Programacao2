<?php
//Criação dos setter e getter para os atributos private, 
// e o método aumentarSalario na classe Gerente que herda de Funcionario
class Funcionario{
    private static int $id;
    private string $nome;
    private string $cpf;
    protected float $salario;

    public function getId(): int {
        return $this->id;
    }

    public function getName(): string {
        return $this->nome;
    }

    public function setName(string $nome){
        if(!empty($nome)){
            $this->nome = $nome;
        }
    }

    public function getSalario(): float {
        return $this->salario;
    }

    public function setSalario(float $salario){
        if($salario > 0){
            $this->salario = $salario;
        }else{
            echo "Salário menor que 0!";
        }
    }

}

class Gerente extends Funcionario{
    public function aumentarSalario(Funcionario $funcionario, float $valor): void {
        if ($valor > 0) {
            $funcionario->salario += $valor;
        }
    }
}

?>