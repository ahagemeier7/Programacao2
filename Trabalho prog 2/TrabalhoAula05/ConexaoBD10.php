<?php
//Criação da classe ConexaoBD com os atributos private host, dbname, usuario e senha
// e o método getConexao que retorna o metodo privado conectar com o banco de dados
class ConexaoBD {
    private static string $host = 'localhost';
    private static string $dbname = 'banco123';
    private static string $usuario = 'sa';
    private static string $senha = '1234';

    private function conectar(){
        echo "Conectado ao banco de dados " . self::$dbname . " no host " . self::$host . " com o usuário " . self::$usuario;
    }

    public function getConexao(){
        return $this->conectar();
    }

}
?>