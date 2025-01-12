<?php
// Verificar se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Verificar se os campos estão definidos
    $nome = isset($_POST['nome']) ? trim($_POST['nome']) : null;
    $email = isset($_POST['email']) ? trim($_POST['email']) : null;
    $mensagem = isset($_POST['mensagem']) ? trim($_POST['mensagem']) : null;

    // Validar os campos obrigatórios
    if (empty($nome) || empty($email) || empty($mensagem)) {
        die('Por favor, preencha todos os campos obrigatórios.');
    }

    // Configurar conexão com o banco de dados
    $host = 'localhost'; // Endereço do servidor do banco de dados
    $db = 'projeto_alice'; // Nome do banco de dados
    $user = 'root'; // Usuário do banco de dados
    $password = ''; // Senha do banco de dados

    try {
        // Criar conexão com PDO
        $conn = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Preparar e executar o comando SQL
        $stmt = $conn->prepare("INSERT INTO suporte (nome, email, mensagem) VALUES (:nome, :email, :mensagem)");
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':mensagem', $mensagem);

        if ($stmt->execute()) {
            echo 'Mensagem enviada com sucesso!';
        } else {
            echo 'Erro ao enviar a mensagem.';
        }
    } catch (PDOException $e) {
        die('Erro na conexão com o banco de dados: ' . $e->getMessage());
    }
} else {
    die('Acesso inválido.');
}
?>
