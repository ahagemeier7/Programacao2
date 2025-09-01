<?php
class Usuario{
    private static int $id;    
    public string $nome;
    private string $senha;

    public function verificarSenha(string $senha): bool {
        return $this->senha === $senha;
    }

    public function setSenha(string $senha): void {
        $this->senha = $senha;
    }


}

?>