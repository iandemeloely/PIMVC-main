<?php
require_once '../Controller/TreinoController.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Pegando os dados do formulário (se existirem)
    $nome = $_POST['nome'] ?? '';
    $tipo = $_POST['tipo'] ?? '';
    $descricao = $_POST['descricao'] ?? '';
    $tempo = $_POST['tempo'] ?? '';
    $dias = $_POST['dias'] ?? '';
    $dataexecucao = $_POST['dataexecucao'] ?? ''; // Campo de data de execução

    // Verificando se todos os campos obrigatórios estão preenchidos
    if (empty($nome) || empty($tipo) || empty($descricao) || empty($tempo) || empty($dias) || empty($dataexecucao)) {
        header('Location: ../View/index.html?msg=Preencha todos os campos!');
        exit;
    }

    // Criando o controlador
    $controller = new TreinoController();

    // Cadastrando o treino
    $sucesso = $controller->cadastrarTreino($nome, $tipo, $descricao, $tempo, $dias, $dataexecucao);

    // Redirecionando com base no sucesso da operação
    if ($sucesso) {
        header('Location: ../View/index.html?msg=Treino cadastrado com sucesso');
    } else {
        header('Location: ../View/index.html?msg=Erro ao cadastrar treino');
    }
}
?>
