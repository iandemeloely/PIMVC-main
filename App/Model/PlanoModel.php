<?php

class PlanoModel {
    private $idplano;
    private $nome;
    private $valor;
    private $descricao;
    private $duracao;
    private $beneficios;
    private $status;

    public function __construct($idplano = null, $nome, $valor, $descricao, $duracao, $beneficios, $status) {
        $this->idplano = $idplano;
        $this->nome = $nome;
        $this->valor = $valor;
        $this->descricao = $descricao;
        $this->duracao = $duracao;
        $this->beneficios = $beneficios;
        $this->status = $status;
    }

    public function getIdPlano() {
        return $this->idplano;
    }

    public function setIdPlano($idplano) {
        $this->idplano = $idplano;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getValor() {
        return $this->valor;
    }

    public function setValor($valor) {
        $this->valor = $valor;
    }

    public function getDescricao() {
        return $this->descricao;
    }

    public function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    public function getDuracao() {
        return $this->duracao;
    }

    public function setDuracao($duracao) {
        $this->duracao = $duracao;
    }

    public function getBeneficios() {
        return $this->beneficios;
    }

    public function setBeneficios($beneficios) {
        $this->beneficios = $beneficios;
    }

    public function getStatus() {
        return $this->status;
    }

    public function setStatus($status) {
        $this->status = $status;
    }
}
?>
