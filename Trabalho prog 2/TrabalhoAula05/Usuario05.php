<?php
//Criado os setter e getter para os atributos private, e o método verificarSenha para validar a senha do usuário
class Usuario{
    private static int $id;    
    private string $nome;
    private string $email;
    private string $senha;

    public function verificarSenha(string $senha): bool {
        return $this->senha === $senha;
    }

    public function getNome(): string {
        return $this->nome;
    }
    public function getEmail(): string {
        return $this->email;
    }

    public function setSenha(string $senha): void {
        $this->senha = $senha;
    }
    public function setNome(string $nome): void {
        if(!empty($nome)){
            $this->nome = $nome;
        }else{
            echo "Nome inválido!";
        }
    }
    public function setEmail(string $email): void {
        $this->email = $email;
    }

}

?>