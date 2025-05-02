<?php

class TreinoModel {
    private $idtreino;
    private $iduser;
    private $nome;
    private $descricao;
    private $dias;
    private $tempo;
    private $tipo;
    private $dataexecucao;

    // ID do treino
    public function getIdTreino() {
        return $this->idtreino;
    }

    public function setIdTreino($idtreino) {
        $this->idtreino = $idtreino;
    }

    // ID do usuário
    public function getIdUser() {
        return $this->iduser;
    }

    public function setIdUser($iduser) {
        $this->iduser = $iduser;
    }

    // Nome do treino
    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    // Descrição do treino
    public function getDescricao() {
        return $this->descricao;
    }

    public function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    // Dias de treino
    public function getDias() {
        return $this->dias;
    }

    public function setDias($dias) {
        $this->dias = $dias;
    }

    // Tempo de treino
    public function getTempo() {
        return $this->tempo;
    }

    public function setTempo($tempo) {
        $this->tempo = $tempo;
    }

    // Tipo de treino
    public function getTipo() {
        return $this->tipo;
    }

    public function setTipo($tipo) {
        $this->tipo = $tipo;
    }

    // Data de execução
    public function getDataExecucao() {
        return $this->dataexecucao;
    }

    public function setDataExecucao($dataexecucao) {
        $this->dataexecucao = $dataexecucao;
    }
}

?>
