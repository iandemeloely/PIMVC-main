<?php
require_once 'Conexao.php'; // Inclui a conexão
require_once '../Model/TreinoModel.php';

class TreinoDAO {
    private $con;

    public function __construct() {
        $conexao = new Conexao();
        $this->con = $conexao->fazConexao();
    }

    public function cadastrarTreino(TreinoModel $treino) {
        $sql = "INSERT INTO treino (nome, descricao, dias, tempo, tipo, dataexecucao)
                VALUES (:nome, :descricao, :dias, :tempo, :tipo, :dataexecucao)";
        $stmt = $this->con->prepare($sql);
        $stmt->bindValue(':nome', $treino->getNome());
        $stmt->bindValue(':descricao', $treino->getDescricao());
        $stmt->bindValue(':dias', $treino->getDias());
        $stmt->bindValue(':tempo', $treino->getTempo());
        $stmt->bindValue(':tipo', $treino->getTipo());
        $stmt->bindValue(':dataexecucao', $treino->getDataExecucao());
        return $stmt->execute();
    }

    public function buscarTodos() {
        $sql = "SELECT * FROM treino";
        $stmt = $this->con->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>
