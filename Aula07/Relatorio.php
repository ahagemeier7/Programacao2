<?php

class Relatorio {
    public $titulo;
    public $conteudo;

    public function __call($nomeMetodo, $parametros)
    {
        if ($nomeMetodo === 'gerar') {
            $nparametros = count($parametros);

            if ($nparametros === 1) {
                return $this->gerar($parametros[0]);
            } elseif ($nparametros === 2) {
                return $this->gerarPeriodo($parametros[0], $parametros[1]);
            } elseif ($nparametros === 3) {
                return $this->gerarFiltro($parametros[0], $parametros[1], $parametros[2]);
            } else {
                return "Número inválido de parâmetros para gerar relatório.";
            }
        }
        else{
            return "Método $nomeMetodo não encontrado.";
        }
    }

    private function gerar($tipo)
    {
        return "Relatório simples: $tipo";
    }

    private function gerarPeriodo($tipo, $periodo)
    {
        return "Relatório: $tipo para o período: $periodo";
    }

    private function gerarFiltro($tipo, $periodo, $filtro)
    {
        return "Relatório: $tipo, período: $periodo, com filtro: $filtro";
    }
}


?>