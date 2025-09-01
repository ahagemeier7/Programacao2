<?php
class Config{
    public static int $id;
    protected array $parametros = [];
}

class UsuarioAdmin extends Config {
    public function getParametros(): array {
        return $this->parametros;
    }

    public function setParametros(string $parametro): void {
        $this->parametros[] =  $parametro;
    }

    public function deleteParametros(string $parametro): void {
        $key = array_search($parametro, $this->parametros, true);
        if ($key !== false) {
            unset($this->parametros[$key]);
        }else{
            echo "Parâmetro não encontrado.";
        }
    }
}

?>